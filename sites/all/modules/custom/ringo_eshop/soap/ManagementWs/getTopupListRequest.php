<?php

include_once('requestImpl.php');

class getTopupListRequest extends requestImpl
{

    /**
     * @var int $beginDate
     * @access public
     */
    public $beginDate = null;

    /**
     * @var int $endDate
     * @access public
     */
    public $endDate = null;

    /**
     * @var int $maxList
     * @access public
     */
    public $maxList = null;

    /**
     * @var string $msisdn
     * @access public
     */
    public $msisdn = null;

    /**
     * @var int $order
     * @access public
     */
    public $order = null;

    /**
     * @param requestParameter $requestParam
     * @param int $beginDate
     * @param int $endDate
     * @param int $maxList
     * @param string $msisdn
     * @param int $order
     * @access public
     */
    public function __construct($requestParam, $beginDate, $endDate, $maxList, $msisdn, $order)
    {
      parent::__construct($requestParam);
      $this->beginDate = $beginDate;
      $this->endDate = $endDate;
      $this->maxList = $maxList;
      $this->msisdn = $msisdn;
      $this->order = $order;
    }

}
