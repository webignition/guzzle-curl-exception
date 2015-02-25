<?php

namespace webignition\Tests\GuzzleHttp\Exception\CurlException\IsCurlException;

class WithNonCurlExceptionTest extends IsCurlExceptionTest {

    protected function getExpectedIsCurlException() {
        return false;
    }

    protected function getConnectExceptionMessage() {
        return 'Foo bar not cURL message';
    }
}