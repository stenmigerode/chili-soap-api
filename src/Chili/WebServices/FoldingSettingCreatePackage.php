<?php

namespace Chili\WebServices;

class FoldingSettingCreatePackage
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $foldingSettingId
     * @access public
     */
    public $foldingSettingId = null;

    /**
     * @param string $apiKey
     * @param string $foldingSettingId
     * @access public
     */
    public function __construct($apiKey, $foldingSettingId)
    {
      $this->apiKey = $apiKey;
      $this->foldingSettingId = $foldingSettingId;
    }

}
