<?php

class getAllProductOfferingResponse
{

    /**
     * @var getProductOfferingResponse $return
     * @access public
     */
    public $return = null;

    /**
     * @param getProductOfferingResponse $return
     * @access public
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

}
