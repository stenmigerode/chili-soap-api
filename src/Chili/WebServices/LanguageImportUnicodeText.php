<?php

namespace Chili\WebServices;

class LanguageImportUnicodeText
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $languageID
     * @access public
     */
    public $languageID = null;

    /**
     * @var string $filePathOrData
     * @access public
     */
    public $filePathOrData = null;

    /**
     * @param string $apiKey
     * @param string $languageID
     * @param string $filePathOrData
     * @access public
     */
    public function __construct($apiKey, $languageID, $filePathOrData)
    {
      $this->apiKey = $apiKey;
      $this->languageID = $languageID;
      $this->filePathOrData = $filePathOrData;
    }

}
