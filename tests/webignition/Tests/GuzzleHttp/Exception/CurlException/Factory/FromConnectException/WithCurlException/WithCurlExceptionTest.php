<?php

namespace webignition\Tests\GuzzleHttp\Exception\CurlException\Factory\FromConnectException\WithCurlException;

use webignition\Tests\GuzzleHttp\Exception\CurlException\Factory\FromConnectException\FromConnectExceptionTest;

abstract class WithCurlExceptionTest extends FromConnectExceptionTest {

    abstract protected function getExpectedCurlCode();

    public function testIsCurlException() {
        $this->assertInstanceOf('webignition\GuzzleHttp\Exception\CurlException\Exception', $this->curlException);
    }

    public function testCurlCode() {
        $this->assertEquals($this->getExpectedCurlCode(), $this->curlException->getCode());
    }

}