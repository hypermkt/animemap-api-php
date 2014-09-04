<?php

namespace AnimeMap;

class Api
{
    const API_ENDPOINT = 'http://animemap.net/api/table/';

    protected $_request;

    public function __construct()
    {
        $this->_request = new \AnimeMap\Request();
    }

    public function get($area)
    {
        $response = $this->_request->request($area);
        $body = json_decode($response->getBody());
        return $body->response->item;
    }
}
