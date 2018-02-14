<?php

namespace Chili\WebServices;

class SetAutomaticPreviewGeneration
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var boolean $createPreviews
     * @access public
     */
    public $createPreviews = null;

    /**
     * @param string $apiKey
     * @param boolean $createPreviews
     * @access public
     */
    public function __construct($apiKey, $createPreviews)
    {
      $this->apiKey = $apiKey;
      $this->createPreviews = $createPreviews;
    }

}
