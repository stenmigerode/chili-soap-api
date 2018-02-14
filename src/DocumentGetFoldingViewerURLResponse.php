<?php

namespace Chili\WebServices;

class DocumentGetFoldingViewerURLResponse
{

    /**
     * @var string $DocumentGetFoldingViewerURLResult
     * @access public
     */
    public $DocumentGetFoldingViewerURLResult = null;

    /**
     * @param string $DocumentGetFoldingViewerURLResult
     * @access public
     */
    public function __construct($DocumentGetFoldingViewerURLResult)
    {
      $this->DocumentGetFoldingViewerURLResult = $DocumentGetFoldingViewerURLResult;
    }

}
