<?php

class requestParameter
{

    /**
     * @var string $apiPassword
     * @access public
     */
    public $apiPassword = null;

    /**
     * @var string $apiUserName
     * @access public
     */
    public $apiUserName = null;

    /**
     * @var string $bundleList
     * @access public
     */
    public $bundleList = null;

    /**
     * @var string $clientId
     * @access public
     */
    public $clientId = null;

    /**
     * @var string $clientIp
     * @access public
     */
    public $clientIp = null;

    /**
     * @var string $localeId
     * @access public
     */
    public $localeId = null;

    /**
     * @var string $token
     * @access public
     */
    public $token = null;

    /**
     * @param string $apiPassword
     * @param string $apiUserName
     * @param string $bundleList
     * @param string $clientId
     * @param string $clientIp
     * @param string $localeId
     * @param string $token
     * @access public
     */
    public function __construct($apiPassword, $apiUserName, $bundleList, $clientId, $clientIp, $localeId, $token)
    {
      $this->apiPassword = $apiPassword;
      $this->apiUserName = $apiUserName;
      $this->bundleList = $bundleList;
      $this->clientId = $clientId;
      $this->clientIp = $clientIp;
      $this->localeId = $localeId;
      $this->token = $token;
    }

}
