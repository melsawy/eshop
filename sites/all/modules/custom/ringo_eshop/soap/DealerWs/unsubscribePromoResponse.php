<?php

class unsubscribePromoResponse
{

    /**
     * @var unsubscribePromotionResponse $return
     * @access public
     */
    public $return = null;

    /**
     * @param unsubscribePromotionResponse $return
     * @access public
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

}
