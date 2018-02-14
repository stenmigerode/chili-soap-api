<?php

namespace Chili\WebServices;

class ODTGetTextFlowResponse
{

    /**
     * @var string $ODTGetTextFlowResult
     * @access public
     */
    public $ODTGetTextFlowResult = null;

    /**
     * @param string $ODTGetTextFlowResult
     * @access public
     */
    public function __construct($ODTGetTextFlowResult)
    {
      $this->ODTGetTextFlowResult = $ODTGetTextFlowResult;
    }

}
