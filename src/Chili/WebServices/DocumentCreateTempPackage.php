<?php

namespace Chili\WebServices;

class DocumentCreateTempPackage
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
     * @var string $docXML
     * @access public
     */
    public $docXML = null;

    /**
     * @var int $taskPriority
     * @access public
     */
    public $taskPriority = null;

    /**
     * @param string $apiKey
     * @param string $itemID
     * @param string $docXML
     * @param int $taskPriority
     * @access public
     */
    public function __construct($apiKey, $itemID, $docXML, $taskPriority)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->docXML = $docXML;
      $this->taskPriority = $taskPriority;
    }

}
