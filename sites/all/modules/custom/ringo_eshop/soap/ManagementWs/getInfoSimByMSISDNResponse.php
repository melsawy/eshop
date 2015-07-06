<?php

class getInfoSimByMSISDNResponse
{

    /**
     * @var getSimInfoByMsisdnResponse $return
     * @access public
     */
    public $return = null;

    /**
     * @param getSimInfoByMsisdnResponse $return
     * @access public
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

}
