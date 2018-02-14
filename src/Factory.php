<?php

namespace webignition\GuzzleHttp\Exception\CurlException;

use GuzzleHttp\Exception\ConnectException;

class Factory
{
    /**
     * @param ConnectException $connectException
     *
     * @return null|Exception
     */
    public static function fromConnectException(ConnectException $connectException)
    {
        if (!self::isCurlException($connectException)) {
            return null;
        }

        $curlMessageParts = explode(':', $connectException->getMessage(), 2);

        return new Exception(
            trim($curlMessageParts[1]),
            (int)preg_replace('/[^0-9]/', '', $curlMessageParts[0]),
            $connectException
        );
    }

    /**
     * @param ConnectException $connectException
     *
     * @return bool
     */
    public static function isCurlException(ConnectException $connectException)
    {
        return self::isCurlErrorString($connectException->getMessage());
    }

    /**
     * @param $string
     *
     * @return bool
     */
    private static function isCurlErrorString($string)
    {
        return preg_match('/^cURL error [0-9]+:/', $string) > 0;
    }
}
