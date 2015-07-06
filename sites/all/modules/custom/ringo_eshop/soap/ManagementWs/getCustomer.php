<?php

class getCustomer
{

    /**
     * @var getCustomerByIdRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param getCustomerByIdRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
