<?php

class user
{

    /**
     * @var agentActivity[] $agentActivityList
     * @access public
     */
    public $agentActivityList = null;

    /**
     * @var int $deletedFlag
     * @access public
     */
    public $deletedFlag = null;

    /**
     * @var string $email
     * @access public
     */
    public $email = null;

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @var dateTime $insertionDate
     * @access public
     */
    public $insertionDate = null;

    /**
     * @var boolean $isAdmin
     * @access public
     */
    public $isAdmin = null;

    /**
     * @var partition $partition
     * @access public
     */
    public $partition = null;

    /**
     * @var int $partitionId
     * @access public
     */
    public $partitionId = null;

    /**
     * @var string $password
     * @access public
     */
    public $password = null;

    /**
     * @var int $roleId
     * @access public
     */
    public $roleId = null;

    /**
     * @var serviceProvider $serviceProvider
     * @access public
     */
    public $serviceProvider = null;

    /**
     * @var int $serviceProviderId
     * @access public
     */
    public $serviceProviderId = null;

    /**
     * @var spAccountActivity[] $spAccountActivityList
     * @access public
     */
    public $spAccountActivityList = null;

    /**
     * @var boolean $status
     * @access public
     */
    public $status = null;

    /**
     * @var string $username
     * @access public
     */
    public $username = null;

    /**
     * @param int $deletedFlag
     * @param string $email
     * @param int $id
     * @param dateTime $insertionDate
     * @param boolean $isAdmin
     * @param partition $partition
     * @param int $partitionId
     * @param string $password
     * @param int $roleId
     * @param serviceProvider $serviceProvider
     * @param int $serviceProviderId
     * @param boolean $status
     * @param string $username
     * @access public
     */
    public function __construct($deletedFlag, $email, $id, $insertionDate, $isAdmin, $partition, $partitionId, $password, $roleId, $serviceProvider, $serviceProviderId, $status, $username)
    {
      $this->deletedFlag = $deletedFlag;
      $this->email = $email;
      $this->id = $id;
      $this->insertionDate = $insertionDate;
      $this->isAdmin = $isAdmin;
      $this->partition = $partition;
      $this->partitionId = $partitionId;
      $this->password = $password;
      $this->roleId = $roleId;
      $this->serviceProvider = $serviceProvider;
      $this->serviceProviderId = $serviceProviderId;
      $this->status = $status;
      $this->username = $username;
    }

}
