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
    $route_base_url_0 ='https://routes.uga.edu/Route/'; 
    $route_base_url_1 = '/Vehicles?Content-Type=application/json;%20charset=utf-8&Host=routes.uga.edu';
    echo request($route_base_url_0.'2615'.$route_base_url_1);
   
   //var_dump(json_decode($response, true)); 
   echo '<pre>' . var_export(json_decode($response, true),true) . '</pre>';
    ?>
</body>
</html>