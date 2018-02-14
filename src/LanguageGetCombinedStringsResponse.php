<?php

namespace Chili\WebServices;

class LanguageGetCombinedStringsResponse
{

    /**
     * @var string $LanguageGetCombinedStringsResult
     * @access public
     */
    public $LanguageGetCombinedStringsResult = null;

    /**
     * @param string $LanguageGetCombinedStringsResult
     * @access public
     */
    public function __construct($LanguageGetCombinedStringsResult)
    {
      $this->LanguageGetCombinedStringsResult = $LanguageGetCombinedStringsResult;
    }

}
