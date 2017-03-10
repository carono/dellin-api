<?php

namespace carono\dellin;

class ClientBase
{
    public $sessionID;
    public $login;
    public $password;
    public $appkey;

    const URL_LOGIN = 'https://api.dellin.ru/v1/customers/login.json';
    const URL_PACKAGES = 'https://api.dellin.ru/v1/public/packages.json';

    public function getContent($url, $data)
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->post($url, array(
            'headers' => ['content-type' => 'application/json'],
            'body'    => json_encode($data)
        ));
        return $request->getBody()->getContents();
    }
}