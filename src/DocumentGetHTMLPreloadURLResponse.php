<?php

namespace Chili\WebServices;

class DocumentGetHTMLPreloadURLResponse
{

    /**
     * @var string $DocumentGetHTMLPreloadURLResult
     * @access public
     */
    public $DocumentGetHTMLPreloadURLResult = null;

    /**
     * @param string $DocumentGetHTMLPreloadURLResult
     * @access public
     */
    public function __construct($DocumentGetHTMLPreloadURLResult)
    {
      $this->DocumentGetHTMLPreloadURLResult = $DocumentGetHTMLPreloadURLResult;
    }

}
