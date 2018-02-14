<?php

namespace Chili\WebServices;

class MobileFeedGetDocumentXML
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
     * @var string $documentID
     * @access public
     */
    public $documentID = null;

    /**
     * @param string $apiKey
     * @param string $feedID
     * @param string $deviceInfoXML
     * @param string $documentID
     * @access public
     */
    public function __construct($apiKey, $feedID, $deviceInfoXML, $documentID)
    {
      $this->apiKey = $apiKey;
      $this->feedID = $feedID;
      $this->deviceInfoXML = $deviceInfoXML;
      $this->documentID = $documentID;
    }

}
