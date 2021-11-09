<?php

namespace HuntedCow\Moralis;

class Moralis
{
    /** @var string  Server URL from on https://admin.moralis.io/servers */
    private static $SERVER_URL = 'https://deep-index.moralis.io/api/v2/';
    /** @var string  API Key obtained from https://admin.moralis.io/web3Api */
    private static $API_KEY = '';

    /**
     * Sets the server url
     * @param string $serverUrl
     */
    public static function setServer(string $serverUrl) : void
    {
        self::$SERVER_URL = $serverUrl;
    }

    /**
     * Returns the current server url
     * @return string Server Url
     */
    public static function getServer() : string
    {
        return self::$SERVER_URL;
    }

    /**
     * Sets the API key
     * @param string $apiKey
     */
    public static function setApiKey(string $apiKey) : void
    {
        self::$API_KEY = $apiKey;
    }
}