<?php

$params = [
    'adminEmail' => 'info@arsvihaaraholidays.com',
    'apiToken' => 'cefc614817896aea42eb848c8a79bac9', // Token https://www.travelpayouts.com/developers/api
    'apiMarker' => '235169',  // Marker https://www.travelpayouts.com/developers/api
    'apiResponseLang' => 'en', // Response language : en,ru,de,es,fr,it,pl,th.
    'title' => 'TravelPayoutsapp', // Title of your app
    'baseUrl' => '/flights1'
];

// Don't change anything below this line
$localParamsPath = __DIR__ . DIRECTORY_SEPARATOR . 'params_local.php';
if (file_exists($localParamsPath))
    $params = array_merge($params, require($localParamsPath));

return $params;
