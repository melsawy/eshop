<?php

class getAllProductOffering
{

    /**
     * @var getProductOfferingRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param getProductOfferingRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
