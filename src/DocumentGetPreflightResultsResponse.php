<?php

namespace Chili\WebServices;

class DocumentGetPreflightResultsResponse
{

    /**
     * @var string $DocumentGetPreflightResultsResult
     * @access public
     */
    public $DocumentGetPreflightResultsResult = null;

    /**
     * @param string $DocumentGetPreflightResultsResult
     * @access public
     */
    public function __construct($DocumentGetPreflightResultsResult)
    {
      $this->DocumentGetPreflightResultsResult = $DocumentGetPreflightResultsResult;
    }

}
