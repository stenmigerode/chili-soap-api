<?php

namespace Chili\WebServices;

class GenerateApiKey
{

    /**
     * @var string $environmentNameOrURL
     * @access public
     */
    public $environmentNameOrURL = null;

    /**
     * @var string $userName
     * @access public
     */
    public $userName = null;

    /**
     * @var string $password
     * @access public
     */
    public $password = null;

    /**
     * @param string $environmentNameOrURL
     * @param string $userName
     * @param string $password
     * @access public
     */
    public function __construct($environmentNameOrURL, $userName, $password)
    {
      $this->environmentNameOrURL = $environmentNameOrURL;
      $this->userName = $userName;
      $this->password = $password;
    }

}
