<?php

namespace webignition\GuzzleHttp\Exception\CurlException;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;

class Exception extends RequestException {

    /**
     * @var int
     */
    private $curlCode = 0;

    public function __construct($message, $code, ConnectException $connectException) {
        parent::__construct($message, $connectException->getRequest());
        $this->curlCode = $code;
    }


    /**
     * @return int
     */
    public function getCurlCode() {
        return $this->curlCode;
    }

}