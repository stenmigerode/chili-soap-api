<?php

namespace Chili\WebServices;

class LockApiKey
{

    /**
     * @var string $apiKeyToLock
     * @access public
     */
    public $apiKeyToLock = null;

    /**
     * @param string $apiKeyToLock
     * @access public
     */
    public function __construct($apiKeyToLock)
    {
      $this->apiKeyToLock = $apiKeyToLock;
    }

}
