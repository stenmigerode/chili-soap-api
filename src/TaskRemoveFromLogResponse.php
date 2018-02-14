<?php

namespace Chili\WebServices;

class TaskRemoveFromLogResponse
{

    /**
     * @var string $TaskRemoveFromLogResult
     * @access public
     */
    public $TaskRemoveFromLogResult = null;

    /**
     * @param string $TaskRemoveFromLogResult
     * @access public
     */
    public function __construct($TaskRemoveFromLogResult)
    {
      $this->TaskRemoveFromLogResult = $TaskRemoveFromLogResult;
    }

}
