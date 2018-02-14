<?php

namespace Chili\WebServices;

class InterfaceGetInitialSettings
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var boolean $forEditor
     * @access public
     */
    public $forEditor = null;

    /**
     * @param string $apiKey
     * @param boolean $forEditor
     * @access public
     */
    public function __construct($apiKey, $forEditor)
    {
      $this->apiKey = $apiKey;
      $this->forEditor = $forEditor;
    }

}
