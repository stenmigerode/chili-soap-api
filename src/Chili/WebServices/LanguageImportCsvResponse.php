<?php

namespace Chili\WebServices;

class LanguageImportCsvResponse
{

    /**
     * @var string $LanguageImportCsvResult
     * @access public
     */
    public $LanguageImportCsvResult = null;

    /**
     * @param string $LanguageImportCsvResult
     * @access public
     */
    public function __construct($LanguageImportCsvResult)
    {
      $this->LanguageImportCsvResult = $LanguageImportCsvResult;
    }

}
