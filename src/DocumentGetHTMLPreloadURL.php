<?php

namespace Chili\WebServices;

class DocumentGetHTMLPreloadURL
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
     * @var string $workSpaceID
     * @access public
     */
    public $workSpaceID = null;

    /**
     * @var string $viewPrefsID
     * @access public
     */
    public $viewPrefsID = null;

    /**
     * @var string $constraintsID
     * @access public
     */
    public $constraintsID = null;

    /**
     * @param string $apiKey
     * @param string $itemID
     * @param string $workSpaceID
     * @param string $viewPrefsID
     * @param string $constraintsID
     * @access public
     */
    public function __construct($apiKey, $itemID, $workSpaceID, $viewPrefsID, $constraintsID)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->workSpaceID = $workSpaceID;
      $this->viewPrefsID = $viewPrefsID;
      $this->constraintsID = $constraintsID;
    }

}
