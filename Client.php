<?php

namespace carono\dellin;

class Client extends ClientBase
{
    public function cities() {
        return $this->getContent(self::URL_CITIES, ['appkey' => $this->appkey]);
    }

    public function packages()
    {
        return $this->getContent(self::URL_PACKAGES, ['appkey' => $this->appkey]);
    }
}