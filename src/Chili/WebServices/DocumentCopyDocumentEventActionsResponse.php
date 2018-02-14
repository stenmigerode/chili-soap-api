<?php

namespace Chili\WebServices;

class DocumentCopyDocumentEventActionsResponse
{

    /**
     * @var string $DocumentCopyDocumentEventActionsResult
     * @access public
     */
    public $DocumentCopyDocumentEventActionsResult = null;

    /**
     * @param string $DocumentCopyDocumentEventActionsResult
     * @access public
     */
    public function __construct($DocumentCopyDocumentEventActionsResult)
    {
      $this->DocumentCopyDocumentEventActionsResult = $DocumentCopyDocumentEventActionsResult;
    }

}
