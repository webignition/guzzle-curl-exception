<?php

namespace webignition\GuzzleHttp\Exception\CurlException;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\Request as HttpRequest;

class Exception extends RequestException
{
    /**
     * @var int
     */
    private $curlCode = 0;

    /**
     * @param string $message
     * @param int $code
     * @param ConnectException|null $connectException
     */
    public function __construct($message, $code, ConnectException $connectException = null)
    {
        $request = (is_null($connectException))
            ? new HttpRequest('GET', 'http://example.com/')
            : $connectException->getRequest();

        parent::__construct($message, $request);
        $this->curlCode = $code;
    }

    /**
     * @return int
     */
    public function getCurlCode()
    {
        return $this->curlCode;
    }
}
