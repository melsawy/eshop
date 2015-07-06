<?php

class getMsisdnStatusResponse
{

    /**
     * @var getMsisdnDetailResponse $return
     * @access public
     */
    public $return = null;

    /**
     * @param getMsisdnDetailResponse $return
     * @access public
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

}
