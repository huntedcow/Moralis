<?php

namespace HuntedCow\Moralis;

class Moralis
{
    /** @var string  Server URL from on https://admin.moralis.io/servers */
    private $serverUrl;
    /** @var string  API Key obtained from https://admin.moralis.io/web3Api */
    private $apiKey;

    public function __construct(string $apiKey, string $serverUrl = 'https://deep-index.moralis.io/api/v2/')
    {
        $this->apiKey       = $apiKey;
        $this->serverUrl    = $serverUrl;
    }

    /**
     * Sets the server url
     * @param string $serverUrl
     */
    public function setServer(string $serverUrl) : void
    {
        $this->serverUrl = $serverUrl;
    }

    /**
     * Returns the current server url
     * @return string Server Url
     */
    public function getServer() : string
    {
        return $this->serverUrl;
    }

    /**
     * Sets the API key
     * @param string $apiKey
     */
    public function setApiKey(string $apiKey) : void
    {
        $this->apiKey = $apiKey;
    }
}