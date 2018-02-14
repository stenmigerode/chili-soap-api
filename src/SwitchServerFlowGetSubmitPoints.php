<?php

namespace Chili\WebServices;

class SwitchServerFlowGetSubmitPoints
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
     * @var string $flowID
     * @access public
     */
    public $flowID = null;

    /**
     * @param string $apiKey
     * @param string $switchServerID
     * @param string $flowID
     * @access public
     */
    public function __construct($apiKey, $switchServerID, $flowID)
    {
      $this->apiKey = $apiKey;
      $this->switchServerID = $switchServerID;
      $this->flowID = $flowID;
    }

}
