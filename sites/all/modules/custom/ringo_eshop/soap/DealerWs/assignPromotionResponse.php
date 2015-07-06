<?php

class assignPromotionResponse
{

    /**
     * @var assignProductResponse $return
     * @access public
     */
    public $return = null;

    /**
     * @param assignProductResponse $return
     * @access public
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

}
