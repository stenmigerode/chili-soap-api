<?php

namespace Chili\WebServices;

class ODTGetTextFlow
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
     * @var string $stylesMapping
     * @access public
     */
    public $stylesMapping = null;

    /**
     * @param string $apiKey
     * @param string $fileData
     * @param string $stylesMapping
     * @access public
     */
    public function __construct($apiKey, $fileData, $stylesMapping)
    {
      $this->apiKey = $apiKey;
      $this->fileData = $fileData;
      $this->stylesMapping = $stylesMapping;
    }

}
