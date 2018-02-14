<?php

namespace Chili\WebServices;

class DocumentCreateHTMLResponse
{

    /**
     * @var string $DocumentCreateHTMLResult
     * @access public
     */
    public $DocumentCreateHTMLResult = null;

    /**
     * @param string $DocumentCreateHTMLResult
     * @access public
     */
    public function __construct($DocumentCreateHTMLResult)
    {
      $this->DocumentCreateHTMLResult = $DocumentCreateHTMLResult;
    }

}
