<?php
/**
 * @file
 * All api call to ringo should be in this file to be easily replaced later.
 */


define('RINGO_BASE_API_USERNAME', 'webApiAgent');
define('RINGO_BASE_API_PASSWORD', '-7fs.81QA');
define('RINGO_BASE_API_DEBUG_ENABLED', 1);

// AM: this is unsafe, replace this with the proper code to generate the crypted
// password.
define('RINGO_BASE_API_ENCODED_PASSWORD', '1000:5ba7da2406cba583b4d7c6476393b019f3ce9e237dcff4ee:5287ab08d49324d80427989bc1fa588ae560d92a26e634b6');

/**
 * Create a request parameter object.
 *
 * @return \requestParameter
 *   request parameter object with username, password, email included.
 */
function get_request_parameter() {

  // $encoded_password = create_hash(RINGO_BASE_API_PASSWORD);
  $encoded_password = RINGO_BASE_API_ENCODED_PASSWORD;

  $client_id = '13';
  $client_ip = ip_address();
  $token = '?';

  return new requestParameter($encoded_password, RINGO_BASE_API_USERNAME, $client_id, $client_ip, $token);
}


/**
 * Get dealer service object.
 */
function get_dealer_service() {
  include_once drupal_get_path('module', 'ringo_eshop') . '/soap/DealerWs/DealerWs.php';

  return new \DealerWs(array('trace' => RINGO_BASE_API_DEBUG_ENABLED));
}

/**
 * Get management service object.
 */
function get_management_service() {
  include_once drupal_get_path('module', 'ringo_eshop') . '/soap/ManagementWs/ManagementWs.php';

  return new \ManagementWs(array('trace' => RINGO_BASE_API_DEBUG_ENABLED));
}


/**
 * Get all product offerings (national and international bundles).
 *
 * this function isn't complete yet, we should process the result before
 * sending it back.
 *
 * @param bool $reset
 *   skip cache and fetch data from endpoint.
 *
 * @return \getProductOfferingResponse
 *   the response object.
 */
function ringo_api_get_all_product_offerings($reset = FALSE) {
  $result = array();
  $cid = 'all_product_offerings';

  if (!$reset && $cache = cache_get($cid)) {
    $result = $cache->data;
  }
  else {
    $service = get_dealer_service();

    $auth_params = get_request_parameter();
    $product_offering_params = new getProductOfferingRequest($auth_params, NULL, NULL, NULL);
    $request = new \getAllProductOffering($product_offering_params);

    $response = $service->getAllProductOffering($request);

    $result = $response->return;

    cache_set($cid, $result, 'cache', RINGO_BASE_CACHE_RINGO_ENDPOINTS);
  }

  return $result;
}


/**
 * Get customer data from Ringo by id.
 *
 * @param string $customer_id
 *   the customer id in ringo.
 *
 * @return bool|\customerResponse
 *   the customer data if retrieved, FALSE otherwise.
 */
function ringo_api_get_customer($customer_id) {
  $service = get_management_service();

  $auth_params = get_request_parameter();
  $get_customer_params = new getCustomerByIdRequest($auth_params, $customer_id);
  $request = new \getCustomer($get_customer_params);

  $response = $service->getCustomer($request);

  if (isset($response->return->customerResp) && is_object($response->return->customerResp)) {
    return $response->return->customerResp;
  }

  return FALSE;
}


/**
 * Get customer id in Ringo using the phone number.
 *
 * @param string $mobile_number
 *   the customer mobile number
 */
function ringo_api_get_customer_id($mobile_number) {
  $service = get_management_service();

  $auth_params = get_request_parameter();
  $msisdn_status_params = new getMsisdnDetailRequest($auth_params, $mobile_number);
  $request = new \getMsisdnStatus($msisdn_status_params);

  $response = $service->getMsisdnStatus($request);

  if (isset($response->return->msisdnStatusResponse->customerId)) {
    return $response->return->msisdnStatusResponse->customerId;
  }

  return FALSE;
}


/**
 * Get all customer mobile numbers by tax code.
 *
 * TODO finish this.
 *
 * @param string $tax_code
 *   the customer tax code.
 *
 * return array
 *   all customer mobile numbers.
 */
function ringo_api_get_all_mobile_numbers($tax_code) {
  $service = get_management_service();

  $auth_params = get_request_parameter();
  $get_sim_params = new getAllSimByTaxCodeRequest($auth_params, 1, $tax_code);
  $request = new \getSimByTaxCode($get_sim_params);

  $response = $service->getSimByTaxCode($request);

//  var_dump($service->__getLastRequest());
//  var_dump($service->__getLastResponse());
//  dpm($response->return);

  return $response;
}


/**
 * Get all bundles for a mobile number.
 *
 * @param string $mobile_number
 *   the mobile number to fetch data for.
 *
 * @return \msisdnPromoBagsResponse
 *   the mobile number promotions
 */
function ringo_api_get_mobile_number_current_promotions($mobile_number) {
  $service = get_dealer_service();

  $auth_params = get_request_parameter();
  $get_mobile_bundles_params = new msisdnPromoBagsRequest($auth_params, $mobile_number);
  $request = new \getMsisdnPromoBags($get_mobile_bundles_params);

  $response = $service->getMsisdnPromoBags($request);

  return $response->return;
}


function ringo_api_assign_promotion($mobile, $voice, $sms, $data, $int) {
  $service = get_dealer_service();

  $auth_params = get_request_parameter();
  $product_offering = new subscriberProductOffering($data, $int, $sms, $voice);
  $assign_promotion_params = new assignProductRequest($auth_params, $mobile, $product_offering);
  $request = new \assignPromotion($assign_promotion_params);

  $response = $service->assignPromotion($request);

//  dpm($service->__getLastRequest());
//  dpm($service->__getLastResponse());
  drupal_set_message(t($response->return->responseResult->description));

  return $response->return;
}

function ringo_api_unsubscribe_promo($mobile, $promotion) {
  $service = get_dealer_service();

  $auth_params = get_request_parameter();
  $unsubscribe_promo_params = new unsubscribePromotionRequest($auth_params, $mobile, $promotion);
  $request = new \unsubscribePromo($unsubscribe_promo_params);

  $response = $service->unsubscribePromo($request);

  drupal_set_message(t($response->return->responseResult->description));
//  var_dump($service->__getLastResponse());
//  var_dump($response);

  return $response->return;
}

function ringo_api_recharge_sim($mobile, $amount) {
  $service = get_dealer_service();

  $auth_params = get_request_parameter();
  $recharge_sim_params = new rechargeRequest($auth_params, $amount, $mobile);
  $request = new \rechargeSim($recharge_sim_params);

  $response = $service->rechargeSim($request);

  watchdog('API-RECHARGE-RESPONSE', $response->return->responseResult->description);
  //  dpm($service->__getLastRequest());
  //  dpm($service->__getLastResponse());
  //  dpm($response);

  return $response->return;
}


function ringo_api_topup_history($mobile) {
  $service = get_management_service();

  $auth_params = get_request_parameter();
  $recharge_list_params = new getTopupListRequest($auth_params, strtotime("first day of previous month"), strtotime('now'), 20, $mobile, '?');
  $recharge_list_request = new \getRechargesList($recharge_list_params);

  $response = $service->getRechargesList($recharge_list_request);

//  dpm($service->__getLastRequest());
//  dpm($response);

  return $response->return;
}


