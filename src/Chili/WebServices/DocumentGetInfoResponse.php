<?php

namespace Chili\WebServices;

class DocumentGetInfoResponse
{

    /**
     * @var string $DocumentGetInfoResult
     * @access public
     */
    public $DocumentGetInfoResult = null;

    /**
     * @param string $DocumentGetInfoResult
     * @access public
     */
    public function __construct($DocumentGetInfoResult)
    {
      $this->DocumentGetInfoResult = $DocumentGetInfoResult;
    }

}
