<?php

namespace Chili\WebServices;

class ApiKeySetRequestWithCredentialsForDomain
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $domain
     * @access public
     */
    public $domain = null;

    /**
     * @var string $requestWithCredentials
     * @access public
     */
    public $requestWithCredentials = null;

    /**
     * @param string $apiKey
     * @param string $domain
     * @param string $requestWithCredentials
     * @access public
     */
    public function __construct($apiKey, $domain, $requestWithCredentials)
    {
      $this->apiKey = $apiKey;
      $this->domain = $domain;
      $this->requestWithCredentials = $requestWithCredentials;
    }

}
