<?php

namespace Chili\WebServices;

class SwitchServerTestConnection
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $url
     * @access public
     */
    public $url = null;

    /**
     * @var string $userName
     * @access public
     */
    public $userName = null;

    /**
     * @var string $userPW
     * @access public
     */
    public $userPW = null;

    /**
     * @var string $oemKey
     * @access public
     */
    public $oemKey = null;

    /**
     * @param string $apiKey
     * @param string $url
     * @param string $userName
     * @param string $userPW
     * @param string $oemKey
     * @access public
     */
    public function __construct($apiKey, $url, $userName, $userPW, $oemKey)
    {
      $this->apiKey = $apiKey;
      $this->url = $url;
      $this->userName = $userName;
      $this->userPW = $userPW;
      $this->oemKey = $oemKey;
    }

}
