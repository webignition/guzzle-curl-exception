<?php

namespace webignition\Tests\GuzzleHttp\Exception\CurlException\Factory\IsCurlException;

use webignition\Tests\GuzzleHttp\Exception\CurlException\Factory\FactoryTest;

abstract class IsCurlExceptionTest extends FactoryTest {

    abstract protected function getExpectedCurlCode();

    public function testIsCurlException() {
        $this->assertInstanceOf('webignition\GuzzleHttp\Exception\CurlException\Exception', $this->curlException);
    }

    public function testCurlCode() {
        $this->assertEquals($this->getExpectedCurlCode(), $this->curlException->getCode());
    }

}