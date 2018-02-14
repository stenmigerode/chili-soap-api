<?php

namespace Chili\WebServices;

class ResourceGetTreeResponse
{

    /**
     * @var string $ResourceGetTreeResult
     * @access public
     */
    public $ResourceGetTreeResult = null;

    /**
     * @param string $ResourceGetTreeResult
     * @access public
     */
    public function __construct($ResourceGetTreeResult)
    {
      $this->ResourceGetTreeResult = $ResourceGetTreeResult;
    }

}
