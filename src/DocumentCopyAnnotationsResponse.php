<?php

namespace Chili\WebServices;

class DocumentCopyAnnotationsResponse
{

    /**
     * @var string $DocumentCopyAnnotationsResult
     * @access public
     */
    public $DocumentCopyAnnotationsResult = null;

    /**
     * @param string $DocumentCopyAnnotationsResult
     * @access public
     */
    public function __construct($DocumentCopyAnnotationsResult)
    {
      $this->DocumentCopyAnnotationsResult = $DocumentCopyAnnotationsResult;
    }

}
