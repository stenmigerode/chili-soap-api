<?php

namespace Chili\WebServices;

class DocumentSetConstraintsResponse
{

    /**
     * @var string $DocumentSetConstraintsResult
     * @access public
     */
    public $DocumentSetConstraintsResult = null;

    /**
     * @param string $DocumentSetConstraintsResult
     * @access public
     */
    public function __construct($DocumentSetConstraintsResult)
    {
      $this->DocumentSetConstraintsResult = $DocumentSetConstraintsResult;
    }

}
