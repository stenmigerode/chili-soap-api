<?php

namespace Chili\WebServices;

class ResourceGetTreeLevelResponse
{

    /**
     * @var string $ResourceGetTreeLevelResult
     * @access public
     */
    public $ResourceGetTreeLevelResult = null;

    /**
     * @param string $ResourceGetTreeLevelResult
     * @access public
     */
    public function __construct($ResourceGetTreeLevelResult)
    {
      $this->ResourceGetTreeLevelResult = $ResourceGetTreeLevelResult;
    }

}
