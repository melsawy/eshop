<?php

/**
 * Class for the Ubercart zone field.
 */
class RingoUcAddressesUcZoneFieldHandler extends UcAddressesUcZoneFieldHandler {
  /**
   * Implements UcAddressesFieldHandler::getFormField().
   */
  public function getFormField($form, $form_values) {
    $fieldName = $this->getFieldName();
    $fieldValue = $this->getAddress()->getField($fieldName);
    $default = (isset($form_values[$fieldName])) ? $form_values[$fieldName] : $fieldValue;
    $country_id = (isset($form_values['country'])) ? $form_values['country'] : $this->getAddress()->getField('country');

    if (!empty($country_id)) {
      // Check if country exists.
      $result = db_select('uc_countries')
        ->fields('uc_countries', array('country_id'))
        ->condition('country_id', $country_id)
        ->execute()
        ->fetchField();
      if (!$result) {
        $country_id = uc_store_default_country();
      }
    }

    if (empty($country_id)) {
      $country_id = uc_store_default_country();
    }

    $result = db_select('uc_zones')
      ->condition('zone_country_id', $country_id)
      ->fields('uc_zones')
      ->orderBy('zone_name')
      ->execute();

    $options = array();
    foreach ($result as $zone) {
      $options[$zone->zone_id] = $zone->zone_name;
    }

    if (empty($form['#key_prefix'])) {
      // When no key prefix is set, use the address ID as part of the zone wrapper ID.
      $zone_wrapper_id = 'uc-address' . $this->getAddress()->getId() . '-zone-wrapper';
      $city_wrapper_id = 'uc-address' . $this->getAddress()->getId() . '-city-wrapper';
    }
    else {
      // When a key prefix is set, make this part of the zone wrapper ID.
      $zone_wrapper_id = 'uc-store-address-' . str_replace('_', '-', $form['#key_prefix']) . '-zone-wrapper';
      $city_wrapper_id = 'uc-store-address-' . str_replace('_', '-', $form['#key_prefix']) . '-city-wrapper';
    }

    if (count($options) == 0) {
      return array(
        $fieldName => array(
          '#title' => $this->getFieldTitle(),
          '#type' => 'hidden',
          '#value' => 0,
          '#required' => FALSE,
          '#prefix' => '<div id="' . $zone_wrapper_id . '">',
          '#suffix' => '</div>',
        )
      );
    }

    $return = array(
      $fieldName => array(
        '#type' => 'select',
        '#title' => $this->getFieldTitle(),
        '#required' => $this->isFieldRequired(),
        '#options' => $options,
        '#default_value' => $default,
        '#prefix' => '<div id="' . $zone_wrapper_id . '">',
        '#suffix' => '</div>',
        '#empty_value' => 0,
        '#ajax' => array(
          'callback' => 'ringo_uc_addresses_update_address_field_city',
          'wrapper' => $city_wrapper_id,
          'progress' => array(
            'type' => 'throbber',
          ),
        ),
      ),
    );

    // If the country value was updated, the selected zone does not exists.
    // In that case, just empty the value.
    if (!empty($form_values['zone']) && !isset($options[$form_values['zone']])) {
      $return[$fieldName]['#value'] = 0;
    }
    return $return;
  }
}
