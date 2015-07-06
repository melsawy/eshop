<?php

class getMainBagCredit
{

    /**
     * @var getSimCreditRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param getSimCreditRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
