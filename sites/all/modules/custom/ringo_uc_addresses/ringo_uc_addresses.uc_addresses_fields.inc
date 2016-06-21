<?php

/**
 * @file
 * In this file fields and field handlers for Ubercart Addresses are registered.
 */

/**
 * Implements hook_uc_addresses_field_handlers().
 */
function ringo_uc_addresses_uc_addresses_field_handlers() {
  $path = drupal_get_path('module', 'ringo_uc_addresses') . '/uc_handlers';
  $info = array();

  $info['RingoUcAddressesUcZoneFieldHandler'] = array(
    'handler' => array(
      'parent' => 'UcAddressesFieldHandler',
      'class' => 'RingoUcAddressesUcZoneFieldHandler',
      'file' => 'RingoUcAddressesUcZoneFieldHandler.class.php',
      'path' => $path,
    ),
  );

  $info['RingoUcAddressesUcCityFieldHandler'] = array(
    'handler' => array(
      'parent' => 'UcAddressesFieldHandler',
      'class' => 'RingoUcAddressesUcCityFieldHandler',
      'file' => 'RingoUcAddressesUcCityFieldHandler.class.php',
      'path' => $path,
    ),
  );

  return $info;
}
