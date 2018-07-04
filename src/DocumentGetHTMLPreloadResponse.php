<?php

namespace Chili\WebServices;

class DocumentGetHTMLPreloadResponse
{

    /**
     * @var string $DocumentGetHTMLPreloadResult
     * @access public
     */
    public $DocumentGetHTMLPreloadResult = null;

    /**
     * @param string $DocumentGetHTMLPreloadResult
     * @access public
     */
    public function __construct($DocumentGetHTMLPreloadResult)
    {
      $this->DocumentGetHTMLPreloadResult = $DocumentGetHTMLPreloadResult;
    }

}
