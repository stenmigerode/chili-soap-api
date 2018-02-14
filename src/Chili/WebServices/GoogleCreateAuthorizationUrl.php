<?php

namespace Chili\WebServices;

class GoogleCreateAuthorizationUrl
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $clientID
     * @access public
     */
    public $clientID = null;

    /**
     * @var string $clientSecret
     * @access public
     */
    public $clientSecret = null;

    /**
     * @param string $apiKey
     * @param string $clientID
     * @param string $clientSecret
     * @access public
     */
    public function __construct($apiKey, $clientID, $clientSecret)
    {
      $this->apiKey = $apiKey;
      $this->clientID = $clientID;
      $this->clientSecret = $clientSecret;
    }

}
