<?php

namespace Chili\WebServices;

class AssetGetImageInfo
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $assetID
     * @access public
     */
    public $assetID = null;

    /**
     * @param string $apiKey
     * @param string $assetID
     * @access public
     */
    public function __construct($apiKey, $assetID)
    {
      $this->apiKey = $apiKey;
      $this->assetID = $assetID;
    }

}
