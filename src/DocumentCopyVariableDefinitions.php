<?php

namespace Chili\WebServices;

class DocumentCopyVariableDefinitions
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
     * @var boolean $replaceExistingVariables
     * @access public
     */
    public $replaceExistingVariables = null;

    /**
     * @param string $apiKey
     * @param string $fromItemID
     * @param string $toItemID
     * @param boolean $replaceExistingVariables
     * @access public
     */
    public function __construct($apiKey, $fromItemID, $toItemID, $replaceExistingVariables)
    {
      $this->apiKey = $apiKey;
      $this->fromItemID = $fromItemID;
      $this->toItemID = $toItemID;
      $this->replaceExistingVariables = $replaceExistingVariables;
    }

}
