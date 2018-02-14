<?php

namespace Chili\WebServices;

class TasksGetStatussesResponse
{

    /**
     * @var string $TasksGetStatussesResult
     * @access public
     */
    public $TasksGetStatussesResult = null;

    /**
     * @param string $TasksGetStatussesResult
     * @access public
     */
    public function __construct($TasksGetStatussesResult)
    {
      $this->TasksGetStatussesResult = $TasksGetStatussesResult;
    }

}
