<?php

namespace Chili\WebServices;

class EnvironmentAdd
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $newName
     * @access public
     */
    public $newName = null;

    /**
     * @param string $apiKey
     * @param string $newName
     * @access public
     */
    public function __construct($apiKey, $newName)
    {
      $this->apiKey = $apiKey;
      $this->newName = $newName;
    }

}
