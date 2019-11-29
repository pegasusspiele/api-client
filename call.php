<?php

include_once 'api.php';

$client = new ApiClient(
    'https://pegasusshop.de/api',
    'peg.api.client',
    ''
);

$data = array();
$data['album'] = -1;
$data['userId'] = 0;
$data['name'] = 'artikel';
$data['file'] = 'https://i.ytimg.com/vi/EkhFza9IhrM/maxresdefault.jpg';
$data['description'] = 'test';

$client->post('media', $data);
