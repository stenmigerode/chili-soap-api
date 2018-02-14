<?php

namespace Chili\WebServices;

class DocumentGetHTMLEditorURL
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
     * @var boolean $viewerOnly
     * @access public
     */
    public $viewerOnly = null;

    /**
     * @var boolean $forAnonymousUser
     * @access public
     */
    public $forAnonymousUser = null;

    /**
     * @param string $apiKey
     * @param string $itemID
     * @param string $workSpaceID
     * @param string $viewPrefsID
     * @param string $constraintsID
     * @param boolean $viewerOnly
     * @param boolean $forAnonymousUser
     * @access public
     */
    public function __construct($apiKey, $itemID, $workSpaceID, $viewPrefsID, $constraintsID, $viewerOnly, $forAnonymousUser)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->workSpaceID = $workSpaceID;
      $this->viewPrefsID = $viewPrefsID;
      $this->constraintsID = $constraintsID;
      $this->viewerOnly = $viewerOnly;
      $this->forAnonymousUser = $forAnonymousUser;
    }

}
