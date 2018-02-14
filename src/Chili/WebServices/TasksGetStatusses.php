<?php

namespace Chili\WebServices;

class TasksGetStatusses
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $taskXML
     * @access public
     */
    public $taskXML = null;

    /**
     * @param string $apiKey
     * @param string $taskXML
     * @access public
     */
    public function __construct($apiKey, $taskXML)
    {
      $this->apiKey = $apiKey;
      $this->taskXML = $taskXML;
    }

}
