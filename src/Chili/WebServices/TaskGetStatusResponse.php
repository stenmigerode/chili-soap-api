<?php

namespace Chili\WebServices;

class TaskGetStatusResponse
{

    /**
     * @var string $TaskGetStatusResult
     * @access public
     */
    public $TaskGetStatusResult = null;

    /**
     * @param string $TaskGetStatusResult
     * @access public
     */
    public function __construct($TaskGetStatusResult)
    {
      $this->TaskGetStatusResult = $TaskGetStatusResult;
    }

}
