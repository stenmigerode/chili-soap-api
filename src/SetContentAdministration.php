<?php

namespace Chili\WebServices;

class SetContentAdministration
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var boolean $allowContentAdministration
     * @access public
     */
    public $allowContentAdministration = null;

    /**
     * @param string $apiKey
     * @param boolean $allowContentAdministration
     * @access public
     */
    public function __construct($apiKey, $allowContentAdministration)
    {
      $this->apiKey = $apiKey;
      $this->allowContentAdministration = $allowContentAdministration;
    }

}
