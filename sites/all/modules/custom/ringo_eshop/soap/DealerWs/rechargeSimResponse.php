<?php

class rechargeSimResponse
{

    /**
     * @var rechargeResponse $return
     * @access public
     */
    public $return = null;

    /**
     * @param rechargeResponse $return
     * @access public
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

}
