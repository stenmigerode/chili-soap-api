<?php

namespace Chili\WebServices;

class XinetExecutePortalDICall
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $xinetServerID
     * @access public
     */
    public $xinetServerID = null;

    /**
     * @var string $callID
     * @access public
     */
    public $callID = null;

    /**
     * @var string $arguments
     * @access public
     */
    public $arguments = null;

    /**
     * @param string $apiKey
     * @param string $xinetServerID
     * @param string $callID
     * @param string $arguments
     * @access public
     */
    public function __construct($apiKey, $xinetServerID, $callID, $arguments)
    {
      $this->apiKey = $apiKey;
      $this->xinetServerID = $xinetServerID;
      $this->callID = $callID;
      $this->arguments = $arguments;
    }

}
