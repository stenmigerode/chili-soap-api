<?php

namespace Chili\WebServices;

class GetServerDateResponse
{

    /**
     * @var string $GetServerDateResult
     * @access public
     */
    public $GetServerDateResult = null;

    /**
     * @param string $GetServerDateResult
     * @access public
     */
    public function __construct($GetServerDateResult)
    {
      $this->GetServerDateResult = $GetServerDateResult;
    }

}
