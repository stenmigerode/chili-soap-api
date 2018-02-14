<?php

namespace Chili\WebServices;

class DocumentGetDefaultSettings
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $itemID
     * @access public
     */
    public $itemID = null;

    /**
     * @var string $viewType
     * @access public
     */
    public $viewType = null;

    /**
     * @var string $viewPrefsID
     * @access public
     */
    public $viewPrefsID = null;

    /**
     * @var string $constraintID
     * @access public
     */
    public $constraintID = null;

    /**
     * @param string $apiKey
     * @param string $itemID
     * @param string $viewType
     * @param string $viewPrefsID
     * @param string $constraintID
     * @access public
     */
    public function __construct($apiKey, $itemID, $viewType, $viewPrefsID, $constraintID)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->viewType = $viewType;
      $this->viewPrefsID = $viewPrefsID;
      $this->constraintID = $constraintID;
    }

}
