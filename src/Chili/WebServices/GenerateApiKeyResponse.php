<?php

namespace Chili\WebServices;

class GenerateApiKeyResponse
{

    /**
     * @var string $GenerateApiKeyResult
     * @access public
     */
    public $GenerateApiKeyResult = null;

    /**
     * @param string $GenerateApiKeyResult
     * @access public
     */
    public function __construct($GenerateApiKeyResult)
    {
      $this->GenerateApiKeyResult = $GenerateApiKeyResult;
    }

}
