<?php

namespace Chili\WebServices;

class EnvironmentCopy
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $environmentName
     * @access public
     */
    public $environmentName = null;

    /**
     * @var string $newName
     * @access public
     */
    public $newName = null;

    /**
     * @param string $apiKey
     * @param string $environmentName
     * @param string $newName
     * @access public
     */
    public function __construct($apiKey, $environmentName, $newName)
    {
      $this->apiKey = $apiKey;
      $this->environmentName = $environmentName;
      $this->newName = $newName;
    }

}
