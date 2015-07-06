<?php

class getMainBagCreditResponse
{

    /**
     * @var getSimCreditResponse $return
     * @access public
     */
    public $return = null;

    /**
     * @param getSimCreditResponse $return
     * @access public
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

}
