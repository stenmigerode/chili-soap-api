<?php

namespace Chili\WebServices;

class ServerGetSavedSystemInfoList
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @param string $apiKey
     * @access public
     */
    public function __construct($apiKey)
    {
      $this->apiKey = $apiKey;
    }

}
