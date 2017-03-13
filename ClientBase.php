<?php

namespace carono\dellin;

class ClientBase
{
    public $sessionID;
    public $login;
    public $password;
    public $appkey;

    protected $protocol = 'https';
    protected $domain = 'api.dellin.ru';
    protected $type = 'json';
    protected $version = 'v1';
    protected $private = 'public';

    public function __construct(array $config)
    {
        foreach ($config as $prop => $value) {
            $this->$prop = $value;
        }
    }

    public function setAppkey($appkey) {
        $this->appkey = $appkey;
    }

    public function getAppkey() {
        return $this->appkey;
    }

    const URL_LOGIN = 'login';

    /***
     * Dictionary urls
     */

    /***
     * Types of packaging
     */
    const URL_PACKAGES = 'packages';

    /***
     * Additional services for delivery of cargo from / to the address
     */
    const URL_SERVICE = 'services';

    /***
     * Additional parameters for calculation of loading and unloading operations
     */
    const URL_LOAD_PARAMS = 'load_params';

    /***
     * Organizational and legal forms
     */
    const URL_OPF_LIST = 'opf_list';

    /***
     * Country Directory
     */
    const URL_COUNTRIES = 'countries';

    /***
     * Directory of cities
     */
    const URL_CITIES = 'cities';





    protected function buildUrl($url, $private = 'public') {
        return $this->protocol.'://'.$this->domain.'/'.$this->version.'/'.$private.'/'.$url.'.'.$this->type;
    }

    public function getContent($urlRequest, $data = [], $private = 'public') {
        $url = $this->buildUrl($urlRequest, $private);

        $client = new \GuzzleHttp\Client();

        $request = $client->post($url, array(
            'headers' => ['content-type' => 'application/json'],
            'body'    => json_encode($data)
        ));

        return $request->getBody()->getContents();
    }

    /*public function getContent($url, $data)
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->post($url, array(
            'headers' => ['content-type' => 'application/json'],
            'body'    => json_encode($data)
        ));
        return $request->getBody()->getContents();
    }*/
}