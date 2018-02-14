<?php

namespace Chili\WebServices;

class LanguageSaveStringsResponse
{

    /**
     * @var string $LanguageSaveStringsResult
     * @access public
     */
    public $LanguageSaveStringsResult = null;

    /**
     * @param string $LanguageSaveStringsResult
     * @access public
     */
    public function __construct($LanguageSaveStringsResult)
    {
      $this->LanguageSaveStringsResult = $LanguageSaveStringsResult;
    }

}
