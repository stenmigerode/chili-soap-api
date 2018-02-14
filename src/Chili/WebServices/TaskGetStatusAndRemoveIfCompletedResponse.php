<?php

namespace Chili\WebServices;

class TaskGetStatusAndRemoveIfCompletedResponse
{

    /**
     * @var string $TaskGetStatusAndRemoveIfCompletedResult
     * @access public
     */
    public $TaskGetStatusAndRemoveIfCompletedResult = null;

    /**
     * @param string $TaskGetStatusAndRemoveIfCompletedResult
     * @access public
     */
    public function __construct($TaskGetStatusAndRemoveIfCompletedResult)
    {
      $this->TaskGetStatusAndRemoveIfCompletedResult = $TaskGetStatusAndRemoveIfCompletedResult;
    }

}
