<?php

namespace Chili\WebServices;

class ProfilingSaveSnapshot
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $fileName
     * @access public
     */
    public $fileName = null;

    /**
     * @var boolean $clear
     * @access public
     */
    public $clear = null;

    /**
     * @param string $apiKey
     * @param string $fileName
     * @param boolean $clear
     * @access public
     */
    public function __construct($apiKey, $fileName, $clear)
    {
      $this->apiKey = $apiKey;
      $this->fileName = $fileName;
      $this->clear = $clear;
    }

}
