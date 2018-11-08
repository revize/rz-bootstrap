<?php
abstract class Widget {

	protected $apiCall;
	protected $apiURI;
	protected $defaultApiUnit;
	protected $cacheExpiration = "-60 minutes";
	protected $cacheSize = 100000;
	protected $cacheFile;
	protected $RAW_PHP = false;
	protected $curlError = "";

	public $options;

	abstract protected function dataToCommonJSON($response); // api specific conversion to make js interface similar accross APIS
	abstract protected function hasApiError($response); // check api response for error code - specific to api

	public function __construct($options) {
		if( isset($options["RAW_PHP"]) && $options["RAW_PHP"] === true ){
			$this->RAW_PHP = true;
		}

		$options = array_filter($options, function($value) { return $value !== ''; }); // remove empty passes to preserve defaults
		$this->options = array_replace($this->options, $options);

		// the rest of this function is API specific and should be specified in the adapter
	}

	// cURL request to the API
	protected function queryApi() {

		//clear existing errors
		$this->curlError = "";

		// Set curl handler
		$curl = curl_init();

		// set options for get request
		curl_setopt_array($curl, array(
		    CURLOPT_RETURNTRANSFER => 1,
		    CURLOPT_URL => $this->apiCall,
		    CURLOPT_USERAGENT => 'API cURL Request'
		));

		// send request and save response
		$response = curl_exec($curl);

		if( $errno = curl_errno($curl) ) {
		    $error_message = curl_strerror($errno);
		    $this->curlError = "cURL error ({$errno}): {$error_message}";
		}

		curl_close($curl);

		return $response;
	}

	// Returns array with two values [0]:
	protected function checkCache($ignoreTime = false) {
		if( file_exists($this->cacheFile) ) {
			$fHandler = fopen($this->cacheFile,'r');
			$cacheTime = trim(fgets($fHandler)); // fisrt line of file is timestamp

	        if ( $cacheTime > strtotime($this->cacheExpiration) || $ignoreTime === true) {
	            return fread($fHandler, $this->cacheSize);
	        }

	       fclose($fHandler);

		} else {
	        	// print "ignorTime: ".$ignoreTime;
			return false;
		}
	}

	protected function deleteCache() {
		if(file_exists($this->cacheFile)) unlink($this->cacheFile);
	}

	protected function writeCache($filedata) {
		$this->deleteCache();

		// print "Writing Cache File\n";
		$fHandler = fopen($this->cacheFile, 'w');
	    fwrite($fHandler, time() . "\n");
	    fwrite($fHandler, $filedata);
	    fclose($fHandler);
	}

	public function getData() {

		$cache = $this->checkCache();

		$response="";
		if( $cache == false ) {

			// get an api response
			$response = $this->queryApi();

			// convert to array for parsing
			$responseDecoded = json_decode($response);
			$hasApiError = $this->hasApiError($responseDecoded);
			if( $hasApiError === false ) {
				$this->writeCache($response);
			} else {
				$cache = $this->checkCache(true); // check for older cache to fallback on before throwing error
				if( $cache !== false ){
					$responseDecoded = json_decode($cache);
				} else {
					$responseDecoded = json_decode(array( "error" => $hasApiError));
				}
			}

		} else {
			// fetch from cache
			$responseDecoded = json_decode($cache);
		}

		// print "Response as String = " . $response;


		if( $response === null ) {
			throw new Exception("No Response to return", 1);
		}

		// Convert the response to a common js interface.
		$response = $this->dataToCommonJSON($responseDecoded);

		if( $this->RAW_PHP === false ){
			$response = json_encode($response);
		}

		return $response;
	}
}