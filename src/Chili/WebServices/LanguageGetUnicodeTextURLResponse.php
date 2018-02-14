<?php

namespace Chili\WebServices;

class LanguageGetUnicodeTextURLResponse
{

    /**
     * @var string $LanguageGetUnicodeTextURLResult
     * @access public
     */
    public $LanguageGetUnicodeTextURLResult = null;

    /**
     * @param string $LanguageGetUnicodeTextURLResult
     * @access public
     */
    public function __construct($LanguageGetUnicodeTextURLResult)
    {
      $this->LanguageGetUnicodeTextURLResult = $LanguageGetUnicodeTextURLResult;
    }

}
