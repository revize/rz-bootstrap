<?php
require_once "Widget.php";
class YahooWeatherWidget extends Widget {

	protected $apiURI = "https://query.yahooapis.com/v1/public/yql?";
	protected $queryByCityName = "SELECT item FROM weather.forecast WHERE woeid in (SELECT woeid from geo.places(1) WHERE text=\"%s\")";
	protected $queryByWoeid = "SELECT item FROM weather.forecast WHERE woeid = %s";
	protected $queryByLatLong = "SELECT item FROM weather.forecast WHERE woeid = %s";
	protected $defaultApiUnit = "k";
	protected $apiCall;
	protected $cacheFile;
	public $options = array(
		"appid" => "", // Api Key

		//location options
		"woeid" => "", // weather?q={zip code},{country code}
		"city_name" => "", // weather?q=clarkdale,az
		"latlong" => "", // weather?=

		"unit" => "f",
	);

	private function encodeURIComponent($str) {

		$revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');

		return strtr(rawurlencode($str), $revert);

	}

	public function __construct($options) {
		parent::__construct($options);

		// Set query type
		$query = "";
		if( !empty($this->options["woeid"]) ) {

			$query = "q=" . $this->encodeURIComponent( sprintf($this->queryByWoeid, $this->options["woeid"]) );

		} else if( !empty($this->options["city_name"]) ) {

			$query = "q=" . $this->encodeURIComponent( sprintf($this->queryByCityName, $this->options["city_name"]) );

		} else if ( !empty($this->options["latlong"]) ) {

			$query = "q=" . $this->encodeURIComponent( sprintf($this->queryByLatLong, $this->options["latlong"]) );

		}

		// set the api call and cachefile for the call.
		$this->apiCall = $this->apiURI . $query . "&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys";
		$this->cacheFile = 'cache' . DIRECTORY_SEPARATOR . md5($this->apiCall);

	}

	protected function hasApiError($response) {

		if( !empty($this->curlError) ) {
			return $this->curlError;
		}

		if( !empty($response->error) ){
			return $response->error->description;
		}

		return false;
	}

	protected function dataToCommonJSON($response) {

		$common = array();

		try {

			$condition = $response->query->results->channel->item->condition;

			$common['code'] = isset($condition->code) ? $condition->code : "";
			$common['temp'] = isset($condition->temp) ? $condition->temp : "";
			$common['date'] = isset($condition->date) ? $condition->date : "";
			$common['desc'] = isset($condition->text) ? $condition->text : "";
			$common['icon'] = $this->mapIcon($common['code']);
			$common['raw'] = $response;

		} catch (Exception $e) {

			if( isset($response->error) ){
				$common['error'] = "Error parsing API response: $e";
			}

		}


		if( isset($response->error) ){
			$common['error'] = $response->error;
		}

		return $common;
	}

	protected function mapIcon($code){

		return "icon-" . $code;

	}

}

