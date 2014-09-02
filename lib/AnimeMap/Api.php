<?php

namespace AnimeMap;

class Api
{
    const API_ENDPOINT = 'http://animemap.net/api/table/tokyo.json';

    protected $_http;

    public function __construct()
    {
        $this->_http = new \Zend\Http\Client();
    }

    public function get()
    {
        $response = $this->_request();
        $body = json_decode($response->getBody());
        return $body->response->item;
    }

    protected function _request()
    {
        return $this->_http
            ->setUri(self::API_ENDPOINT)
            ->setMethod(\Zend\Http\Request::METHOD_GET)
            ->send();
    }

}
