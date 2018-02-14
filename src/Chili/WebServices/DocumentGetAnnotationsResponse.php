<?php

namespace Chili\WebServices;

class DocumentGetAnnotationsResponse
{

    /**
     * @var string $DocumentGetAnnotationsResult
     * @access public
     */
    public $DocumentGetAnnotationsResult = null;

    /**
     * @param string $DocumentGetAnnotationsResult
     * @access public
     */
    public function __construct($DocumentGetAnnotationsResult)
    {
      $this->DocumentGetAnnotationsResult = $DocumentGetAnnotationsResult;
    }

}
