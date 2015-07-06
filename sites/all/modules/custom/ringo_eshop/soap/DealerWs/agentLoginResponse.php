<?php

class agentLoginResponse
{

    /**
     * @var dealerLoginRsp $return
     * @access public
     */
    public $return = null;

    /**
     * @param dealerLoginRsp $return
     * @access public
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

}
