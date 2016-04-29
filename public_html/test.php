<?php

define('EARTH_RAD', 3959);

$maxDistance = 100;

$homeLat = 53.3381985;
$homeLong = -6.2592576;

$fh = fopen('customers.txt', 'r');

$custList = array();


while($line = fgets($fh)){
    $customer = json_decode($line);

    $dist = getDistance($homeLat, $homeLong, $customer->latitude, $customer->longitude);
    
    if($dist <= $maxDistance){
        $custList[$customer->user_id] = $customer->name;
    }
}

ksort($custList);

foreach($custList as $id => $name){
    echo $id . ' - ' . $name . "\n";
}


function getDistance($lat1, $long1, $lat2, $long2){
    // convert from degrees to radians
    $latFrom = deg2rad($lat1);
    $longFrom = deg2rad($long1);
    $latTo = deg2rad($lat2);
    $longTo = deg2rad($long2);

    $latDiff = $latFrom - $latTo;
    $longDiff = $longFrom - $longTo;

    $angle = 2 * asin(
        sqrt(
            pow(sin($latDiff / 2), 2) + (cos($latFrom) * cos($latTo)) * pow(sin($longDiff / 2), 2)
        )
    );

    return $angle * EARTH_RAD;
}

