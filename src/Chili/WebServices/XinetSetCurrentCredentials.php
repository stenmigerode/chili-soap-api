<?php

namespace Chili\WebServices;

class XinetSetCurrentCredentials
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

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
     * @param string $userName
     * @param string $userPW
     * @access public
     */
    public function __construct($apiKey, $userName, $userPW)
    {
      $this->apiKey = $apiKey;
      $this->userName = $userName;
      $this->userPW = $userPW;
    }

}
