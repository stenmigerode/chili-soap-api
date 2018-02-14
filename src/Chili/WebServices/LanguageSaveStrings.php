<?php

namespace Chili\WebServices;

class LanguageSaveStrings
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
     * @var string $stringXML
     * @access public
     */
    public $stringXML = null;

    /**
     * @param string $apiKey
     * @param string $languageID
     * @param string $stringXML
     * @access public
     */
    public function __construct($apiKey, $languageID, $stringXML)
    {
      $this->apiKey = $apiKey;
      $this->languageID = $languageID;
      $this->stringXML = $stringXML;
    }

}
