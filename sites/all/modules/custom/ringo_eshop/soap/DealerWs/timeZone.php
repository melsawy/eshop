<?php

class timeZone
{

    /**
     * @var string $abr
     * @access public
     */
    public $abr = null;

    /**
     * @var agent[] $agentList
     * @access public
     */
    public $agentList = null;

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @var int $offset
     * @access public
     */
    public $offset = null;

    /**
     * @var serviceProvider[] $serviceProviderList
     * @access public
     */
    public $serviceProviderList = null;

    /**
     * @param string $abr
     * @param int $id
     * @param string $name
     * @param int $offset
     * @access public
     */
    public function __construct($abr, $id, $name, $offset)
    {
      $this->abr = $abr;
      $this->id = $id;
      $this->name = $name;
      $this->offset = $offset;
    }

}
