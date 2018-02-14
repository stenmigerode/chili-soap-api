<?php

namespace Chili\WebServices;

class EnvironmentDelete
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
     * @param string $apiKey
     * @param string $environmentName
     * @access public
     */
    public function __construct($apiKey, $environmentName)
    {
      $this->apiKey = $apiKey;
      $this->environmentName = $environmentName;
    }

}
