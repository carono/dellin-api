<?php

namespace carono\dellin;

class Client extends ClientBase
{
    public function make($url, $data = [], $private = 'public') {
        return $this->getContent($url, array_merge(['appkey' => $this->appkey], $data), $private);
    }

    public function places() {
        return $this->getContent(self::URL_PLACES, ['appkey' => $this->appkey]);
    }

    public function cities() {
        return $this->getContent(self::URL_CITIES, ['appkey' => $this->appkey]);
    }

    public function packages()
    {
        return $this->getContent(self::URL_PACKAGES, ['appkey' => $this->appkey]);
    }
}