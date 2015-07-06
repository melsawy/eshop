<?php

class getMsisdnPromoBags
{

    /**
     * @var msisdnPromoBagsRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param msisdnPromoBagsRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
