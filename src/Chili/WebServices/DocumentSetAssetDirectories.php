<?php

namespace Chili\WebServices;

class DocumentSetAssetDirectories
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
     * @var string $userAssetDirectory
     * @access public
     */
    public $userAssetDirectory = null;

    /**
     * @var string $userGroupAssetDirectory
     * @access public
     */
    public $userGroupAssetDirectory = null;

    /**
     * @var string $documentAssetDirectory
     * @access public
     */
    public $documentAssetDirectory = null;

    /**
     * @param string $apiKey
     * @param string $documentID
     * @param string $userAssetDirectory
     * @param string $userGroupAssetDirectory
     * @param string $documentAssetDirectory
     * @access public
     */
    public function __construct($apiKey, $documentID, $userAssetDirectory, $userGroupAssetDirectory, $documentAssetDirectory)
    {
      $this->apiKey = $apiKey;
      $this->documentID = $documentID;
      $this->userAssetDirectory = $userAssetDirectory;
      $this->userGroupAssetDirectory = $userGroupAssetDirectory;
      $this->documentAssetDirectory = $documentAssetDirectory;
    }

}
