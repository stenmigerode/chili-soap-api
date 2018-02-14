<?php

namespace Chili\WebServices;

class GenerateApiKeyWithSettings
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
     * @var string $settingsXML
     * @access public
     */
    public $settingsXML = null;

    /**
     * @param string $environmentNameOrURL
     * @param string $userName
     * @param string $password
     * @param string $settingsXML
     * @access public
     */
    public function __construct($environmentNameOrURL, $userName, $password, $settingsXML)
    {
      $this->environmentNameOrURL = $environmentNameOrURL;
      $this->userName = $userName;
      $this->password = $password;
      $this->settingsXML = $settingsXML;
    }

}
