<?php

namespace Chili\WebServices;

class DocumentCopyVariableDefinitionsResponse
{

    /**
     * @var string $DocumentCopyVariableDefinitionsResult
     * @access public
     */
    public $DocumentCopyVariableDefinitionsResult = null;

    /**
     * @param string $DocumentCopyVariableDefinitionsResult
     * @access public
     */
    public function __construct($DocumentCopyVariableDefinitionsResult)
    {
      $this->DocumentCopyVariableDefinitionsResult = $DocumentCopyVariableDefinitionsResult;
    }

}
