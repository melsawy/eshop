<?php

class getCustomerResponse
{

    /**
     * @var getCustomerByIdResponse $return
     * @access public
     */
    public $return = null;

    /**
     * @param getCustomerByIdResponse $return
     * @access public
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

}
