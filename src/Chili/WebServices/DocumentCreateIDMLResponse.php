<?php

namespace Chili\WebServices;

class DocumentCreateIDMLResponse
{

    /**
     * @var string $DocumentCreateIDMLResult
     * @access public
     */
    public $DocumentCreateIDMLResult = null;

    /**
     * @param string $DocumentCreateIDMLResult
     * @access public
     */
    public function __construct($DocumentCreateIDMLResult)
    {
      $this->DocumentCreateIDMLResult = $DocumentCreateIDMLResult;
    }

}
