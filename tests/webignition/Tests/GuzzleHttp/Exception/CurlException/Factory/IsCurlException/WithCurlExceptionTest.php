<?php

namespace webignition\Tests\GuzzleHttp\Exception\CurlException\IsCurlException;

class WithCurlExceptionTest extends IsCurlExceptionTest {

    protected function getExpectedIsCurlException() {
        return true;
    }

    protected function getConnectExceptionMessage() {
        return 'cURL error 28: Resolving timed out after 4 milliseconds';
    }
}