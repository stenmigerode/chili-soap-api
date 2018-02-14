<?php

namespace Chili\WebServices;

class SetAssetDirectories
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

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
     * @param string $userAssetDirectory
     * @param string $userGroupAssetDirectory
     * @param string $documentAssetDirectory
     * @access public
     */
    public function __construct($apiKey, $userAssetDirectory, $userGroupAssetDirectory, $documentAssetDirectory)
    {
      $this->apiKey = $apiKey;
      $this->userAssetDirectory = $userAssetDirectory;
      $this->userGroupAssetDirectory = $userGroupAssetDirectory;
      $this->documentAssetDirectory = $documentAssetDirectory;
    }

}
