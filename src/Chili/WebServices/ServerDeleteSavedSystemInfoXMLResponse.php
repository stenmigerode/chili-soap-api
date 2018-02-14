<?php

namespace Chili\WebServices;

class ServerDeleteSavedSystemInfoXMLResponse
{

    /**
     * @var string $ServerDeleteSavedSystemInfoXMLResult
     * @access public
     */
    public $ServerDeleteSavedSystemInfoXMLResult = null;

    /**
     * @param string $ServerDeleteSavedSystemInfoXMLResult
     * @access public
     */
    public function __construct($ServerDeleteSavedSystemInfoXMLResult)
    {
      $this->ServerDeleteSavedSystemInfoXMLResult = $ServerDeleteSavedSystemInfoXMLResult;
    }

}
