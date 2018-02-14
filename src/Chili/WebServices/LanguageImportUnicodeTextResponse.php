<?php

namespace Chili\WebServices;

class LanguageImportUnicodeTextResponse
{

    /**
     * @var string $LanguageImportUnicodeTextResult
     * @access public
     */
    public $LanguageImportUnicodeTextResult = null;

    /**
     * @param string $LanguageImportUnicodeTextResult
     * @access public
     */
    public function __construct($LanguageImportUnicodeTextResult)
    {
      $this->LanguageImportUnicodeTextResult = $LanguageImportUnicodeTextResult;
    }

}
