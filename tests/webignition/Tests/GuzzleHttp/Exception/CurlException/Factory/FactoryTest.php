<?php

namespace webignition\Tests\GuzzleHttp\Exception\CurlException\Factory;

use webignition\GuzzleHttp\Exception\CurlException\Factory as CurlExceptionFactory;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Message\Request;

abstract class FactoryTest extends BaseTest {

    abstract protected function getConnectExceptionMessage();

    protected function getConnectException() {
        return new ConnectException(
            $this->getConnectExceptionMessage(),
            new Request('GET', 'http://example.com/')
        );
    }


    /**
     * @return CurlExceptionFactory
     */
    protected function getCurlExceptionFactory() {
        return new CurlExceptionFactory();
    }


    /**
     * @param ConnectException $connectException
     * @return null|\webignition\GuzzleHttp\Exception\CurlException\Exception
     */
    protected function fromFactory(ConnectException $connectException) {
        $factory = $this->getCurlExceptionFactory();
        return $factory::fromConnectException($connectException);
    }

}