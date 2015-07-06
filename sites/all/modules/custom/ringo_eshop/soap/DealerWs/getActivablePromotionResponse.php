<?php

class getActivablePromotionResponse
{

    /**
     * @var getActivablePromoResponse $return
     * @access public
     */
    public $return = null;

    /**
     * @param getActivablePromoResponse $return
     * @access public
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

}
