<?php

/**
 * @file
 * Ringos administrative staff
 */

/**
 * Form function for `_ringo_eshop_settings`.
 */
function _ringo_eshop_settings($form, $form_state) {
  $form['privacy_terms'] = array(
    '#type' => 'fieldset',
    '#title' => t('Privacy links'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['privacy_terms']['ringo_privacy_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Privacy Regulation'),
    '#default_value' => variable_get('ringo_privacy_link', '<front>'),
    '#size' => 45,
    '#description' => t('Specify a path to privacy regulation page. Do not include the language prefix.'),
    '#field_prefix' => url(NULL, array('absolute' => TRUE)),
    '#required' => TRUE,
  );

  $form['privacy_terms']['ringo_terms_and_conditions'] = array(
    '#type' => 'textfield',
    '#title' => t('Terms & Conditions'),
    '#default_value' => variable_get('ringo_terms_and_conditions', '<front>'),
    '#size' => 45,
    '#description' => t('Specify a path to terms and conditions page. Do not include the language prefix.'),
    '#field_prefix' => url(NULL, array('absolute' => TRUE)),
    '#required' => TRUE,
  );

  return system_settings_form($form);
}
