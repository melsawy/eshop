<?php

class agentSummary
{

    /**
     * @var int $activeCount
     * @access public
     */
    public $activeCount = null;

    /**
     * @var int $canceledCount
     * @access public
     */
    public $canceledCount = null;

    /**
     * @var int $pendingCount
     * @access public
     */
    public $pendingCount = null;

    /**
     * @param int $activeCount
     * @param int $canceledCount
     * @param int $pendingCount
     * @access public
     */
    public function __construct($activeCount, $canceledCount, $pendingCount)
    {
      $this->activeCount = $activeCount;
      $this->canceledCount = $canceledCount;
      $this->pendingCount = $pendingCount;
    }

}
