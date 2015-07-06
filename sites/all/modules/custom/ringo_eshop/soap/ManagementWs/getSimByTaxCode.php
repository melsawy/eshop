<?php

class getSimByTaxCode
{

    /**
     * @var getAllSimByTaxCodeRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param getAllSimByTaxCodeRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
