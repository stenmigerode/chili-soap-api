<?php

namespace Chili\WebServices;

class DocumentCreateTempFoldingResponse
{

    /**
     * @var string $DocumentCreateTempFoldingResult
     * @access public
     */
    public $DocumentCreateTempFoldingResult = null;

    /**
     * @param string $DocumentCreateTempFoldingResult
     * @access public
     */
    public function __construct($DocumentCreateTempFoldingResult)
    {
      $this->DocumentCreateTempFoldingResult = $DocumentCreateTempFoldingResult;
    }

}
