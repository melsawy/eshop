<?php

include_once('basicNumasResponse.php');

class msisdnStatusResponse extends basicNumasResponse
{

    /**
     * @var anySimpleType $activationDate
     * @access public
     */
    public $activationDate = null;

    /**
     * @var int $customerId
     * @access public
     */
    public $customerId = null;

    /**
     * @var string $iccid
     * @access public
     */
    public $iccid = null;

    /**
     * @var anySimpleType $mnpStartDate
     * @access public
     */
    public $mnpStartDate = null;

    /**
     * @var string $status
     * @access public
     */
    public $status = null;

    /**
     * @var int $token
     * @access public
     */
    public $token = null;

    /**
     * @param int $code
     * @param string $message
     * @param anySimpleType $activationDate
     * @param int $customerId
     * @param string $iccid
     * @param anySimpleType $mnpStartDate
     * @param string $status
     * @param int $token
     * @access public
     */
    public function __construct($code, $message, $activationDate, $customerId, $iccid, $mnpStartDate, $status, $token)
    {
      parent::__construct($code, $message);
      $this->activationDate = $activationDate;
      $this->customerId = $customerId;
      $this->iccid = $iccid;
      $this->mnpStartDate = $mnpStartDate;
      $this->status = $status;
      $this->token = $token;
    }

}
