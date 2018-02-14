<?php

namespace Chili\WebServices;

class ODTGetStyles
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $fileData
     * @access public
     */
    public $fileData = null;

    /**
     * @param string $apiKey
     * @param string $fileData
     * @access public
     */
    public function __construct($apiKey, $fileData)
    {
      $this->apiKey = $apiKey;
      $this->fileData = $fileData;
    }

}
