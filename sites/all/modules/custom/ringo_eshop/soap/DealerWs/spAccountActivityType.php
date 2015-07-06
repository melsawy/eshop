<?php

class spAccountActivityType
{

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @var string $isdisplay
     * @access public
     */
    public $isdisplay = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @var spAccountActivity[] $spAccountActivityList
     * @access public
     */
    public $spAccountActivityList = null;

    /**
     * @param int $id
     * @param string $isdisplay
     * @param string $name
     * @access public
     */
    public function __construct($id, $isdisplay, $name)
    {
      $this->id = $id;
      $this->isdisplay = $isdisplay;
      $this->name = $name;
    }

}
