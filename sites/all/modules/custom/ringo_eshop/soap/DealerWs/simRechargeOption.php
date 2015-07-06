<?php

class simRechargeOption
{

    /**
     * @var float $amount
     * @access public
     */
    public $amount = null;

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @param float $amount
     * @param int $id
     * @access public
     */
    public function __construct($amount, $id)
    {
      $this->amount = $amount;
      $this->id = $id;
    }

}
