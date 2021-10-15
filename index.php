<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<? include 'main.php'; ?>
</head>
<body>
    <?
    //sandwhich route id between route_base_url_0/1
    $arrival_base_url_0 ='https://routes.uga.edu/Stop/'; 
    $arrival_base_url_1 = '/Arrivals?customerID=106';
    //$response = request($route_base_url_0.'2737310'.$route_base_url_1);
    $response = json_decode(request($arrival_base_url_0.$arrival_dictionary['Memorial_Hall'].$arrival_base_url_1),true);
    //print_r($response);
    var_export(($response->Arrivals));
    foreach($response->Arrivals as $bus){
        print_r($bus);
    }
   // seconds_to_arrival($response);
    //echo $response;
    //echo seconds_to_arrival($response);
    //var_dump(seconds_to_arrival($response));
    /*
    echo '<br><br>';
    //$response = substr($response,1,strlen($response)-2);
   //var_dump(json_decode($response, true)); 
   echo '<pre>' . var_export(json_decode($response,true),true) . '</pre>';
   $json_obj = json_decode($response);
   echo "#################<br><br>";
   $seconds_to_arrival = array();
   foreach($json_obj->Arrivals as $bus){
       print_r($bus->SecondsToArrival);
       array_push($seconds_to_arrival,$bus->SecondsToArrival);
       echo "<br>";
   }
   var_export($seconds_to_arrival);
   */
  //var_export(json_decode(request('https://routes.uga.edu/Route/2611/Vehicles'),true));
  //var_export(json_decode(request('https://routes.uga.edu/Stop/2737363/Arrivals'),true));
  // seconds_to_arrival(json_decods(request('https://routes.uga.edu/Stop/2737363/Arrivals')))
    ?>
</body>
</html>