<?php

namespace Chili\WebServices;

class EditsGetFromURLResponse
{

    /**
     * @var string $EditsGetFromURLResult
     * @access public
     */
    public $EditsGetFromURLResult = null;

    /**
     * @param string $EditsGetFromURLResult
     * @access public
     */
    public function __construct($EditsGetFromURLResult)
    {
      $this->EditsGetFromURLResult = $EditsGetFromURLResult;
    }

}
