<?php

class assignPromotion
{

    /**
     * @var assignProductRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param assignProductRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
