<?php

namespace Chili\WebServices;

class SetUserLanguage
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $languageIdOrName
     * @access public
     */
    public $languageIdOrName = null;

    /**
     * @var boolean $ignoreWorkSpaceLanguage
     * @access public
     */
    public $ignoreWorkSpaceLanguage = null;

    /**
     * @param string $apiKey
     * @param string $languageIdOrName
     * @param boolean $ignoreWorkSpaceLanguage
     * @access public
     */
    public function __construct($apiKey, $languageIdOrName, $ignoreWorkSpaceLanguage)
    {
      $this->apiKey = $apiKey;
      $this->languageIdOrName = $languageIdOrName;
      $this->ignoreWorkSpaceLanguage = $ignoreWorkSpaceLanguage;
    }

}
