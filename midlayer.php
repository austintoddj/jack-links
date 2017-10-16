<?php

// Web Service URL
$url = 'https://full-jck.cs23.force.com/CSRWebService/services/apexrest/CSRWS';

// Initialize an empty data array
$data = [];

// Add the $_POST data to the array
foreach ($_POST as $key => $value) {
    $data[] = $key => $value;
}

$options = [
    'http' => [
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'method'  => 'POST',
        'content' => http_build_query(json_encode($data))
    ]
];

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

if ($result) {
    return true;
} else {
    return false;
}
