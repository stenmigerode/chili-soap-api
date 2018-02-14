<?php

namespace Chili\WebServices;

class ThreeDModelCreatePackage
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $threeDModelId
     * @access public
     */
    public $threeDModelId = null;

    /**
     * @param string $apiKey
     * @param string $threeDModelId
     * @access public
     */
    public function __construct($apiKey, $threeDModelId)
    {
      $this->apiKey = $apiKey;
      $this->threeDModelId = $threeDModelId;
    }

}
