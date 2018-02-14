<?php

namespace Chili\WebServices;

class DocumentSetDocumentEventActions
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
     * @var string $definitionXML
     * @access public
     */
    public $definitionXML = null;

    /**
     * @var boolean $replaceExistingActions
     * @access public
     */
    public $replaceExistingActions = null;

    /**
     * @param string $apiKey
     * @param string $itemID
     * @param string $definitionXML
     * @param boolean $replaceExistingActions
     * @access public
     */
    public function __construct($apiKey, $itemID, $definitionXML, $replaceExistingActions)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->definitionXML = $definitionXML;
      $this->replaceExistingActions = $replaceExistingActions;
    }

}
