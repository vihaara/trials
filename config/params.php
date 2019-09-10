<?php

$params = [
    'adminEmail' => <email>,
    'apiToken' => <apitoken>, // Token https://www.travelpayouts.com/developers/api
    'apiMarker' => <apimarker>,  // Marker https://www.travelpayouts.com/developers/api
    'apiResponseLang' => 'en', // Response language : en,ru,de,es,fr,it,pl,th.
    'title' => <app name>, // Title of your app
    'baseUrl' => '/flights1'
];

// Don't change anything below this line
$localParamsPath = __DIR__ . DIRECTORY_SEPARATOR . 'params_local.php';
if (file_exists($localParamsPath))
    $params = array_merge($params, require($localParamsPath));

return $params;
