<?
/*
* takes a url as a string and returns the raw html
* @param    url     string with url destination
* @post     returns string with content of request
* @post     returns bool false if response is blank
*/
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
    
    $response = curl_exec($curl);
    echo $response;
    curl_close($curl);
    //TODO
    /*
    json parse the content of the response into a usable array
    handle conditions where only one bus is available:w

    */
    if(strlen($response<3)){
        echo "false";
        return false;
    }
    elseif ($response[0]) { 
    }
    else {
        echo "true";
        return $response;
    }
} 
?>
