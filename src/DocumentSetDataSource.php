<?php

namespace Chili\WebServices;

class DocumentSetDataSource
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
     * @var string $datasourceXML
     * @access public
     */
    public $datasourceXML = null;

    /**
     * @param string $apiKey
     * @param string $itemID
     * @param string $datasourceXML
     * @access public
     */
    public function __construct($apiKey, $itemID, $datasourceXML)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->datasourceXML = $datasourceXML;
    }

}
