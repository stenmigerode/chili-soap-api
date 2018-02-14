<?php

namespace Chili\WebServices;

class ServerGetSystemInfo
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $data
     * @access public
     */
    public $data = null;

    /**
     * @var boolean $extended
     * @access public
     */
    public $extended = null;

    /**
     * @param string $apiKey
     * @param string $data
     * @param boolean $extended
     * @access public
     */
    public function __construct($apiKey, $data, $extended)
    {
      $this->apiKey = $apiKey;
      $this->data = $data;
      $this->extended = $extended;
    }

}
