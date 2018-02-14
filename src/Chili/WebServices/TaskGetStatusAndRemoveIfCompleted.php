<?php

namespace Chili\WebServices;

class TaskGetStatusAndRemoveIfCompleted
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $taskID
     * @access public
     */
    public $taskID = null;

    /**
     * @param string $apiKey
     * @param string $taskID
     * @access public
     */
    public function __construct($apiKey, $taskID)
    {
      $this->apiKey = $apiKey;
      $this->taskID = $taskID;
    }

}
