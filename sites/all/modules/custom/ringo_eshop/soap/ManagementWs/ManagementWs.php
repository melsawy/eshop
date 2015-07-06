<?php

include_once('getInfoSimByMSISDN.php');
include_once('getSimInfoByMsisdnRequest.php');
include_once('requestImpl.php');
include_once('requestParameter.php');
include_once('getInfoSimByMSISDNResponse.php');
include_once('getSimInfoByMsisdnResponse.php');
include_once('responseImpl.php');
include_once('rContainer.php');
include_once('modelGeneric.php');
include_once('responseResult.php');
include_once('localeCustom.php');
include_once('getRechargesList.php');
include_once('getTopupListRequest.php');
include_once('getRechargesListResponse.php');
include_once('getToupListResponse.php');
include_once('rContainerRecharges.php');
include_once('getMsisdnStatus.php');
include_once('getMsisdnDetailRequest.php');
include_once('getMsisdnStatusResponse.php');
include_once('getMsisdnDetailResponse.php');
include_once('msisdnStatusResponse.php');
include_once('basicNumasResponse.php');
include_once('getMainBagCredit.php');
include_once('getSimCreditRequest.php');
include_once('getMainBagCreditResponse.php');
include_once('getSimCreditResponse.php');
include_once('getCustomer.php');
include_once('getCustomerByIdRequest.php');
include_once('getCustomerResponse.php');
include_once('getCustomerByIdResponse.php');
include_once('customerResponse.php');
include_once('getSimByTaxCode.php');
include_once('getAllSimByTaxCodeRequest.php');
include_once('getSimByTaxCodeResponse.php');
include_once('getAllSimByTaxCodeResponse.php');
include_once('rContainerMdw.php');
include_once('inputField.php');

class ManagementWs extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'getInfoSimByMSISDN' => '\getInfoSimByMSISDN',
      'getSimInfoByMsisdnRequest' => '\getSimInfoByMsisdnRequest',
      'requestImpl' => '\requestImpl',
      'requestParameter' => '\requestParameter',
      'getInfoSimByMSISDNResponse' => '\getInfoSimByMSISDNResponse',
      'getSimInfoByMsisdnResponse' => '\getSimInfoByMsisdnResponse',
      'responseImpl' => '\responseImpl',
      'rContainer' => '\rContainer',
      'modelGeneric' => '\modelGeneric',
      'responseResult' => '\responseResult',
      'locale' => '\localeCustom',
      'getRechargesList' => '\getRechargesList',
      'getTopupListRequest' => '\getTopupListRequest',
      'getRechargesListResponse' => '\getRechargesListResponse',
      'getToupListResponse' => '\getToupListResponse',
      'rContainerRecharges' => '\rContainerRecharges',
      'getMsisdnStatus' => '\getMsisdnStatus',
      'getMsisdnDetailRequest' => '\getMsisdnDetailRequest',
      'getMsisdnStatusResponse' => '\getMsisdnStatusResponse',
      'getMsisdnDetailResponse' => '\getMsisdnDetailResponse',
      'msisdnStatusResponse' => '\msisdnStatusResponse',
      'basicNumasResponse' => '\basicNumasResponse',
      'getMainBagCredit' => '\getMainBagCredit',
      'getSimCreditRequest' => '\getSimCreditRequest',
      'getMainBagCreditResponse' => '\getMainBagCreditResponse',
      'getSimCreditResponse' => '\getSimCreditResponse',
      'getCustomer' => '\getCustomer',
      'getCustomerByIdRequest' => '\getCustomerByIdRequest',
      'getCustomerResponse' => '\getCustomerResponse',
      'getCustomerByIdResponse' => '\getCustomerByIdResponse',
      'customerResponse' => '\customerResponse',
      'getSimByTaxCode' => '\getSimByTaxCode',
      'getAllSimByTaxCodeRequest' => '\getAllSimByTaxCodeRequest',
      'getSimByTaxCodeResponse' => '\getSimByTaxCodeResponse',
      'getAllSimByTaxCodeResponse' => '\getAllSimByTaxCodeResponse',
      'rContainerMdw' => '\rContainerMdw',
      'inputField' => '\inputField');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'https://94.141.30.42:8443/RingoApi/ManagementWs?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      
      parent::__construct($wsdl, $options);
    }

    /**
     * @param getCustomer $parameters
     * @access public
     * @return getCustomerResponse
     */
    public function getCustomer(getCustomer $parameters)
    {
      return $this->__soapCall('getCustomer', array($parameters));
    }

    /**
     * @param getMsisdnStatus $parameters
     * @access public
     * @return getMsisdnStatusResponse
     */
    public function getMsisdnStatus(getMsisdnStatus $parameters)
    {
      return $this->__soapCall('getMsisdnStatus', array($parameters));
    }

    /**
     * @param getRechargesList $parameters
     * @access public
     * @return getRechargesListResponse
     */
    public function getRechargesList(getRechargesList $parameters)
    {
      return $this->__soapCall('getRechargesList', array($parameters));
    }

    /**
     * @param getMainBagCredit $parameters
     * @access public
     * @return getMainBagCreditResponse
     */
    public function getMainBagCredit(getMainBagCredit $parameters)
    {
      return $this->__soapCall('getMainBagCredit', array($parameters));
    }

    /**
     * @param getInfoSimByMSISDN $parameters
     * @access public
     * @return getInfoSimByMSISDNResponse
     */
    public function getInfoSimByMSISDN(getInfoSimByMSISDN $parameters)
    {
      return $this->__soapCall('getInfoSimByMSISDN', array($parameters));
    }

    /**
     * @param getSimByTaxCode $parameters
     * @access public
     * @return getSimByTaxCodeResponse
     */
    public function getSimByTaxCode(getSimByTaxCode $parameters)
    {
      return $this->__soapCall('getSimByTaxCode', array($parameters));
    }

}
