<?php

namespace Chili\WebServices;

class ServerGetSavedSystemInfoXMLResponse
{

    /**
     * @var string $ServerGetSavedSystemInfoXMLResult
     * @access public
     */
    public $ServerGetSavedSystemInfoXMLResult = null;

    /**
     * @param string $ServerGetSavedSystemInfoXMLResult
     * @access public
     */
    public function __construct($ServerGetSavedSystemInfoXMLResult)
    {
      $this->ServerGetSavedSystemInfoXMLResult = $ServerGetSavedSystemInfoXMLResult;
    }

}
