<?php

namespace Chili\WebServices;

class DynamicAssetProviderGetTempAssetResponse
{

    /**
     * @var string $DynamicAssetProviderGetTempAssetResult
     * @access public
     */
    public $DynamicAssetProviderGetTempAssetResult = null;

    /**
     * @param string $DynamicAssetProviderGetTempAssetResult
     * @access public
     */
    public function __construct($DynamicAssetProviderGetTempAssetResult)
    {
      $this->DynamicAssetProviderGetTempAssetResult = $DynamicAssetProviderGetTempAssetResult;
    }

}
