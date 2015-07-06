<?php

include_once('responseImpl.php');

class getCustomerByIdResponse extends responseImpl
{

    /**
     * @var customerResponse $customerResp
     * @access public
     */
    public $customerResp = null;

    /**
     * @param responseResult $responseResult
     * @param customerResponse $customerResp
     * @access public
     */
    public function __construct($responseResult, $customerResp)
    {
      parent::__construct($responseResult);
      $this->customerResp = $customerResp;
    }

}
