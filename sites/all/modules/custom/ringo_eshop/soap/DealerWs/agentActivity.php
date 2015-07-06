<?php

class agentActivity
{

    /**
     * @var agent $agent
     * @access public
     */
    public $agent = null;

    /**
     * @var int $agentActivityId
     * @access public
     */
    public $agentActivityId = null;

    /**
     * @var int $agentId
     * @access public
     */
    public $agentId = null;

    /**
     * @var agentPaymentType $agentPaymentType
     * @access public
     */
    public $agentPaymentType = null;

    /**
     * @var int $agentPaymentTypeId
     * @access public
     */
    public $agentPaymentTypeId = null;

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
     * @var user $guiUser
     * @access public
     */
    public $guiUser = null;

    /**
     * @var int $guiUserId
     * @access public
     */
    public $guiUserId = null;

    /**
     * @var dateTime $paymentDate
     * @access public
     */
    public $paymentDate = null;

    /**
     * @param agent $agent
     * @param int $agentActivityId
     * @param int $agentId
     * @param agentPaymentType $agentPaymentType
     * @param int $agentPaymentTypeId
     * @param float $amount
     * @param float $balanceAfter
     * @param float $balanceBefore
     * @param string $description
     * @param availableEvents $event
     * @param int $eventId
     * @param user $guiUser
     * @param int $guiUserId
     * @param dateTime $paymentDate
     * @access public
     */
    public function __construct($agent, $agentActivityId, $agentId, $agentPaymentType, $agentPaymentTypeId, $amount, $balanceAfter, $balanceBefore, $description, $event, $eventId, $guiUser, $guiUserId, $paymentDate)
    {
      $this->agent = $agent;
      $this->agentActivityId = $agentActivityId;
      $this->agentId = $agentId;
      $this->agentPaymentType = $agentPaymentType;
      $this->agentPaymentTypeId = $agentPaymentTypeId;
      $this->amount = $amount;
      $this->balanceAfter = $balanceAfter;
      $this->balanceBefore = $balanceBefore;
      $this->description = $description;
      $this->event = $event;
      $this->eventId = $eventId;
      $this->guiUser = $guiUser;
      $this->guiUserId = $guiUserId;
      $this->paymentDate = $paymentDate;
    }

}
