<?
/*
TODO
    - functions to iterate over json parsed data
    - remove all echo's, use returns only. 
*/
/*
* takes a url as a string and returns the raw html
* @param    url     string with url destination
* @post     returns string with content of request
*/
$arrival_dictionary = array(
    'Memorial_Hall' => 2737275,
    'Health_Sciences' => 2737363

);
function request( $url )
{
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));
    //$curl = curl_init($url);
    $response = curl_exec($curl);
    curl_close($curl);
    //TODO
    /*
    json parse the content of the response into a usable array
    handle conditions where only one bus is available:w

    */
    //return substr($response,1,strlen($response)-2);
    return $response;
} 

/*
*Return an array with the seconds to arrival for all buses given a json response
*@param     json response
*@post      array with seconds for arrival
*/
function seconds_to_arrival($response){
    $response = substr($response,1,strlen($response)-2);
    $json_obj = json_decode($response);
    $seconds_to_arrival = array();
    foreach($json_obj->Arrivals as $bus){
        array_push($seconds_to_arrival,$bus->SecondsToArrival);
    }
    var_export($seconds_to_arrival);
    return $seconds_to_arrival;
}

?>
