<?php

namespace Chili\WebServices;

class ResourceItemSaveResponse
{

    /**
     * @var string $ResourceItemSaveResult
     * @access public
     */
    public $ResourceItemSaveResult = null;

    /**
     * @param string $ResourceItemSaveResult
     * @access public
     */
    public function __construct($ResourceItemSaveResult)
    {
      $this->ResourceItemSaveResult = $ResourceItemSaveResult;
    }

}
