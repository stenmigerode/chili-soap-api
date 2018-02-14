<?php

namespace Chili\WebServices;

class DocumentGetVariableValuesResponse
{

    /**
     * @var string $DocumentGetVariableValuesResult
     * @access public
     */
    public $DocumentGetVariableValuesResult = null;

    /**
     * @param string $DocumentGetVariableValuesResult
     * @access public
     */
    public function __construct($DocumentGetVariableValuesResult)
    {
      $this->DocumentGetVariableValuesResult = $DocumentGetVariableValuesResult;
    }

}
