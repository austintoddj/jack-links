<?php

$url = 'https://full-jck.cs23.force.com/CSRWebService/services/apexrest/CSRWS';

$data = [
    'UPCCode'               => (string) $_POST['UPCCode'],
    'BestBy'                => $_POST['BestBy'],
    'BatchNumber'           => (string) $_POST['BatchNumber'],
    'StoreName'             => (string) $_POST['StoreName'],
    'StoreAddress'          => (string) $_POST['StoreAddress'],
    'StoreAddress'          => (string) $_POST['StoreAddress'],
    'StoreCity'             => (string) $_POST['StoreCity'],
    'StoreState'            => (string) $_POST['StoreState'],
    'Issue'                 => (string) $_POST['Issue'],
    'ConsumerFirstName'     => (string) $_POST['ConsumerFirstName'],
    'ConsumerLastName'      => (string) $_POST['ConsumerLastName'],
    'ConsumerAddress1'      => (string) $_POST['ConsumerAddress1'],
    'ConsumerAddress2'      => (string) $_POST['ConsumerAddress2'],
    'ConsumerEmail'         => (string) $_POST['ConsumerEmail'],
    'ConsumerPhone'         => (string) $_POST['ConsumerPhone'],
    'ConsumerCity'          => (string) $_POST['ConsumerCity'],
    'ConsumerState'         => (string) $_POST['ConsumerState'],
    'ConsumerPostalCode'    => (string) $_POST['ConsumerPostalCode'],
    'ConsumerQuestion'      => (string) $_POST['ConsumerQuestion'],
    'ConsumerComment'       => (string) $_POST['ConsumerComment']
];

$options = [
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded",
        'method'  => 'POST',
        'content' => http_build_query($data)
    ]
];

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

return true;
