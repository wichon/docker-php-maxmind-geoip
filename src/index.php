<?php
    	$geoip = array(
		'client_ip' => getenv('MMDB_ADDR'),
		'country' => getenv('MM_COUNTRY_CODE'),
		'country_name' => getenv('MM_COUNTRY_NAME'),
   		'region' => getenv('MM_REGION_NAME'),
        	'region_code' => getenv('MM_REGION_CODE'),
		'city' => getenv('MM_CITY_NAME'),
		'postal_code' => getenv('MM_POSTAL_CODE'),
		'latitude' => getenv('MM_LATITUDE'),
        	'longitude' => getenv('MM_LONGITUDE')
	);
	print (json_encode($geoip, JSON_PRETTY_PRINT));
?>

