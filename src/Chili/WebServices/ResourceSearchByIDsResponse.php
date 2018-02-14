<?php

namespace Chili\WebServices;

class ResourceSearchByIDsResponse
{

    /**
     * @var string $ResourceSearchByIDsResult
     * @access public
     */
    public $ResourceSearchByIDsResult = null;

    /**
     * @param string $ResourceSearchByIDsResult
     * @access public
     */
    public function __construct($ResourceSearchByIDsResult)
    {
      $this->ResourceSearchByIDsResult = $ResourceSearchByIDsResult;
    }

}
