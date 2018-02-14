<?php

namespace Chili\WebServices;

class DocumentGetIpadXMLResponse
{

    /**
     * @var string $DocumentGetIpadXMLResult
     * @access public
     */
    public $DocumentGetIpadXMLResult = null;

    /**
     * @param string $DocumentGetIpadXMLResult
     * @access public
     */
    public function __construct($DocumentGetIpadXMLResult)
    {
      $this->DocumentGetIpadXMLResult = $DocumentGetIpadXMLResult;
    }

}
