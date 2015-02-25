<?php

namespace webignition\Tests\GuzzleHttp\Exception\CurlException\Factory\IsCurlException;

class OperationTimeoutTest extends IsCurlExceptionTest {

    protected function getConnectExceptionMessage() {
        return 'cURL error 28: Resolving timed out after 4 milliseconds';
    }

    protected function getExpectedCurlCode() {
        return 28;
    }
}