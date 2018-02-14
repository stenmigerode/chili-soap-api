<?php

namespace Chili\WebServices;

class TasksGetQueueOverviewResponse
{

    /**
     * @var string $TasksGetQueueOverviewResult
     * @access public
     */
    public $TasksGetQueueOverviewResult = null;

    /**
     * @param string $TasksGetQueueOverviewResult
     * @access public
     */
    public function __construct($TasksGetQueueOverviewResult)
    {
      $this->TasksGetQueueOverviewResult = $TasksGetQueueOverviewResult;
    }

}
