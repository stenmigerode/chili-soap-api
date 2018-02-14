<?php

namespace Chili\WebServices;

class ResourceItemGetDefinitionXMLResponse
{

    /**
     * @var string $ResourceItemGetDefinitionXMLResult
     * @access public
     */
    public $ResourceItemGetDefinitionXMLResult = null;

    /**
     * @param string $ResourceItemGetDefinitionXMLResult
     * @access public
     */
    public function __construct($ResourceItemGetDefinitionXMLResult)
    {
      $this->ResourceItemGetDefinitionXMLResult = $ResourceItemGetDefinitionXMLResult;
    }

}
