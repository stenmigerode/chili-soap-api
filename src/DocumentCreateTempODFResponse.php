<?php

namespace Chili\WebServices;

class DocumentCreateTempODFResponse
{

    /**
     * @var string $DocumentCreateTempODFResult
     * @access public
     */
    public $DocumentCreateTempODFResult = null;

    /**
     * @param string $DocumentCreateTempODFResult
     * @access public
     */
    public function __construct($DocumentCreateTempODFResult)
    {
      $this->DocumentCreateTempODFResult = $DocumentCreateTempODFResult;
    }

}
