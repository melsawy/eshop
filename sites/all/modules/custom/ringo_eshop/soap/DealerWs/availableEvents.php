<?php

class availableEvents
{

    /**
     * @var agentActivity[] $agentActivityList
     * @access public
     */
    public $agentActivityList = null;

    /**
     * @var string $eventDescription
     * @access public
     */
    public $eventDescription = null;

    /**
     * @var int $eventId
     * @access public
     */
    public $eventId = null;

    /**
     * @var string $eventName
     * @access public
     */
    public $eventName = null;

    /**
     * @var spAccountActivity[] $spAccountActivityList
     * @access public
     */
    public $spAccountActivityList = null;

    /**
     * @param string $eventDescription
     * @param int $eventId
     * @param string $eventName
     * @access public
     */
    public function __construct($eventDescription, $eventId, $eventName)
    {
      $this->eventDescription = $eventDescription;
      $this->eventId = $eventId;
      $this->eventName = $eventName;
    }

}
