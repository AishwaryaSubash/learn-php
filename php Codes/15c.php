<?php

function get_meters_between_points($latitude1, $longitude1, $latitude2, $longitude2) {
	if (($latitude1 == $latitude2) && ($longitude1 == $longitude2)) { return 0; } // distance is zero because they're the same point
	$p1 = deg2rad($latitude1);
	$p2 = deg2rad($latitude2);
	$dp = deg2rad($latitude2 - $latitude1);
	$dl = deg2rad($longitude2 - $longitude1);
	$a = (sin($dp/2) * sin($dp/2)) + (cos($p1) * cos($p2) * sin($dl/2) * sin($dl/2));
	$c = 2 * atan2(sqrt($a),sqrt(1-$a));
	$r = 6371008; // Earth's average radius, in meters
	$d = $r * $c;
	return $d; // distance, in meters
}

function get_distance_between_points($latitude1, $longitude1, $latitude2, $longitude2) {
	$meters = get_meters_between_points($latitude1, $longitude1, $latitude2, $longitude2);
	$kilometers = $meters / 1000;
	$miles = $meters / 1609.34;
	$yards = $miles * 1760;
	$feet = $miles * 5280;
	return compact('miles','feet','yards','kilometers','meters');
}
$point1 = array(40.713008, -74.013169);
$point2 = array(40.829643, -73.926175);
$distance = get_distance_between_points($point1['0'], $point1['1'], $point2['0'], $point2['1']);
echo '<p>The two points are '.round($distance['miles'],2).' miles apart.</p>';

?>