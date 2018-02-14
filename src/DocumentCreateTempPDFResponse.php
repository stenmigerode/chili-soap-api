<?php

namespace Chili\WebServices;

class DocumentCreateTempPDFResponse
{

    /**
     * @var string $DocumentCreateTempPDFResult
     * @access public
     */
    public $DocumentCreateTempPDFResult = null;

    /**
     * @param string $DocumentCreateTempPDFResult
     * @access public
     */
    public function __construct($DocumentCreateTempPDFResult)
    {
      $this->DocumentCreateTempPDFResult = $DocumentCreateTempPDFResult;
    }

}
