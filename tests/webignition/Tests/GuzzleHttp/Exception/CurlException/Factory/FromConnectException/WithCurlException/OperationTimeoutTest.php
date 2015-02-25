<?php

namespace webignition\Tests\GuzzleHttp\Exception\CurlException\Factory\FromConnectException\WithCurlException;

class OperationTimeoutTest extends WithCurlExceptionTest {

    protected function getConnectExceptionMessage() {
        return 'cURL error 28: Resolving timed out after 4 milliseconds';
    }

    protected function getExpectedCurlCode() {
        return 28;
    }
}