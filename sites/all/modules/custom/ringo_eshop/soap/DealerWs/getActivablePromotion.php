<?php

class getActivablePromotion
{

    /**
     * @var getActivablePromoRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param getActivablePromoRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
