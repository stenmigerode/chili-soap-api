<?php

namespace Chili\WebServices;

class ApiKeySetHeaderFieldForServerDownloads
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $headerFieldKey
     * @access public
     */
    public $headerFieldKey = null;

    /**
     * @var string $headerFieldValue
     * @access public
     */
    public $headerFieldValue = null;

    /**
     * @param string $apiKey
     * @param string $headerFieldKey
     * @param string $headerFieldValue
     * @access public
     */
    public function __construct($apiKey, $headerFieldKey, $headerFieldValue)
    {
      $this->apiKey = $apiKey;
      $this->headerFieldKey = $headerFieldKey;
      $this->headerFieldValue = $headerFieldValue;
    }

}
