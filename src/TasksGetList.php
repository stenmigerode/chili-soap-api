<?php

namespace Chili\WebServices;

class TasksGetList
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var boolean $includeRunningTasks
     * @access public
     */
    public $includeRunningTasks = null;

    /**
     * @var boolean $includeWaitingTasks
     * @access public
     */
    public $includeWaitingTasks = null;

    /**
     * @var boolean $includeFinishedTasks
     * @access public
     */
    public $includeFinishedTasks = null;

    /**
     * @param string $apiKey
     * @param boolean $includeRunningTasks
     * @param boolean $includeWaitingTasks
     * @param boolean $includeFinishedTasks
     * @access public
     */
    public function __construct($apiKey, $includeRunningTasks, $includeWaitingTasks, $includeFinishedTasks)
    {
      $this->apiKey = $apiKey;
      $this->includeRunningTasks = $includeRunningTasks;
      $this->includeWaitingTasks = $includeWaitingTasks;
      $this->includeFinishedTasks = $includeFinishedTasks;
    }

}
