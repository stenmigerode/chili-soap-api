<?php

namespace Chili\WebServices;

class TasksGetListResponse
{

    /**
     * @var string $TasksGetListResult
     * @access public
     */
    public $TasksGetListResult = null;

    /**
     * @param string $TasksGetListResult
     * @access public
     */
    public function __construct($TasksGetListResult)
    {
      $this->TasksGetListResult = $TasksGetListResult;
    }

}
