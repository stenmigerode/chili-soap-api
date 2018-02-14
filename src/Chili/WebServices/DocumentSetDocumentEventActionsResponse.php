<?php

namespace Chili\WebServices;

class DocumentSetDocumentEventActionsResponse
{

    /**
     * @var string $DocumentSetDocumentEventActionsResult
     * @access public
     */
    public $DocumentSetDocumentEventActionsResult = null;

    /**
     * @param string $DocumentSetDocumentEventActionsResult
     * @access public
     */
    public function __construct($DocumentSetDocumentEventActionsResult)
    {
      $this->DocumentSetDocumentEventActionsResult = $DocumentSetDocumentEventActionsResult;
    }

}
