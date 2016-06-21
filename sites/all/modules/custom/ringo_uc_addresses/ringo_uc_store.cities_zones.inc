<?php
/**
 * @file
 * Store administration forms for mass update zones and cities.
 */

/**
 * Allow users to edit zones and cities.
 *
 * @see uc_country_import_form_submit()
 *
 * @ingroup forms
 */
function ringo_uc_addresses_cities_zones_form($form, &$form_state) {
  $form = array();

  $countries = db_select('uc_countries', 'uc')
    ->fields('uc', array('country_id', 'country_name'))
    ->execute()
    ->fetchAllKeyed();
  uasort($countries, 'strnatcasecmp');

  foreach ($countries as $country_id => $country_name) {
    $fieldset_name = 'country-' . $country_id;
    $form[$fieldset_name] = array(
      '#type' => 'fieldset',
      '#title' => $country_name,
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
      '#tree' => TRUE,
    );

    $zones = db_select('uc_zones', 'uz')
      ->fields('uz', array('zone_id', 'zone_code', 'zone_name'))
      ->condition('zone_country_id', $country_id)
      ->orderBy('zone_name')
      ->execute()
      ->fetchAllAssoc('zone_id');
    $cities = db_select('uc_cities', 'uc')
      ->fields('uc', array('city_id', 'city_zone_id', 'city_name'))
      ->orderBy('city_name')
      ->condition('city_zone_id', array_keys($zones))
      ->execute()
      ->fetchAllAssoc('city_id');

    $form[$fieldset_name]['country'] = array(
      '#type' => 'hidden',
      '#value' => $country_id,
    );

    $zones_default = '';
    foreach ($zones as $zone) {
      $zones_default .= $zone->zone_code . '|' . $zone->zone_name . PHP_EOL;
    }
    $form[$fieldset_name]['zones'] = array(
      '#type' => 'textarea',
      '#title' => t('Zones'),
      '#description' => t('One zone per line. <strong>Key-value pairs MUST be specified as "zone_code|Readable zone name"</strong>. Example: MI|Milano'),
      '#default_value' => $zones_default,
    );

    $cities_default = '';
    foreach ($cities as $city) {
      $cities_default .= $zones[$city->city_zone_id]->zone_code . '|' . $city->city_name . PHP_EOL;
    }
    $form[$fieldset_name]['cities'] = array(
      '#type' => 'textarea',
      '#title' => t('Cities'),
      '#description' => t('One city per line. <strong>Key-value pairs MUST be specified as "zone_code|Readable city name"</strong>. Example: MI|San Sio'),
      '#default_value' => $cities_default,
    );
  }

  $form['save'] = array(
    '#type' => 'submit',
    '#value' => t('Save'),
  );

  return $form;
}

/**
 * Validate zones and cities.
 */
function ringo_uc_addresses_cities_zones_form_validate($form, &$form_state) {
  $values = $form_state['values'];

  foreach ($values as $name => $value) {
    if (!is_array($value) || !isset($value['country'])) {
      continue;
    }

    $valid_zones = $valid_cities = TRUE;
    $zones = _ringo_uc_addresses_are_valid_options($value['zones']);
    $cities = _ringo_uc_addresses_are_valid_options($value['cities']);

    if ($zones === FALSE) {
      form_set_error($name . '][zones', t('Invalid zone options'));
      $valid_zones = FALSE;
    }

    if ($cities === FALSE) {
      form_set_error($name . '][cities', t('Invalid city options'));
      $valid_cities = FALSE;
    }

    if ($valid_zones && $valid_cities) {
      $invalid_zones = array_diff(array_column($cities, 0), array_column($zones, 0));
      if (count($invalid_zones) > 0) {
        form_set_error($name . '][cities', t("Those zones (@zones) aren't defined", array('@zones' => implode(', ', $invalid_zones))));
      }
    }
  }
}

/**
 * Save zones and cities.
 */
function ringo_uc_addresses_cities_zones_form_submit($form, &$form_state) {
  $values = $form_state['values'];

  foreach ($values as $name => $value) {
    if (!is_array($value) || !isset($value['country'])) {
      continue;
    }

    $country_id = $value['country'];
    $zones = _ringo_uc_addresses_are_valid_options($value['zones']);
    $cities = _ringo_uc_addresses_are_valid_options($value['cities']);

    // Add, update zones.
    foreach ($zones as $zone) {
      $code = $zone[0];
      $name = $zone[1];
      db_merge('uc_zones')
        ->key(array('zone_country_id' => $country_id, 'zone_code' => $code))
        ->fields(array(
          'zone_name' => $name,
        ))
        ->execute();
    }

    // Delete the removed zones.
    $zone_codes = array_column($zones, 0);
    db_delete('uc_zones')
      ->condition('zone_code', $zone_codes, 'NOT IN')
      ->condition('zone_country_id', $country_id)
      ->execute();

    // Add, update cities.
    $zone_ids = db_select('uc_zones', 'uz')
      ->fields('uz', array('zone_code', 'zone_id'))
      ->condition('zone_country_id', $country_id)
      ->execute()
      ->fetchAllKeyed();
    foreach ($cities as $city) {
      $zone_code = $city[0];
      $name = $city[1];
      db_merge('uc_cities')
        ->key(array(
          'city_zone_id' => $zone_ids[$zone_code],
          'city_name' => $name,
        ))
        ->execute();
    }

    // Delete the removed cities.
    $city_names = array_column($cities, 1);
    $query = db_delete('uc_cities')
      ->condition('city_zone_id', $zone_ids);
    if (count($cities) > 0) {
      $query->condition('city_name', $city_names, 'NOT IN');
    }
    $query->execute();
  }
}

/**
 * Check if $text represents valid options.
 *
 * @param string $text
 *   Text to check.
 *
 * @return array|bool
 *   array of options if text is valid, boolean false otherwise.
 */
function _ringo_uc_addresses_are_valid_options($text) {
  $rows = array_filter(explode("\n", trim($text)));
  $options = array();

  foreach ($rows as $row) {
    $row = trim($row);

    if (empty($row)) {
      continue;
    }

    $key_value_pair = explode('|', $row);
    if (count($key_value_pair) != 2) {
      return FALSE;
    }

    $options[] = $key_value_pair;
  }

  return $options;
}


if (!function_exists('array_column')) {
  /**
   * Return the values from a single column in the input array.
   */
  function array_column(array $input, $column_key, $key_index = NULL) {
    $array = array();
    foreach ($input as $value) {
      if (!isset($value[$column_key])) {
        trigger_error("Key \"$column_key\" does not exist in array");
        return FALSE;
      }
      if (is_null($key_index)) {
        $array[] = $value[$column_key];
      }
      else {
        if (!isset($value[$key_index])) {
          trigger_error("Key \"$key_index\" does not exist in array");
          return FALSE;
        }
        if (!is_scalar($value[$key_index])) {
          trigger_error("Key \"$key_index\" does not contain scalar value");
          return FALSE;
        }
        $array[$value[$key_index]] = $value[$column_key];
      }
    }
    return $array;
  }
}
