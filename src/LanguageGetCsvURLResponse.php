<?php

namespace Chili\WebServices;

class LanguageGetCsvURLResponse
{

    /**
     * @var string $LanguageGetCsvURLResult
     * @access public
     */
    public $LanguageGetCsvURLResult = null;

    /**
     * @param string $LanguageGetCsvURLResult
     * @access public
     */
    public function __construct($LanguageGetCsvURLResult)
    {
      $this->LanguageGetCsvURLResult = $LanguageGetCsvURLResult;
    }

}
