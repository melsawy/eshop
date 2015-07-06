<?php

class simStatus
{

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @var simActivation[] $simActivationList
     * @access public
     */
    public $simActivationList = null;

    /**
     * @var int $simStatusId
     * @access public
     */
    public $simStatusId = null;

    /**
     * @param string $description
     * @param int $simStatusId
     * @access public
     */
    public function __construct($description, $simStatusId)
    {
      $this->description = $description;
      $this->simStatusId = $simStatusId;
    }

}
