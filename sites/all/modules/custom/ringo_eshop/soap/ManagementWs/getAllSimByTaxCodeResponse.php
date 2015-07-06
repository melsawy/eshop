<?php

include_once('responseImpl.php');

class getAllSimByTaxCodeResponse extends responseImpl
{

    /**
     * @var rContainerMdw[] $rContainerArray
     * @access public
     */
    public $rContainerArray = null;

    /**
     * @param responseResult $responseResult
     * @access public
     */
    public function __construct($responseResult)
    {
      parent::__construct($responseResult);
    }

}
