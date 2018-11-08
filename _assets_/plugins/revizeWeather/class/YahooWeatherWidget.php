<?php
require_once "Widget.php";
class YahooWeatherWidget extends Widget {

	protected $apiURI = "https://query.yahooapis.com/v1/public/yql?";
	protected $queryByCityName = "SELECT item.condition FROM weather.forecast WHERE woeid in (SELECT woeid from geo.places(1) WHERE text=\"%s\")";
	protected $queryByWoeid = "SELECT item.condition FROM weather.forecast WHERE woeid = %s";
	protected $queryByLatLong = "SELECT item.condition FROM weather.forecast WHERE woeid = %s";
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
  "created": "2018-06-21T21:12:39Z",
  "lang": "en-US",
  "results": {
   "channel": {
    "item": {
     "condition": {
      "code": "32",
      "date": "Thu, 21 Jun 2018 01:00 PM MST",
      "temp": "101",
      "text": "Sunny"
     }
    }
   }
  }
 }
}

**********************************************************

 End API Docs

*********************************************************/