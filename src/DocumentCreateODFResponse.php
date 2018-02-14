<?php

namespace Chili\WebServices;

class DocumentCreateODFResponse
{

    /**
     * @var string $DocumentCreateODFResult
     * @access public
     */
    public $DocumentCreateODFResult = null;

    /**
     * @param string $DocumentCreateODFResult
     * @access public
     */
    public function __construct($DocumentCreateODFResult)
    {
      $this->DocumentCreateODFResult = $DocumentCreateODFResult;
    }

}
