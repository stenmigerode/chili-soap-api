<?php

namespace Chili\WebServices;

class ServerSaveSystemInfoXMLResponse
{

    /**
     * @var string $ServerSaveSystemInfoXMLResult
     * @access public
     */
    public $ServerSaveSystemInfoXMLResult = null;

    /**
     * @param string $ServerSaveSystemInfoXMLResult
     * @access public
     */
    public function __construct($ServerSaveSystemInfoXMLResult)
    {
      $this->ServerSaveSystemInfoXMLResult = $ServerSaveSystemInfoXMLResult;
    }

}
