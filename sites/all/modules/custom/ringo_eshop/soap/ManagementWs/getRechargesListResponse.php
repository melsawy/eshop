<?php

class getRechargesListResponse
{

    /**
     * @var getToupListResponse $return
     * @access public
     */
    public $return = null;

    /**
     * @param getToupListResponse $return
     * @access public
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

}
