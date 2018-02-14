<?php

namespace Chili\WebServices;

class DocumentCreateFromPDFResponse
{

    /**
     * @var string $DocumentCreateFromPDFResult
     * @access public
     */
    public $DocumentCreateFromPDFResult = null;

    /**
     * @param string $DocumentCreateFromPDFResult
     * @access public
     */
    public function __construct($DocumentCreateFromPDFResult)
    {
      $this->DocumentCreateFromPDFResult = $DocumentCreateFromPDFResult;
    }

}
