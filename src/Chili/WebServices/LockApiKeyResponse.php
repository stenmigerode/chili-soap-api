<?php

namespace Chili\WebServices;

class LockApiKeyResponse
{

    /**
     * @var string $LockApiKeyResult
     * @access public
     */
    public $LockApiKeyResult = null;

    /**
     * @param string $LockApiKeyResult
     * @access public
     */
    public function __construct($LockApiKeyResult)
    {
      $this->LockApiKeyResult = $LockApiKeyResult;
    }

}
