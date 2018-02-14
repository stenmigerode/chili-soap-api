<?php

namespace Chili\WebServices;

class DocumentSetConstraints
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $documentID
     * @access public
     */
    public $documentID = null;

    /**
     * @var string $constraintsID
     * @access public
     */
    public $constraintsID = null;

    /**
     * @param string $apiKey
     * @param string $documentID
     * @param string $constraintsID
     * @access public
     */
    public function __construct($apiKey, $documentID, $constraintsID)
    {
      $this->apiKey = $apiKey;
      $this->documentID = $documentID;
      $this->constraintsID = $constraintsID;
    }

}
