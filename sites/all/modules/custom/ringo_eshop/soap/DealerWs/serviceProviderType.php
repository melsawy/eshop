<?php

class serviceProviderType
{

    /**
     * @var rateBuySell[] $rateBuySellList
     * @access public
     */
    public $rateBuySellList = null;

    /**
     * @var string $serviceProviderDescription
     * @access public
     */
    public $serviceProviderDescription = null;

    /**
     * @var serviceProvider[] $serviceProviderList
     * @access public
     */
    public $serviceProviderList = null;

    /**
     * @var int $serviceProviderTypeId
     * @access public
     */
    public $serviceProviderTypeId = null;

    /**
     * @param string $serviceProviderDescription
     * @param int $serviceProviderTypeId
     * @access public
     */
    public function __construct($serviceProviderDescription, $serviceProviderTypeId)
    {
      $this->serviceProviderDescription = $serviceProviderDescription;
      $this->serviceProviderTypeId = $serviceProviderTypeId;
    }

}
