<?php

namespace Chili\WebServices;

class ResourceSearchPagedResponse
{

    /**
     * @var string $ResourceSearchPagedResult
     * @access public
     */
    public $ResourceSearchPagedResult = null;

    /**
     * @param string $ResourceSearchPagedResult
     * @access public
     */
    public function __construct($ResourceSearchPagedResult)
    {
      $this->ResourceSearchPagedResult = $ResourceSearchPagedResult;
    }

}
