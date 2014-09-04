<?php

class ApiTest extends PHPUnit_Framework_TestCase
{
    protected $_api;

    protected function setUp()
    {
        $this->_api = new ApiExtended();
        $this->_api->_http = $this->getMock('\Zend\Http\Client', array('send'));
    }

    public function testRequest_WillSend()
    {
        $this->_api->_http->expects($this->once())->method('send');
        $this->_api->request('tokyo');
    }

    public function testBuildUrl_ReturnUrl_WhenValidParams()
    {
        $this->assertEquals('http://animemap.net/api/table/tokyo.json', $this->_api->buildUrl('tokyo'));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testBuildUrl_ThrowException_WhenAreaIsNull()
    {
        $this->_api->buildUrl(null);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testBuildUrl_ThrowException_WhenAreaNotExist()
    {
        $this->_api->buildUrl('hawaii');
    }
}

class ApiExtended extends AnimeMap\Api
{
    public $_http;

    public function request($area)
    {
        return parent::_request($area);
    }

    public function buildUrl($area)
    {
        return parent::_buildUrl($area);
    }
}
