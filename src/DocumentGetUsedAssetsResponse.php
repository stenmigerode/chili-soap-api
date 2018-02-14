<?php

namespace Chili\WebServices;

class DocumentGetUsedAssetsResponse
{

    /**
     * @var string $DocumentGetUsedAssetsResult
     * @access public
     */
    public $DocumentGetUsedAssetsResult = null;

    /**
     * @param string $DocumentGetUsedAssetsResult
     * @access public
     */
    public function __construct($DocumentGetUsedAssetsResult)
    {
      $this->DocumentGetUsedAssetsResult = $DocumentGetUsedAssetsResult;
    }

}
