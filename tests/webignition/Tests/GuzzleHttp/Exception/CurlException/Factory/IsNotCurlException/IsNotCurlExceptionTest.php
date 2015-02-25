<?php

namespace webignition\Tests\GuzzleHttp\Exception\CurlException\Factory\IsNotCurlException;

use GuzzleHttp\Exception\ConnectException;
use webignition\GuzzleHttp\Exception\CurlException\Exception as CurlException;
use webignition\Tests\GuzzleHttp\Exception\CurlException\Factory\FactoryTest;
use GuzzleHttp\Message\Request;

class IsNotCurlExceptionTest extends FactoryTest {

    protected function getConnectExceptionMessage() {
        return 'Foo bar not cURL message';
    }

    public function testIsNotCurlException() {
        $this->assertNull($this->curlException);
    }

}