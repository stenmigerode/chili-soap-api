<?php

namespace Chili\WebServices;

class LanguageGetCombinedStrings
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
     * @var string $overrideBasedOn
     * @access public
     */
    public $overrideBasedOn = null;

    /**
     * @param string $apiKey
     * @param string $languageID
     * @param string $overrideBasedOn
     * @access public
     */
    public function __construct($apiKey, $languageID, $overrideBasedOn)
    {
      $this->apiKey = $apiKey;
      $this->languageID = $languageID;
      $this->overrideBasedOn = $overrideBasedOn;
    }

}
