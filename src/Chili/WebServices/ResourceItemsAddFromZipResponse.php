<?php

namespace Chili\WebServices;

class ResourceItemsAddFromZipResponse
{

    /**
     * @var string $ResourceItemsAddFromZipResult
     * @access public
     */
    public $ResourceItemsAddFromZipResult = null;

    /**
     * @param string $ResourceItemsAddFromZipResult
     * @access public
     */
    public function __construct($ResourceItemsAddFromZipResult)
    {
      $this->ResourceItemsAddFromZipResult = $ResourceItemsAddFromZipResult;
    }

}
