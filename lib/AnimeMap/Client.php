<?php

namespace AnimeMap;

use Instantiator\Exception\InvalidArgumentException;

class Client
{
    const API_ENDPOINT = 'http://animemap.net/api/table/';

    protected $_request;

    public function __construct()
    {
        $this->_request = new \AnimeMap\Request();
    }

    public function searchByArea($area)
    {
        if (empty($area) || !is_string($area)) {
            throw new InvalidArgumentException('area:' . $area);
        }

        $response = $this->_request->request($area);
        $body = json_decode($response->getBody());
        return $body->response->item;
    }
}
