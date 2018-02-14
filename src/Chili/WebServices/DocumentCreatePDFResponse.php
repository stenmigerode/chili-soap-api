<?php

namespace Chili\WebServices;

class DocumentCreatePDFResponse
{

    /**
     * @var string $DocumentCreatePDFResult
     * @access public
     */
    public $DocumentCreatePDFResult = null;

    /**
     * @param string $DocumentCreatePDFResult
     * @access public
     */
    public function __construct($DocumentCreatePDFResult)
    {
      $this->DocumentCreatePDFResult = $DocumentCreatePDFResult;
    }

}
