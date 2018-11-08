<?php
require_once "Widget.php";
class OpenWeatherMapWidget extends Widget {

	protected $apiURI = "http://api.openweathermap.org/data/2.5/weather?";
	protected $defaultApiUnit = "k";
	protected $apiCall;
	protected $cacheFile;
	public $options = array(
		"appid" => "", // Api Key

		//location options
		"zip" => "", // weather?zip={zip code},{country code}
		"city_name" => "", // weather?q=London
		"country_code" => "us", // weather?q=London,uk

		"unit" => "f",
	);

	public function __construct($options) {
		parent::__construct($options);

		// Set location
		$location = "";
		if( !empty($this->options["zip"]) && !empty($this->options["country_code"]) ){
			$location = "zip=" . $this->options["zip"] . "," . $this->options["country_code"];
		} else if( !empty($this->options["city_name"]) && !empty($this->options["country_code"]) ) {
			$location = "q=" . $this->options["city_name"] . "," . $this->options["country_code"];
		} else if ( !empty($this->options["city_name"]) ) {
			$location = "q=" . $this->options["city_name"];
		} else if ( !empty($this->options["city_id"]) ) {
			$location = "id=" . $this->options["city_id"];
		}

		// Offload temp conversion to the api
		$unit = "";
 		if( strtolower($this->options["unit"]) === "c" ){
			$unit = "&units=metric";
		} else if( strtolower($this->options["unit"]) === "f" ) {
			$unit = "&units=imperial";
		}

		// check for necessary options to be set
		$apiKey = $this->options['apiKey'];
		if( $location === "" )
			throw new Exception("Location Not Found or Not Specified", 1);
		if( $apiKey === "" )
			throw new Exception("Api Key Not Specified", 1);

		// set the api call and cachefile for the call.
		$this->apiCall = $this->apiURI . $location . "&appid=" . $apiKey . $unit;
		$this->cacheFile = 'cache' . DIRECTORY_SEPARATOR . md5($this->apiCall);

	}

	protected function hasApiError($response) {

		if( !empty($this->curlError) ) {
			return $this->curlError;
		}

		if( $response->cod !== 200 ) {
			return $response->cod . ":  " . $response->message;
		}

		return false;
	}

	protected function dataToCommonJSON($response) {

		$common = array();

		$common['lat'] = isset($response->coord->lat) ? $response->coord->lat : "";
		$common['lon'] = isset($response->coord->lon) ? $response->coord->lon : "";
		$common['code'] = isset($response->weather[0]->id) ? $response->weather[0]->id : "";
		$common['forecast'] = isset($response->weather[0]->main) ? $response->weather[0]->main : "";
		$common['desc'] = isset($response->weather[0]->description) ? $response->weather[0]->description : "";
		$common['icon'] = $common['code'] == 905 ? $this->mapIcon($common['code']) : $this->mapIcon($response->weather[0]->icon);
		$common['temp'] = isset($response->main->temp) ? round($response->main->temp) : "";
		$common['pressure'] = isset($response->main->pressure) ? $response->main->pressure : "";
		$common['humidity'] = isset($response->main->humidity) ? $response->main->humidity : "";
		$common['min'] = isset($response->main->temp_min) ? round($response->main->temp_min) : "";
		$common['max'] = isset($response->main->temp_max) ? round($response->main->temp_max) : "";
		$common['sea_level'] = isset($response->main->sea_level) ? $response->main->sea_level : "";
		$common['ground_level'] = isset($response->main->grnd_level) ? $response->main->grnd_level : "";
		$common['wind'] = array(
			"speed" => $response->wind->speed,
			"deg" => $response->wind->deg
		);
		$common['clouds'] = isset($response->clouds->all) ? $response->clouds->all : "";
		$common['dt'] = isset($response->dt) ? $response->dt : "";
		$common['sunrise'] = isset($response->sys->sunrise) ? $response->sys->sunrise : "";
		$common['sunset'] = isset($response->sys->sunset) ? $response->sys->sunset : "";
		$common['name'] = isset($response->name) ? $response->name : "";

		if( isset($response->error) ){
			$common['error'] = $response->error;
		}

		return $common;
	}

	protected function mapIcon($code){
		switch ($code) {
			// clear day
			case '01d':
				return "icon-32";
			case '01n':
				return "icon-33";

			// few clouds
			case '02d':
				return "icon-28";
			case '02n':
				return "icon-29";

			// scattered clouds
			case '03d':
				return "icon-26";
			case '03n':
				return "icon-26";

			// broken clouds
			case '04d':
				return "icon-26";
			case '04n':
				return "icon-26";


			// shower rain
			case '09d':
				return "icon-5";
			case '09n':
				return "icon-5";

			// rain
			case '10d':
				return "icon-40";
			case '10n':
				return "icon-40";

			// thunderstorm
			case '11d':
				return "icon-3";
			case '11n':
				return "icon-3";

			// snow
			case '13d':
				return "icon-9";
			case '13n':
				return "icon-9";

			// mist
			case '50d':
				return "icon-19";
			case '50n':
				return "icon-19";

			// windy - Must be passed as condition code instead  of icon
			case '905':
				return "icon-24";

			default:
				return false;
		}
	}

}

/*********************************************************

	API response JSON

**********************************************************
coord
	coord.lon City geo location, longitude
	coord.lat City geo location, latitude
weather (more info Weather condition codes)
	weather.id Weather condition id
	weather.main Group of weather parameters (Rain, Snow, Extreme etc.)
	weather.description Weather condition within the group
	weather.icon Weather icon id
base Internal parameter
main
	main.temp Temperature. Unit Default: Kelvin, Metric: Celsius, Imperial: Fahrenheit.
	main.pressure Atmospheric pressure (on the sea level, if there is no sea_level or grnd_level data), hPa
	main.humidity Humidity, %
	main.temp_min Minimum temperature at the moment. This is deviation from current temp that is possible for large cities and megalopolises geographically expanded (use these parameter optionally). Unit Default: Kelvin, Metric: Celsius, Imperial: Fahrenheit.
	main.temp_max Maximum temperature at the moment. This is deviation from current temp that is possible for large cities and megalopolises geographically expanded (use these parameter optionally). Unit Default: Kelvin, Metric: Celsius, Imperial: Fahrenheit.
	main.sea_level Atmospheric pressure on the sea level, hPa
	main.grnd_level Atmospheric pressure on the ground level, hPa
wind
	wind.speed Wind speed. Unit Default: meter/sec, Metric: meter/sec, Imperial: miles/hour.
	wind.deg Wind direction, degrees (meteorological)
clouds
	clouds.all Cloudiness, %
rain
	rain.3h Rain volume for the last 3 hours
snow
	snow.3h Snow volume for the last 3 hours
dt Time of data calculation, unix, UTC
sys
	sys.type Internal parameter
	sys.id Internal parameter
	sys.message Internal parameter
	sys.country Country code (GB, JP etc.)
	sys.sunrise Sunrise time, unix, UTC
	sys.sunset Sunset time, unix, UTC
id City ID
name City name
cod Internal parameter


icon codes = https://openweathermap.org/weather-conditions
01d clear sky day (sunny)
01n clear sky night Moon

**********************************************************

 End API Docs

*********************************************************/