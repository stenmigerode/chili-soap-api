<?php

namespace Chili\WebServices;

class DocumentGetDocumentEventActions
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
     * @param string $apiKey
     * @param string $itemID
     * @access public
     */
    public function __construct($apiKey, $itemID)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
    }

}
