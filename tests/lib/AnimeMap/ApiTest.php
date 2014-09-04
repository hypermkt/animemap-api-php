<?php

class ApiTest extends PHPUnit_Framework_TestCase
{
    protected $_api;

    protected function setUp()
    {
        $this->_api = new ApiExtended();
        $this->_api->_request = $this->getMock('\AnimeMap\Request', array('request'));
    }

    public function testSearchByArea_ReturnResponse_WhenValidParams()
    {
        $response = new \Zend\Http\Response();
        $response->setContent(json_encode(array(
            'response' => array(
                'item' => array()
            )
        )));
        $this->_api->_request->expects($this->once())->method('request')->will($this->returnValue($response));
        $this->assertEquals(array(), $this->_api->searchByArea('tokyo'));

    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSearchByArea_ThrowException_WhenAreaIsNumber()
    {
        $this->_api->searchByArea(1);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSearchByArea_ThrowException_WhenAreaIsEmpty()
    {
        $this->_api->searchByArea('');
    }
}

class ApiExtended extends AnimeMap\Api
{
    public $_request;

    public function buildUrl($area)
    {
        return parent::_buildUrl($area);
    }
}
