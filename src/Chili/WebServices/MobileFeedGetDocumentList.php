<?php

namespace Chili\WebServices;

class MobileFeedGetDocumentList
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $feedID
     * @access public
     */
    public $feedID = null;

    /**
     * @var string $deviceInfoXML
     * @access public
     */
    public $deviceInfoXML = null;

    /**
     * @param string $apiKey
     * @param string $feedID
     * @param string $deviceInfoXML
     * @access public
     */
    public function __construct($apiKey, $feedID, $deviceInfoXML)
    {
      $this->apiKey = $apiKey;
      $this->feedID = $feedID;
      $this->deviceInfoXML = $deviceInfoXML;
    }

}
