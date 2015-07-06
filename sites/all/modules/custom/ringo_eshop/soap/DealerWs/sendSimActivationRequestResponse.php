<?php

class sendSimActivationRequestResponse
{

    /**
     * @var simActivationResponse $return
     * @access public
     */
    public $return = null;

    /**
     * @param simActivationResponse $return
     * @access public
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

}
