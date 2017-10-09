<?php

$url = 'https://full-jck.cs23.force.com/CSRWebService/services/apexrest/CSRWS';
$data = $_POST;

$options = [
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded",
        'method'  => 'POST',
        'content' => http_build_query($data)
    ]
];
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

var_dump($result);
