<?php

namespace AnimeMap;

use Zend\Http\Exception\InvalidArgumentException;

class Request
{
    protected $_http;

    public function __construct()
    {
        $this->_http = new \Zend\Http\Client();
    }

    public function request($area)
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

        return Api::API_ENDPOINT . $area . '.json';
    }
}
