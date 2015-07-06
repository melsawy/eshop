<?php

class bundleType
{

    /**
     * @var bundleBucketMap[] $bundleBucketMapList
     * @access public
     */
    public $bundleBucketMapList = null;

    /**
     * @var bundleRegionMap[] $bundleRegionMapList
     * @access public
     */
    public $bundleRegionMapList = null;

    /**
     * @var int $bundleTYPEID
     * @access public
     */
    public $bundleTYPEID = null;

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @var string $unit
     * @access public
     */
    public $unit = null;

    /**
     * @param int $bundleTYPEID
     * @param string $description
     * @param string $name
     * @param string $unit
     * @access public
     */
    public function __construct($bundleTYPEID, $description, $name, $unit)
    {
      $this->bundleTYPEID = $bundleTYPEID;
      $this->description = $description;
      $this->name = $name;
      $this->unit = $unit;
    }

}
