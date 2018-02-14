<?php

namespace Chili\WebServices;

class ResourceItemGetCustomMetaDataResponse
{

    /**
     * @var string $ResourceItemGetCustomMetaDataResult
     * @access public
     */
    public $ResourceItemGetCustomMetaDataResult = null;

    /**
     * @param string $ResourceItemGetCustomMetaDataResult
     * @access public
     */
    public function __construct($ResourceItemGetCustomMetaDataResult)
    {
      $this->ResourceItemGetCustomMetaDataResult = $ResourceItemGetCustomMetaDataResult;
    }

}
