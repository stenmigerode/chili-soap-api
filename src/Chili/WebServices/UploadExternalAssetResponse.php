<?php

namespace Chili\WebServices;

class UploadExternalAssetResponse
{

    /**
     * @var string $UploadExternalAssetResult
     * @access public
     */
    public $UploadExternalAssetResult = null;

    /**
     * @param string $UploadExternalAssetResult
     * @access public
     */
    public function __construct($UploadExternalAssetResult)
    {
      $this->UploadExternalAssetResult = $UploadExternalAssetResult;
    }

}
