<?php

/**
 * Class for an Ubercart core address text field.
 */
class RingoUcAddressesUcCityFieldHandler extends UcAddressesUcFieldHandler {
  /**
   * Implements UcAddressesFieldHandler::getFormField().
   */
  public function getFormField($form, $form_values) {
    $field_name = $this->getFieldName();
    $field_value = $this->getAddress()->getField($field_name);
    $default = (isset($form_values[$field_name])) ? $form_values[$field_name] : $field_value;
    $zone_id = (isset($form_values['zone'])) ? $form_values['zone'] : $this->getAddress()->getField('zone');

    // Check if zone exists.
    $zone_exists = TRUE;
    if (!empty($zone_id)) {
      $result = db_select('uc_zones')
        ->fields('uc_zones', array('zone_id'))
        ->condition('zone_id', $zone_id)
        ->execute()
        ->fetchField();
      if (!$result) {
        $zone_exists = FALSE;
      }
    }

    $options = array();
    if (!empty($zone_id) && $zone_exists) {
      $result = db_select('uc_cities')
        ->condition('city_zone_id', $zone_id)
        ->fields('uc_cities')
        ->orderBy('city_name')
        ->execute();

      foreach ($result as $city) {
        $options[$city->city_id] = $city->city_name;
      }
    }



    if (empty($form['#key_prefix'])) {
      // When no key prefix is set, use the address ID as part of
      // the city wrapper ID.
      $city_wrapper_id = 'uc-address' . $this->getAddress()->getId() . '-city-wrapper';
    }
    else {
      // When a key prefix is set, make this part of the zone wrapper ID.
      $city_wrapper_id = 'uc-store-address-' . str_replace('_', '-', $form['#key_prefix']) . '-city-wrapper';
    }

    if (count($options) == 0) {
      return array(
        $field_name => array(
          '#title' => $this->getFieldTitle(),
          '#type' => 'hidden',
          '#value' => 0,
          '#required' => FALSE,
          '#prefix' => '<div id="' . $city_wrapper_id . '">',
          '#suffix' => '</div>',
        ),
      );
    }

    $return = array(
      $field_name => array(
        '#type' => 'select',
        '#title' => $this->getFieldTitle(),
        '#required' => $this->isFieldRequired(),
        '#options' => $options,
        '#default_value' => $default,
        '#prefix' => '<div id="' . $city_wrapper_id . '">',
        '#suffix' => '</div>',
        '#empty_value' => 0,
      ),
    );

    // If the country/zone value was updated, the selected city does not exists.
    // In that case, just empty the value.
    if (!empty($form_values['city']) && !isset($options[$form_values['city']])) {
      $return[$field_name]['#value'] = 0;
    }
    return $return;
  }

  /**
   * Overrides UcAddressesFieldHandler::getDefaultValue().
   *
   * The city ID should always be an integer.
   */
  public function getDefaultValue() {
    return 0;
  }

  /**
   * Overrides UcAddressesFieldHandler::outputValue().
   *
   * The city field display value.
   */
  public function outputValue($value = '', $format = '') {
    if ($value === '') {
      $value = $this->getAddress()->getField($this->getFieldName());
    }

    // Get city data.
    $result = db_select('uc_cities')
      ->condition('city_id', $value)
      ->fields('uc_cities', array('city_name'))
      ->execute();

    $row = $result->fetch();
    if ($row) {
      return $row->city_name;
    }

    return t('N/A');
  }
}
