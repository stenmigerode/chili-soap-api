<?php

namespace Chili\WebServices;

class DynamicAssetProviderGetTempAsset
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $dynamicAssetProviderID
     * @access public
     */
    public $dynamicAssetProviderID = null;

    /**
     * @var string $data
     * @access public
     */
    public $data = null;

    /**
     * @param string $apiKey
     * @param string $dynamicAssetProviderID
     * @param string $data
     * @access public
     */
    public function __construct($apiKey, $dynamicAssetProviderID, $data)
    {
      $this->apiKey = $apiKey;
      $this->dynamicAssetProviderID = $dynamicAssetProviderID;
      $this->data = $data;
    }

}
