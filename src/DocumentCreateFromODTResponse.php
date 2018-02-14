<?php

namespace Chili\WebServices;

class DocumentCreateFromODTResponse
{

    /**
     * @var string $DocumentCreateFromODTResult
     * @access public
     */
    public $DocumentCreateFromODTResult = null;

    /**
     * @param string $DocumentCreateFromODTResult
     * @access public
     */
    public function __construct($DocumentCreateFromODTResult)
    {
      $this->DocumentCreateFromODTResult = $DocumentCreateFromODTResult;
    }

}
