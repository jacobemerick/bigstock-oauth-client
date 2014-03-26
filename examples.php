<?php

include_once __DIR__ . '/vendor/autoload.php';

$client = new Bigstock\OAuth2API\Client(false);
$client->setClientCredentials(CLIENT_ID, CLIENT_SECRET);
$response = $client->request('search', array('q' => 'upper peninsula'));