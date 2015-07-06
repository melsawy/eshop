<?php

include_once('requestImpl.php');

class getCustomerByIdRequest extends requestImpl
{

    /**
     * @var int $customerId
     * @access public
     */
    public $customerId = null;

    /**
     * @param requestParameter $requestParam
     * @param int $customerId
     * @access public
     */
    public function __construct($requestParam, $customerId)
    {
      parent::__construct($requestParam);
      $this->customerId = $customerId;
    }

}
