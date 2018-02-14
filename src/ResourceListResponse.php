<?php

namespace Chili\WebServices;

class ResourceListResponse
{

    /**
     * @var string $ResourceListResult
     * @access public
     */
    public $ResourceListResult = null;

    /**
     * @param string $ResourceListResult
     * @access public
     */
    public function __construct($ResourceListResult)
    {
      $this->ResourceListResult = $ResourceListResult;
    }

}
