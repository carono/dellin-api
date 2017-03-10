<?php
require 'vendor/autoload.php';
require 'ClientBase.php';
require 'Client.php';

$client = new \carono\dellin\Client();
$appkey = '';
$client->appkey = $appkey;
echo $client->packages();