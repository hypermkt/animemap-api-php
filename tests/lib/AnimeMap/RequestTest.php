<?php

class RequestTest extends PHPUnit_Framework_TestCase
{
    protected $_request;

    protected function setUp()
    {
        $this->_request = new RequestExtended();
        $this->_request->_http = $this->getMock('\Zend\Http\Client', array('send'));
    }

    public function testRequest_WillSend()
    {
        $this->_request->_http->expects($this->once())->method('send');
        $this->_request->request('tokyo');
    }

    public function testBuildUrl_ReturnUrl_WhenValidParams()
    {
        $this->assertEquals('http://animemap.net/api/table/tokyo.json', $this->_request->buildUrl('tokyo'));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testBuildUrl_ThrowException_WhenAreaIsNull()
    {
        $this->_request->buildUrl(null);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testBuildUrl_ThrowException_WhenAreaNotExist()
    {
        $this->_request->buildUrl('hawaii');
    }
}

class RequestExtended extends AnimeMap\Request
{
    public $_http;

    public function buildUrl($area)
    {
        return parent::_buildUrl($area);
    }
}
