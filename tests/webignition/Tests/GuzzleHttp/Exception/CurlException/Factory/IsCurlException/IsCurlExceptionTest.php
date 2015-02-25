<?php

namespace webignition\Tests\GuzzleHttp\Exception\CurlException\IsCurlException;

use webignition\Tests\GuzzleHttp\Exception\CurlException\Factory\FactoryTest;

abstract class IsCurlExceptionTest extends FactoryTest {

    abstract protected function getExpectedIsCurlException();

    public function testIsCurlException() {
        $factory = $this->getCurlExceptionFactory();

        $this->assertEquals(
            $this->getExpectedIsCurlException(),
            $factory::isCurlException($this->getConnectException())
        );
    }

}