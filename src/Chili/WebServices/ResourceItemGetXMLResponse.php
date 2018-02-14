<?php

namespace Chili\WebServices;

class ResourceItemGetXMLResponse
{

    /**
     * @var string $ResourceItemGetXMLResult
     * @access public
     */
    public $ResourceItemGetXMLResult = null;

    /**
     * @param string $ResourceItemGetXMLResult
     * @access public
     */
    public function __construct($ResourceItemGetXMLResult)
    {
      $this->ResourceItemGetXMLResult = $ResourceItemGetXMLResult;
    }

}
