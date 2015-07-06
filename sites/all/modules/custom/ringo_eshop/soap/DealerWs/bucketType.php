<?php

class bucketType
{

    /**
     * @var string $abr
     * @access public
     */
    public $abr = null;

    /**
     * @var int $bucketTypeId
     * @access public
     */
    public $bucketTypeId = null;

    /**
     * @var bundleBucketMap[] $bundleBucketMapList
     * @access public
     */
    public $bundleBucketMapList = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @param string $abr
     * @param int $bucketTypeId
     * @param string $name
     * @access public
     */
    public function __construct($abr, $bucketTypeId, $name)
    {
      $this->abr = $abr;
      $this->bucketTypeId = $bucketTypeId;
      $this->name = $name;
    }

}
