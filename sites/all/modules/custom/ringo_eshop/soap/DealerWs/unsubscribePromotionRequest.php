<?php

include_once('requestImpl.php');

class unsubscribePromotionRequest extends requestImpl
{

    /**
     * @var string $msisdn
     * @access public
     */
    public $msisdn = null;

    /**
     * @var string $promotion
     * @access public
     */
    public $promotion = null;

    /**
     * @param requestParameter $requestParam
     * @param string $msisdn
     * @param string $promotion
     * @access public
     */
    public function __construct($requestParam, $msisdn, $promotion)
    {
      parent::__construct($requestParam);
      $this->msisdn = $msisdn;
      $this->promotion = $promotion;
    }

}
