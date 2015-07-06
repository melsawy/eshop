<?php

include_once('requestImpl.php');

class rechargeRequest extends requestImpl
{

    /**
     * @var float $amount
     * @access public
     */
    public $amount = null;

    /**
     * @var string $phoneNumber
     * @access public
     */
    public $phoneNumber = null;

    /**
     * @param requestParameter $requestParam
     * @param float $amount
     * @param string $phoneNumber
     * @access public
     */
    public function __construct($requestParam, $amount, $phoneNumber)
    {
      parent::__construct($requestParam);
      $this->amount = $amount;
      $this->phoneNumber = $phoneNumber;
    }

}
