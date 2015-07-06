<?php

class unsubscribePromo
{

    /**
     * @var unsubscribePromotionRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param unsubscribePromotionRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
