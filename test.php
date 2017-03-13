<?php
require 'vendor/autoload.php';

$Client = new \carono\dellin\Client([
    'appkey' => '52D618BE-0571-11E7-9479-00505683A6D3'
]);

echo $Client->cities();