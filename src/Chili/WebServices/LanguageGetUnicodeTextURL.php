<?php

namespace Chili\WebServices;

class LanguageGetUnicodeTextURL
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
     * @param string $apiKey
     * @param string $languageID
     * @access public
     */
    public function __construct($apiKey, $languageID)
    {
      $this->apiKey = $apiKey;
      $this->languageID = $languageID;
    }

}
