<?php

namespace Chili\WebServices;

class DocumentCreateTempHTMLResponse
{

    /**
     * @var string $DocumentCreateTempHTMLResult
     * @access public
     */
    public $DocumentCreateTempHTMLResult = null;

    /**
     * @param string $DocumentCreateTempHTMLResult
     * @access public
     */
    public function __construct($DocumentCreateTempHTMLResult)
    {
      $this->DocumentCreateTempHTMLResult = $DocumentCreateTempHTMLResult;
    }

}
