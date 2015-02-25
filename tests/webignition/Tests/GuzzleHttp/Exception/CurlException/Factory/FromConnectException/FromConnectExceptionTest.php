<?php

namespace webignition\Tests\GuzzleHttp\Exception\CurlException\Factory\FromConnectException;

use webignition\Tests\GuzzleHttp\Exception\CurlException\Factory\FactoryTest;
use webignition\GuzzleHttp\Exception\CurlException\Exception as CurlException;

abstract class FromConnectExceptionTest extends FactoryTest {

    /**
     * @var CurlException
     */
    protected $curlException;


    public function setUp() {
        $this->curlException = $this->fromFactory(
            $this->getConnectException()
        );
    }

}