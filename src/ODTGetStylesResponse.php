<?php

namespace Chili\WebServices;

class ODTGetStylesResponse
{

    /**
     * @var string $ODTGetStylesResult
     * @access public
     */
    public $ODTGetStylesResult = null;

    /**
     * @param string $ODTGetStylesResult
     * @access public
     */
    public function __construct($ODTGetStylesResult)
    {
      $this->ODTGetStylesResult = $ODTGetStylesResult;
    }

}
