<?php

namespace Chili\WebServices;

class ResourceItemSaveCustomMetaDataResponse
{

    /**
     * @var string $ResourceItemSaveCustomMetaDataResult
     * @access public
     */
    public $ResourceItemSaveCustomMetaDataResult = null;

    /**
     * @param string $ResourceItemSaveCustomMetaDataResult
     * @access public
     */
    public function __construct($ResourceItemSaveCustomMetaDataResult)
    {
      $this->ResourceItemSaveCustomMetaDataResult = $ResourceItemSaveCustomMetaDataResult;
    }

}
