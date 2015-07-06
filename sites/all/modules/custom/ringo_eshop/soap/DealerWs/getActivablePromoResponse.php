<?php

include_once('responseImpl.php');

class getActivablePromoResponse extends responseImpl
{

    /**
     * @var rContainerService $rContainerService
     * @access public
     */
    public $rContainerService = null;

    /**
     * @param responseResult $responseResult
     * @param rContainerService $rContainerService
     * @access public
     */
    public function __construct($responseResult, $rContainerService)
    {
      parent::__construct($responseResult);
      $this->rContainerService = $rContainerService;
    }

}
