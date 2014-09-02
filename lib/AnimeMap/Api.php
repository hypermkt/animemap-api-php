<?php

namespace AnimeMap;

use Zend\Http\Exception\InvalidArgumentException;

class Api
{
    const API_ENDPOINT = 'http://animemap.net/api/table/';

    protected $_http;

    public function __construct()
    {
        $this->_http = new \Zend\Http\Client();
    }

    public function get($area)
    {
        $response = $this->_request($area);
        $body = json_decode($response->getBody());
        return $body->response->item;
    }

    protected function _request($area)
    {
        return $this->_http
            ->setUri($this->_buildUrl($area))
            ->setMethod(\Zend\Http\Request::METHOD_GET)
            ->send();
    }

    protected function _buildUrl($area)
    {
        if (!array_key_exists($area, \AnimeMap\Area::getAreas())) {
            throw new InvalidArgumentException('no such area:' . $area);
        }

        return self::API_ENDPOINT . $area . '.json';
    }
}
