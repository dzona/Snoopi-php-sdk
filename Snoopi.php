<?php

/**
 *  @package    Snoopi
 */

/**
 *  Snoopi.io GeoCoding / Location Information 
 *
 *
 *  Website: https://www.snoopi.io
 *  
 *  @package    Snoopi
 *  @author     Carlos Arias
 *  @copyright  (c) 2015-2018 - Carlos Arias
 *  @version    1.0
 *  @license http://opensource.org/licenses/gpl-3.0.html GNU General Public License v3
 */

class Snoopi { 

 private $api_key = '';   // INSERT YOUR KEY HERE
 private $url = "https://api.snoopi.io/v1";



public function send_request($url, $data="") { 
		$data['apikey']=$this->api_key;
	    $URLQuery =  urldecode(http_build_query($data, '', '&'));
		//  echo $url . "?" . $URLQuery;  #Test

        // create curl resource
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url . "?" . $URLQuery);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);     

		return $output;
}
		
	
    /**
     * @param array|null $params
     *
     * @basic usage GeoIPLocation('186.83.228.58')
	 *
     * @return JSON.
     */

	function GeoIPLocation($IPAddress, $params="") {
		$url = "{$this->url}/ip/{$IPAddress}";
		$Response = $this->send_request($url, $params); 
		return $Response;
	}


    /**
     * @param array|null $params
     *
     * @fromZip toZip numeric value (55555)
     *
     * @basic usage ZipCodeDistance('33426', '33433')
	 *
     * @return JSON.
     */

	function ZipCodeDistance($fromZip, $ToZip, $params="") {
		$url = "{$this->url}/zipcodedistance/{$fromZip}-{$ToZip}";
		$Response = $this->send_request($url, $params); 

		return $Response;
	}

    /**
     * @param array|null $params
     * 
     * @str string abreviated state
     *
     * @basic usage StateInfo('FL')
	 *
     * @return JSON.
     */
	function StateInfo($str, $params="") {
		$data = trim($data);
		$data = urlencode($data);

		$url = "{$this->url}/stateinfo/$data";
		$Response = $this->send_request($url, $params); 
		return $Response;
	}

    /**
     * @param array|null $params
     * 
     * @str string abreviated state
     *
     * @basic usage GetCities('FL')
	 *
     * @return JSON.
     */
	function GetCities($str, $params="") {
		$data = trim($data);
		$data = urlencode($data);

		$url = "{$this->url}/getcities/$data";
		$Response = $this->send_request($url, $params); 
		return $Response;
	}

    /**
     * @param array|null $params
     * 
     * @FromZip numeric (55555)
	 *
	 * @Radius numeric (miles) 10 is default 
     *
     * @basic usage ZipCodeRadius('33426', 10)
	 *
     * @return JSON.
     */
	function ZipCodeRadius($FromZip, $Radius, $params="") {
		$url = "{$this->url}/zipcoderange/{$FromZip}-{$Radius}";
		$Response = $this->send_request($url, $params); 
		return $Response;
	}

 

} // End Class
