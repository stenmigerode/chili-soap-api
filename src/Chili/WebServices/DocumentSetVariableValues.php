<?php

namespace Chili\WebServices;

class DocumentSetVariableValues
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
     * @var string $varXML
     * @access public
     */
    public $varXML = null;

    /**
     * @param string $apiKey
     * @param string $itemID
     * @param string $varXML
     * @access public
     */
    public function __construct($apiKey, $itemID, $varXML)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->varXML = $varXML;
    }

}
