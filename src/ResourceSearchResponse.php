<?php

namespace Chili\WebServices;

class ResourceSearchResponse
{

    /**
     * @var string $ResourceSearchResult
     * @access public
     */
    public $ResourceSearchResult = null;

    /**
     * @param string $ResourceSearchResult
     * @access public
     */
    public function __construct($ResourceSearchResult)
    {
      $this->ResourceSearchResult = $ResourceSearchResult;
    }

}
