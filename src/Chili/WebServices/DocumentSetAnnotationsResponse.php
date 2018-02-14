<?php

namespace Chili\WebServices;

class DocumentSetAnnotationsResponse
{

    /**
     * @var string $DocumentSetAnnotationsResult
     * @access public
     */
    public $DocumentSetAnnotationsResult = null;

    /**
     * @param string $DocumentSetAnnotationsResult
     * @access public
     */
    public function __construct($DocumentSetAnnotationsResult)
    {
      $this->DocumentSetAnnotationsResult = $DocumentSetAnnotationsResult;
    }

}
