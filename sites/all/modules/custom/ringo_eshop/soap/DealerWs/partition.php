<?php

class partition
{

    /**
     * @var string $deletedFlag
     * @access public
     */
    public $deletedFlag = null;

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

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
     * @var string $partitionKey
     * @access public
     */
    public $partitionKey = null;

    /**
     * @var timeZone $timeZone
     * @access public
     */
    public $timeZone = null;

    /**
     * @var int $timeZoneId
     * @access public
     */
    public $timeZoneId = null;

    /**
     * @param string $deletedFlag
     * @param string $description
     * @param int $id
     * @param string $name
     * @param string $partitionKey
     * @param timeZone $timeZone
     * @param int $timeZoneId
     * @access public
     */
    public function __construct($deletedFlag, $description, $id, $name, $partitionKey, $timeZone, $timeZoneId)
    {
      $this->deletedFlag = $deletedFlag;
      $this->description = $description;
      $this->id = $id;
      $this->name = $name;
      $this->partitionKey = $partitionKey;
      $this->timeZone = $timeZone;
      $this->timeZoneId = $timeZoneId;
    }

}
