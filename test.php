<?php
require 'vendor/autoload.php';

$Client = new \carono\dellin\Client([
    'appkey' => ''
]);

echo $Client->cities();