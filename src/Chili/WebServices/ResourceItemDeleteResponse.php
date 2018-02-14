<?php

namespace Chili\WebServices;

class ResourceItemDeleteResponse
{

    /**
     * @var string $ResourceItemDeleteResult
     * @access public
     */
    public $ResourceItemDeleteResult = null;

    /**
     * @param string $ResourceItemDeleteResult
     * @access public
     */
    public function __construct($ResourceItemDeleteResult)
    {
      $this->ResourceItemDeleteResult = $ResourceItemDeleteResult;
    }

}
