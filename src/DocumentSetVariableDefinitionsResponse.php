<?php

namespace Chili\WebServices;

class DocumentSetVariableDefinitionsResponse
{

    /**
     * @var string $DocumentSetVariableDefinitionsResult
     * @access public
     */
    public $DocumentSetVariableDefinitionsResult = null;

    /**
     * @param string $DocumentSetVariableDefinitionsResult
     * @access public
     */
    public function __construct($DocumentSetVariableDefinitionsResult)
    {
      $this->DocumentSetVariableDefinitionsResult = $DocumentSetVariableDefinitionsResult;
    }

}
