<?php

namespace webignition\Tests\GuzzleHttp\Exception\CurlException\Factory\FromConnectException\WithNonCurlException;

use webignition\Tests\GuzzleHttp\Exception\CurlException\Factory\FromConnectException\FromConnectExceptionTest;

class WithNonCurlExceptionTest extends FromConnectExceptionTest {

    protected function getConnectExceptionMessage() {
        return 'Foo bar not cURL message';
    }

    public function testIsNotCurlException() {
        $this->assertNull($this->curlException);
    }

}