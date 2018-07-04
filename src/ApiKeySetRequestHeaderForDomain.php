<?php

namespace Chili\WebServices;

class ApiKeySetRequestHeaderForDomain
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $domain
     * @access public
     */
    public $domain = null;

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
     * @param string $domain
     * @param string $headerFieldKey
     * @param string $headerFieldValue
     * @access public
     */
    public function __construct($apiKey, $domain, $headerFieldKey, $headerFieldValue)
    {
      $this->apiKey = $apiKey;
      $this->domain = $domain;
      $this->headerFieldKey = $headerFieldKey;
      $this->headerFieldValue = $headerFieldValue;
    }

}
