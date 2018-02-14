<?php

namespace Chili\WebServices;

class EnvironmentGetLoginSettings
{

    /**
     * @var string $environmentNameOrURL
     * @access public
     */
    public $environmentNameOrURL = null;

    /**
     * @param string $environmentNameOrURL
     * @access public
     */
    public function __construct($environmentNameOrURL)
    {
      $this->environmentNameOrURL = $environmentNameOrURL;
    }

}