/*********************************************************

	API response JSON

**********************************************************

{
 "query": {
  "count": 1,
  "created": "2018-12-12T03:08:43Z",
  "lang": "en-US",
  "results": {
   "channel": {
    "units": {
     "distance": "mi",
     "pressure": "in",
     "speed": "mph",
     "temperature": "F"
    },
    "title": "Yahoo! Weather - Nome, AK, US",
    "link": "http://us.rd.yahoo.com/dailynews/rss/weather/Country__Country/*https://weather.yahoo.com/country/state/city-2460286/",
    "description": "Yahoo! Weather for Nome, AK, US",
    "language": "en-us",
    "lastBuildDate": "Tue, 11 Dec 2018 06:08 PM AKST",
    "ttl": "60",
    "location": {
     "city": "Nome",
     "country": "United States",
     "region": " AK"
    },
    "wind": {
     "chill": "1",
     "direction": "23",
     "speed": "13"
    },
    "atmosphere": {
     "humidity": "76",
     "pressure": "979.0",
     "rising": "0",
     "visibility": "16.1"
    },
    "astronomy": {
     "sunrise": "11:49 am",
     "sunset": "4:0 pm"
    },
    "image": {
     "title": "Yahoo! Weather",
     "width": "142",
     "height": "18",
     "link": "http://weather.yahoo.com",
     "url": "http://l.yimg.com/a/i/brand/purplelogo//uh/us/news-wea.gif"
    },
    "item": {
     "title": "Conditions for Nome, AK, US at 05:00 PM AKST",
     "lat": "64.499474",
     "long": "-165.405792",
     "link": "http://us.rd.yahoo.com/dailynews/rss/weather/Country__Country/*https://weather.yahoo.com/country/state/city-2460286/",
     "pubDate": "Tue, 11 Dec 2018 05:00 PM AKST",
     "condition": {
      "code": "26",
      "date": "Tue, 11 Dec 2018 05:00 PM AKST",
      "temp": "13",
      "text": "Cloudy"
     },
     "forecast": [
      {
       "code": "26",
       "date": "11 Dec 2018",
       "day": "Tue",
       "high": "16",
       "low": "9",
       "text": "Cloudy"
      },
      {
       "code": "28",
       "date": "12 Dec 2018",
       "day": "Wed",
       "high": "8",
       "low": "1",
       "text": "Mostly Cloudy"
      },
      {
       "code": "34",
       "date": "13 Dec 2018",
       "day": "Thu",
       "high": "0",
       "low": "-11",
       "text": "Mostly Sunny"
      },
      {
       "code": "30",
       "date": "14 Dec 2018",
       "day": "Fri",
       "high": "-8",
       "low": "-12",
       "text": "Partly Cloudy"
      },
      {
       "code": "34",
       "date": "15 Dec 2018",
       "day": "Sat",
       "high": "-6",
       "low": "-10",
       "text": "Mostly Sunny"
      },
      {
       "code": "34",
       "date": "16 Dec 2018",
       "day": "Sun",
       "high": "-8",
       "low": "-11",
       "text": "Mostly Sunny"
      },
      {
       "code": "30",
       "date": "17 Dec 2018",
       "day": "Mon",
       "high": "-3",
       "low": "-11",
       "text": "Partly Cloudy"
      },
      {
       "code": "34",
       "date": "18 Dec 2018",
       "day": "Tue",
       "high": "-2",
       "low": "-5",
       "text": "Mostly Sunny"
      },
      {
       "code": "32",
       "date": "19 Dec 2018",
       "day": "Wed",
       "high": "-4",
       "low": "-6",
       "text": "Sunny"
      },
      {
       "code": "32",
       "date": "20 Dec 2018",
       "day": "Thu",
       "high": "-7",
       "low": "-10",
       "text": "Sunny"
      }
     ],
     "description": "<![CDATA[<img src=\"http://l.yimg.com/a/i/us/we/52/26.gif\"/>\n<BR />\n<b>Current Conditions:</b>\n<BR />Cloudy\n<BR />\n<BR />\n<b>Forecast:</b>\n<BR /> Tue - Cloudy. High: 16Low: 9\n<BR /> Wed - Mostly Cloudy. High: 8Low: 1\n<BR /> Thu - Mostly Sunny. High: 0Low: -11\n<BR /> Fri - Partly Cloudy. High: -8Low: -12\n<BR /> Sat - Mostly Sunny. High: -6Low: -10\n<BR />\n<BR />\n<a href=\"http://us.rd.yahoo.com/dailynews/rss/weather/Country__Country/*https://weather.yahoo.com/country/state/city-2460286/\">Full Forecast at Yahoo! Weather</a>\n<BR />\n<BR />\n<BR />\n]]>",
     "guid": {
      "isPermaLink": "false"
     }
    }
   }
  }
 }
}


**********************************************************

 End API Docs

*********************************************************/