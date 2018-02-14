<?php

namespace Chili\WebServices;

class DocumentCreateTempIDMLResponse
{

    /**
     * @var string $DocumentCreateTempIDMLResult
     * @access public
     */
    public $DocumentCreateTempIDMLResult = null;

    /**
     * @param string $DocumentCreateTempIDMLResult
     * @access public
     */
    public function __construct($DocumentCreateTempIDMLResult)
    {
      $this->DocumentCreateTempIDMLResult = $DocumentCreateTempIDMLResult;
    }

}
