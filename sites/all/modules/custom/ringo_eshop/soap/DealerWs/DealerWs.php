<?php

include_once('sendSimActivationRequest.php');
include_once('simActivationRequest.php');
include_once('requestImpl.php');
include_once('subscriberProductOffering.php');
include_once('bundleBucketMap.php');
include_once('bucketType.php');
include_once('bundleType.php');
include_once('bundleRegionMap.php');
include_once('region.php');
include_once('simActivation.php');
include_once('simStatus.php');
include_once('agent.php');
include_once('agentActivity.php');
include_once('agentPaymentType.php');
include_once('availableEvents.php');
include_once('spAccountActivity.php');
include_once('serviceProvider.php');
include_once('serviceProviderType.php');
include_once('rateBuySell.php');
include_once('timeZone.php');
include_once('user.php');
include_once('partition.php');
include_once('spAccountActivityType.php');
include_once('agentTemplate.php');
include_once('agentDocs.php');
include_once('subscriberDocument.php');
include_once('fileType.php');
include_once('requestParameter.php');
include_once('sendSimActivationRequestResponse.php');
include_once('simActivationResponse.php');
include_once('responseImpl.php');
include_once('responseResult.php');
include_once('localeCustom.php');
include_once('getActivablePromotion.php');
include_once('getActivablePromoRequest.php');
include_once('getActivablePromotionResponse.php');
include_once('getActivablePromoResponse.php');
include_once('rContainerService.php');
include_once('modelGeneric.php');
include_once('getMsisdnPromoBags.php');
include_once('msisdnPromoBagsRequest.php');
include_once('getMsisdnPromoBagsResponse.php');
include_once('msisdnPromoBagsResponse.php');
include_once('rContainerPromoBags.php');
include_once('subscriptionService.php');
include_once('uploadSimDocument.php');
include_once('uploadDocumentRequest.php');
include_once('uploadSimDocumentResponse.php');
include_once('uploadDocumentResponse.php');
include_once('assignPromotion.php');
include_once('assignProductRequest.php');
include_once('assignPromotionResponse.php');
include_once('assignProductResponse.php');
include_once('beforeRequest.php');
include_once('beforeRequestResponse.php');
include_once('agentLogin.php');
include_once('dealerLoginRequest.php');
include_once('agentLoginResponse.php');
include_once('dealerLoginRsp.php');
include_once('agentSummary.php');
include_once('simRechargeOption.php');
include_once('rechargeSim.php');
include_once('rechargeRequest.php');
include_once('rechargeSimResponse.php');
include_once('rechargeResponse.php');
include_once('getAllProductOffering.php');
include_once('getProductOfferingRequest.php');
include_once('getAllProductOfferingResponse.php');
include_once('getProductOfferingResponse.php');
include_once('afterRequest.php');
include_once('afterRequestResponse.php');
include_once('unsubscribePromo.php');
include_once('unsubscribePromotionRequest.php');
include_once('unsubscribePromoResponse.php');
include_once('unsubscribePromotionResponse.php');

