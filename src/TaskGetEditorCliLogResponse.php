<?php

namespace Chili\WebServices;

class TaskGetEditorCliLogResponse
{

    /**
     * @var string $TaskGetEditorCliLogResult
     * @access public
     */
    public $TaskGetEditorCliLogResult = null;

    /**
     * @param string $TaskGetEditorCliLogResult
     * @access public
     */
    public function __construct($TaskGetEditorCliLogResult)
    {
      $this->TaskGetEditorCliLogResult = $TaskGetEditorCliLogResult;
    }

}
