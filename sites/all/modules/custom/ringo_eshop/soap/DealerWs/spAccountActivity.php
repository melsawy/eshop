<?php

class spAccountActivity
{

    /**
     * @var dateTime $activityDate
     * @access public
     */
    public $activityDate = null;

    /**
     * @var float $amount
     * @access public
     */
    public $amount = null;

    /**
     * @var float $balanceAfter
     * @access public
     */
    public $balanceAfter = null;

    /**
     * @var float $balanceBefore
     * @access public
     */
    public $balanceBefore = null;

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @var availableEvents $event
     * @access public
     */
    public $event = null;

    /**
     * @var int $eventId
     * @access public
     */
    public $eventId = null;

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

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
     * @var spAccountActivityType $spActivityType
     * @access public
     */
    public $spActivityType = null;

    /**
     * @var int $spActivityTypeId
     * @access public
     */
    public $spActivityTypeId = null;

    /**
     * @var user $user
     * @access public
     */
    public $user = null;

    /**
     * @var int $userId
     * @access public
     */
    public $userId = null;

    /**
     * @param dateTime $activityDate
     * @param float $amount
     * @param float $balanceAfter
     * @param float $balanceBefore
     * @param string $description
     * @param availableEvents $event
     * @param int $eventId
     * @param int $id
     * @param serviceProvider $serviceProvider
     * @param int $serviceProviderId
     * @param spAccountActivityType $spActivityType
     * @param int $spActivityTypeId
     * @param user $user
     * @param int $userId
     * @access public
     */
    public function __construct($activityDate, $amount, $balanceAfter, $balanceBefore, $description, $event, $eventId, $id, $serviceProvider, $serviceProviderId, $spActivityType, $spActivityTypeId, $user, $userId)
    {
      $this->activityDate = $activityDate;
      $this->amount = $amount;
      $this->balanceAfter = $balanceAfter;
      $this->balanceBefore = $balanceBefore;
      $this->description = $description;
      $this->event = $event;
      $this->eventId = $eventId;
      $this->id = $id;
      $this->serviceProvider = $serviceProvider;
      $this->serviceProviderId = $serviceProviderId;
      $this->spActivityType = $spActivityType;
      $this->spActivityTypeId = $spActivityTypeId;
      $this->user = $user;
      $this->userId = $userId;
    }

}