class DealerWs extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'sendSimActivationRequest' => '\sendSimActivationRequest',
      'simActivationRequest' => '\simActivationRequest',
      'requestImpl' => '\requestImpl',
      'subscriberProductOffering' => '\subscriberProductOffering',
      'bundleBucketMap' => '\bundleBucketMap',
      'bucketType' => '\bucketType',
      'bundleType' => '\bundleType',
      'bundleRegionMap' => '\bundleRegionMap',
      'region' => '\region',
      'simActivation' => '\simActivation',
      'simStatus' => '\simStatus',
      'agent' => '\agent',
      'agentActivity' => '\agentActivity',
      'agentPaymentType' => '\agentPaymentType',
      'availableEvents' => '\availableEvents',
      'spAccountActivity' => '\spAccountActivity',
      'serviceProvider' => '\serviceProvider',
      'serviceProviderType' => '\serviceProviderType',
      'rateBuySell' => '\rateBuySell',
      'timeZone' => '\timeZone',
      'user' => '\user',
      'partition' => '\partition',
      'spAccountActivityType' => '\spAccountActivityType',
      'agentTemplate' => '\agentTemplate',
      'agentDocs' => '\agentDocs',
      'subscriberDocument' => '\subscriberDocument',
      'fileType' => '\fileType',
      'requestParameter' => '\requestParameter',
      'sendSimActivationRequestResponse' => '\sendSimActivationRequestResponse',
      'simActivationResponse' => '\simActivationResponse',
      'responseImpl' => '\responseImpl',
      'responseResult' => '\responseResult',
      'locale' => '\localeCustom',
      'getActivablePromotion' => '\getActivablePromotion',
      'getActivablePromoRequest' => '\getActivablePromoRequest',
      'getActivablePromotionResponse' => '\getActivablePromotionResponse',
      'getActivablePromoResponse' => '\getActivablePromoResponse',
      'rContainerService' => '\rContainerService',
      'modelGeneric' => '\modelGeneric',
      'getMsisdnPromoBags' => '\getMsisdnPromoBags',
      'msisdnPromoBagsRequest' => '\msisdnPromoBagsRequest',
      'getMsisdnPromoBagsResponse' => '\getMsisdnPromoBagsResponse',
      'msisdnPromoBagsResponse' => '\msisdnPromoBagsResponse',
      'rContainerPromoBags' => '\rContainerPromoBags',
      'subscriptionService' => '\subscriptionService',
      'uploadSimDocument' => '\uploadSimDocument',
      'uploadDocumentRequest' => '\uploadDocumentRequest',
      'uploadSimDocumentResponse' => '\uploadSimDocumentResponse',
      'uploadDocumentResponse' => '\uploadDocumentResponse',
      'assignPromotion' => '\assignPromotion',
      'assignProductRequest' => '\assignProductRequest',
      'assignPromotionResponse' => '\assignPromotionResponse',
      'assignProductResponse' => '\assignProductResponse',
      'beforeRequest' => '\beforeRequest',
      'beforeRequestResponse' => '\beforeRequestResponse',
      'agentLogin' => '\agentLogin',
      'dealerLoginRequest' => '\dealerLoginRequest',
      'agentLoginResponse' => '\agentLoginResponse',
      'dealerLoginRsp' => '\dealerLoginRsp',
      'agentSummary' => '\agentSummary',
      'simRechargeOption' => '\simRechargeOption',
      'rechargeSim' => '\rechargeSim',
      'rechargeRequest' => '\rechargeRequest',
      'rechargeSimResponse' => '\rechargeSimResponse',
      'rechargeResponse' => '\rechargeResponse',
      'getAllProductOffering' => '\getAllProductOffering',
      'getProductOfferingRequest' => '\getProductOfferingRequest',
      'getAllProductOfferingResponse' => '\getAllProductOfferingResponse',
      'getProductOfferingResponse' => '\getProductOfferingResponse',
      'afterRequest' => '\afterRequest',
      'afterRequestResponse' => '\afterRequestResponse',
      'unsubscribePromo' => '\unsubscribePromo',
      'unsubscribePromotionRequest' => '\unsubscribePromotionRequest',
      'unsubscribePromoResponse' => '\unsubscribePromoResponse',
      'unsubscribePromotionResponse' => '\unsubscribePromotionResponse');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'https://94.141.30.42:8443/RingoApi/DealerWs?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      
      parent::__construct($wsdl, $options);
    }

    /**
     * @param unsubscribePromo $parameters
     * @access public
     * @return unsubscribePromoResponse
     */
    public function unsubscribePromo(unsubscribePromo $parameters)
    {
      return $this->__soapCall('unsubscribePromo', array($parameters));
    }

    /**
     * @param getActivablePromotion $parameters
     * @access public
     * @return getActivablePromotionResponse
     */
    public function getActivablePromotion(getActivablePromotion $parameters)
    {
      return $this->__soapCall('getActivablePromotion', array($parameters));
    }

    /**
     * @param getMsisdnPromoBags $parameters
     * @access public
     * @return getMsisdnPromoBagsResponse
     */
    public function getMsisdnPromoBags(getMsisdnPromoBags $parameters)
    {
      return $this->__soapCall('getMsisdnPromoBags', array($parameters));
    }

    /**
     * @param uploadSimDocument $parameters
     * @access public
     * @return uploadSimDocumentResponse
     */
    public function uploadSimDocument(uploadSimDocument $parameters)
    {
      return $this->__soapCall('uploadSimDocument', array($parameters));
    }

    /**
     * @param rechargeSim $parameters
     * @access public
     * @return rechargeSimResponse
     */
    public function rechargeSim(rechargeSim $parameters)
    {
      return $this->__soapCall('rechargeSim', array($parameters));
    }

    /**
     * @param agentLogin $parameters
     * @access public
     * @return agentLoginResponse
     */
    public function agentLogin(agentLogin $parameters)
    {
      return $this->__soapCall('agentLogin', array($parameters));
    }

    /**
     * @param afterRequest $parameters
     * @access public
     * @return afterRequestResponse
     */
    public function afterRequest(afterRequest $parameters)
    {
      return $this->__soapCall('afterRequest', array($parameters));
    }

    /**
     * @param beforeRequest $parameters
     * @access public
     * @return beforeRequestResponse
     */
    public function beforeRequest(beforeRequest $parameters)
    {
      return $this->__soapCall('beforeRequest', array($parameters));
    }

    /**
     * @param assignPromotion $parameters
     * @access public
     * @return assignPromotionResponse
     */
    public function assignPromotion(assignPromotion $parameters)
    {
      return $this->__soapCall('assignPromotion', array($parameters));
    }

    /**
     * @param sendSimActivationRequest $parameters
     * @access public
     * @return sendSimActivationRequestResponse
     */
    public function sendSimActivationRequest(sendSimActivationRequest $parameters)
    {
      return $this->__soapCall('sendSimActivationRequest', array($parameters));
    }

    /**
     * @param getAllProductOffering $parameters
     * @access public
     * @return getAllProductOfferingResponse
     */
    public function getAllProductOffering(getAllProductOffering $parameters)
    {
      return $this->__soapCall('getAllProductOffering', array($parameters));
    }

}
