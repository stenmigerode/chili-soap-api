<?php

namespace Chili\WebServices;

class DocumentGetDocumentEventActionsResponse
{

    /**
     * @var string $DocumentGetDocumentEventActionsResult
     * @access public
     */
    public $DocumentGetDocumentEventActionsResult = null;

    /**
     * @param string $DocumentGetDocumentEventActionsResult
     * @access public
     */
    public function __construct($DocumentGetDocumentEventActionsResult)
    {
      $this->DocumentGetDocumentEventActionsResult = $DocumentGetDocumentEventActionsResult;
    }

}
