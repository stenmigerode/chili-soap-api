<?php

namespace Chili\WebServices;

class DocumentGetVariableDefinitionsResponse
{

    /**
     * @var string $DocumentGetVariableDefinitionsResult
     * @access public
     */
    public $DocumentGetVariableDefinitionsResult = null;

    /**
     * @param string $DocumentGetVariableDefinitionsResult
     * @access public
     */
    public function __construct($DocumentGetVariableDefinitionsResult)
    {
      $this->DocumentGetVariableDefinitionsResult = $DocumentGetVariableDefinitionsResult;
    }

}
