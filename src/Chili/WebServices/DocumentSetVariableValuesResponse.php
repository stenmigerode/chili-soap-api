<?php

namespace Chili\WebServices;

class DocumentSetVariableValuesResponse
{

    /**
     * @var string $DocumentSetVariableValuesResult
     * @access public
     */
    public $DocumentSetVariableValuesResult = null;

    /**
     * @param string $DocumentSetVariableValuesResult
     * @access public
     */
    public function __construct($DocumentSetVariableValuesResult)
    {
      $this->DocumentSetVariableValuesResult = $DocumentSetVariableValuesResult;
    }

}
