<?php

class getSimByTaxCodeResponse
{

    /**
     * @var getAllSimByTaxCodeResponse $return
     * @access public
     */
    public $return = null;

    /**
     * @param getAllSimByTaxCodeResponse $return
     * @access public
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

}
