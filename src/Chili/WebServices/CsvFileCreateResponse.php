<?php

namespace Chili\WebServices;

class CsvFileCreateResponse
{

    /**
     * @var string $CsvFileCreateResult
     * @access public
     */
    public $CsvFileCreateResult = null;

    /**
     * @param string $CsvFileCreateResult
     * @access public
     */
    public function __construct($CsvFileCreateResult)
    {
      $this->CsvFileCreateResult = $CsvFileCreateResult;
    }

}
