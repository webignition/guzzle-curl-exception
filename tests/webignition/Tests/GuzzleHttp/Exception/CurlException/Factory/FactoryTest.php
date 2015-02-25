<?php

namespace webignition\Tests\GuzzleHttp\Exception\CurlException\Factory;

use webignition\GuzzleHttp\Exception\CurlException\Factory as CurlExceptionFactory;
use webignition\GuzzleHttp\Exception\CurlException\Exception as CurlException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Message\Request;

abstract class FactoryTest extends BaseTest {

    /**
     * @var CurlException
     */
    protected $curlException;


    public function setUp() {
        $this->curlException = $this->fromFactory(
            new ConnectException(
                $this->getConnectExceptionMessage(),
                new Request('GET', 'http://example.com/')
            )
        );
    }

    abstract protected function getConnectExceptionMessage();


    /**
     * @return CurlExceptionFactory
     */
    protected function getCurlExceptionFactory() {
        return new CurlExceptionFactory();
    }


    protected function fromFactory(ConnectException $connectException) {
        $factory = $this->getCurlExceptionFactory();

        return $factory::fromConnectException($connectException);
    }

}