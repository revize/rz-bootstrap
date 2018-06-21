<?php
require_once "Widget.php";
class SocialFeedWidget extends Widget {

	protected $apiURI = "";
	protected $defaultApiUnit = "k";
	protected $apiCall;
	protected $cacheFile;
	public $options = array(

		"requestURI" => "", // full API Request

	);


	public function __construct($options) {
		parent::__construct($options);

		if( !empty($this->options["requestURI"]) && !empty($this->options["requestURI"]) ){

			$this->apiCall = $this->options["requestURI"];
			$this->cacheFile = 'cache' . DIRECTORY_SEPARATOR . md5($this->apiCall);

		} else {

			throw new Exception("Empty API Call", 1);

		}

	}


	protected function hasApiError($response) {



		if( empty($response) ) {

			// return $response->cod . ":  " . $response->message;
			return "API ERROR:  No Response - Request URI: " . $this->apiCall;

		}

		return false;

	}

	protected function dataToCommonJSON($response) {

		// do nothing to the data
		return $response;

	}

}

/*********************************************************

	API response JSON

**********************************************************

This should return exactly what is given to it from the api
No extra parsing needed to provide social feed what is expected

**********************************************************

 End API Docs

*********************************************************/