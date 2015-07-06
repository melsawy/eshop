<?php

class sendSimActivationRequest
{

    /**
     * @var simActivationRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param simActivationRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
