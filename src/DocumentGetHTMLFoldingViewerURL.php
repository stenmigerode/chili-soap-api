<?php

namespace Chili\WebServices;

class DocumentGetHTMLFoldingViewerURL
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
     * @var string $foldingSettingsID
     * @access public
     */
    public $foldingSettingsID = null;

    /**
     * @var string $modXML
     * @access public
     */
    public $modXML = null;

    /**
     * @param string $apiKey
     * @param string $itemID
     * @param string $foldingSettingsID
     * @param string $modXML
     * @access public
     */
    public function __construct($apiKey, $itemID, $foldingSettingsID, $modXML)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->foldingSettingsID = $foldingSettingsID;
      $this->modXML = $modXML;
    }

}
