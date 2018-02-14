<?php

namespace Chili\WebServices;

class EditsGetFromURL
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $url
     * @access public
     */
    public $url = null;

    /**
     * @param string $apiKey
     * @param string $url
     * @access public
     */
    public function __construct($apiKey, $url)
    {
      $this->apiKey = $apiKey;
      $this->url = $url;
    }

}
