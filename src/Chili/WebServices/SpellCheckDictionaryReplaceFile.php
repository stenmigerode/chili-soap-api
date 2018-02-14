<?php

namespace Chili\WebServices;

class SpellCheckDictionaryReplaceFile
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
     * @var string $fileType
     * @access public
     */
    public $fileType = null;

    /**
     * @var string $fileOrData
     * @access public
     */
    public $fileOrData = null;

    /**
     * @param string $apiKey
     * @param string $itemID
     * @param string $fileType
     * @param string $fileOrData
     * @access public
     */
    public function __construct($apiKey, $itemID, $fileType, $fileOrData)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->fileType = $fileType;
      $this->fileOrData = $fileOrData;
    }

}
