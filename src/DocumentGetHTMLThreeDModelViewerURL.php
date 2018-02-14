<?php

namespace Chili\WebServices;

class DocumentGetHTMLThreeDModelViewerURL
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
     * @var string $threeDModelID
     * @access public
     */
    public $threeDModelID = null;

    /**
     * @var string $modXML
     * @access public
     */
    public $modXML = null;

    /**
     * @param string $apiKey
     * @param string $itemID
     * @param string $threeDModelID
     * @param string $modXML
     * @access public
     */
    public function __construct($apiKey, $itemID, $threeDModelID, $modXML)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->threeDModelID = $threeDModelID;
      $this->modXML = $modXML;
    }

}
