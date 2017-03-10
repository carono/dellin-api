<?php

namespace carono\dellin;

class Client extends ClientBase
{
    public function packages()
    {
        return $this->getContent(self::URL_PACKAGES, ['appkey' => $this->appkey]);
    }
}