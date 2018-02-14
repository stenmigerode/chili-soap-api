<?php

namespace Chili\WebServices;

class DocumentSetVariableDefinitions
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
     * @var boolean $replaceExistingVariables
     * @access public
     */
    public $replaceExistingVariables = null;

    /**
     * @param string $apiKey
     * @param string $itemID
     * @param string $definitionXML
     * @param boolean $replaceExistingVariables
     * @access public
     */
    public function __construct($apiKey, $itemID, $definitionXML, $replaceExistingVariables)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->definitionXML = $definitionXML;
      $this->replaceExistingVariables = $replaceExistingVariables;
    }

}
