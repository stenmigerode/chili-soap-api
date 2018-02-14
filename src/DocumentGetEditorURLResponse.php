<?php

namespace Chili\WebServices;

class DocumentGetEditorURLResponse
{

    /**
     * @var string $DocumentGetEditorURLResult
     * @access public
     */
    public $DocumentGetEditorURLResult = null;

    /**
     * @param string $DocumentGetEditorURLResult
     * @access public
     */
    public function __construct($DocumentGetEditorURLResult)
    {
      $this->DocumentGetEditorURLResult = $DocumentGetEditorURLResult;
    }

}
