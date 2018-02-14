<?php

namespace Chili\WebServices;

class SwitchServerGetFlowList
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $switchServerID
     * @access public
     */
    public $switchServerID = null;

    /**
     * @param string $apiKey
     * @param string $switchServerID
     * @access public
     */
    public function __construct($apiKey, $switchServerID)
    {
      $this->apiKey = $apiKey;
      $this->switchServerID = $switchServerID;
    }

}
