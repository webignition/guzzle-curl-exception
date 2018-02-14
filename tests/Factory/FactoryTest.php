<?php

namespace webignition\Tests\GuzzleHttp\Exception\CurlException\Factory;

use webignition\GuzzleHttp\Exception\CurlException\Exception;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Message\Request;
use webignition\GuzzleHttp\Exception\CurlException\Factory;

class FactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testFromConnectExceptionNotCurlError()
    {
        $connectException = new ConnectException('foo', new Request('GET', 'http://example.com/'));

        $this->assertNull(Factory::fromConnectException($connectException));
    }

    public function testFromConnectExceptionIsCurlError()
    {
        $connectException = new ConnectException(
            'cURL error 28: Resolving timed out after 4 milliseconds',
            new Request('GET', 'http://example.com/')
        );

        $curlException = Factory::fromConnectException($connectException);

        $this->assertInstanceOf(Exception::class, $curlException);
        $this->assertEquals(28, $curlException->getCurlCode());
        $this->assertEquals('Resolving timed out after 4 milliseconds', $curlException->getMessage());
    }
}
