<?php

class region
{

    /**
     * @var bundleRegionMap[] $bundleRegionMapList
     * @access public
     */
    public $bundleRegionMapList = null;

    /**
     * @var int $countryId
     * @access public
     */
    public $countryId = null;

    /**
     * @var int $partitionId
     * @access public
     */
    public $partitionId = null;

    /**
     * @var string $regionDescription
     * @access public
     */
    public $regionDescription = null;

    /**
     * @var int $regionId
     * @access public
     */
    public $regionId = null;

    /**
     * @var int $status
     * @access public
     */
    public $status = null;

    /**
     * @param int $countryId
     * @param int $partitionId
     * @param string $regionDescription
     * @param int $regionId
     * @param int $status
     * @access public
     */
    public function __construct($countryId, $partitionId, $regionDescription, $regionId, $status)
    {
      $this->countryId = $countryId;
      $this->partitionId = $partitionId;
      $this->regionDescription = $regionDescription;
      $this->regionId = $regionId;
      $this->status = $status;
    }

}
