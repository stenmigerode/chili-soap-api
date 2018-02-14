<?php

namespace Chili\WebServices;

class XinetTestConnection
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
     * @param string $apiKey
     * @param string $url
     * @param string $userName
     * @param string $userPW
     * @access public
     */
    public function __construct($apiKey, $url, $userName, $userPW)
    {
      $this->apiKey = $apiKey;
      $this->url = $url;
      $this->userName = $userName;
      $this->userPW = $userPW;
    }

}
