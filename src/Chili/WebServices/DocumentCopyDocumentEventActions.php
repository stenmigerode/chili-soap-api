<?php

namespace Chili\WebServices;

class DocumentCopyDocumentEventActions
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $fromItemID
     * @access public
     */
    public $fromItemID = null;

    /**
     * @var string $toItemID
     * @access public
     */
    public $toItemID = null;

    /**
     * @var boolean $replaceExistingActions
     * @access public
     */
    public $replaceExistingActions = null;

    /**
     * @param string $apiKey
     * @param string $fromItemID
     * @param string $toItemID
     * @param boolean $replaceExistingActions
     * @access public
     */
    public function __construct($apiKey, $fromItemID, $toItemID, $replaceExistingActions)
    {
      $this->apiKey = $apiKey;
      $this->fromItemID = $fromItemID;
      $this->toItemID = $toItemID;
      $this->replaceExistingActions = $replaceExistingActions;
    }

}
