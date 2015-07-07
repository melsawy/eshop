<?php

/**
 * ID Document checkout pane function
 */
function ringo_eshop_id_document_pane_checkout($op, &$order, $form = NULL, &$form_state = NULL) {

  switch($op) {
    //CHECKOUT FORM
    case 'view':
      $contents['id_type'] = array(
        '#title' => 'Type',
        '#type' => 'select',
        '#options' => array(
          'ID' => t('ID'),
          'Passport' => t('Passport'),
        ),
        '#required' =>  TRUE,
      );
      $contents['id_number'] = array(
        '#type' => 'textfield',
        '#title' => t('Number'),
        '#required' => TRUE,
      );
      $contents['id_expiry_date'] = array(
        '#title' => t('Expiry date'),
        '#type' => 'date_popup',
        '#date_format' => 'm/d/Y',
        '#date_label_position' => 'within',
        '#date_increment' => 15,
        '#date_year_range' => '0:+8',
      );
      $contents['id_card'] = array(
        '#type' => 'file',
        '#title' => t('Image'),
        '#description' => t('Upload ID card & Tax code'),
      );
      return array('description' => '', 'contents' => $contents);

    //CHECKOUT PROCESSING - load values into order object.
    case 'process':
      if (empty($form_state['values']['panes']['id_document']['id_type'])) {
        form_set_error('panes][id_document][id_type', t('You cannot check out without selecting an ID type.'));
        return FALSE;
      }
      if (empty($form_state['values']['panes']['id_document']['id_number'])) {
        form_set_error('panes][id_document][id_number', t('You cannot check out without adding ID number.'));
        return FALSE;
      }
      $order->data['id_type'] = $form_state['values']['panes']['id_document']['id_type'];
      $order->data['id_number'] = $form_state['values']['panes']['id_document']['id_number'];
      $order->data['id_expiry_date'] = $form_state['values']['panes']['id_document']['id_expiry_date'];

      return TRUE;

    //CHECKOUT REVIEW
    case 'review':
      $message[] = array(
        'title' => t('ID Type'),
        'data' => $order->data['id_type'],
      );
      $message[] = array(
        'title' => t('ID Number'),
        'data' => $order->data['id_number'],
      );
      $message[] = array(
        'title' => t('Expiry date'),
        'data' => $order->data['id_expiry_date'],
      );
      return $message;
  }
}

/**
 * Contact info checkout pane function
 */
function ringo_eshop_contact_info_pane_checkout($op, &$order, $form = NULL, &$form_state = NULL) {
  $file_url = file_create_url('sites/default/files/sms.jpg');
  switch($op) {
    //CHECKOUT FORM
    case 'view':
      $contents['download_link'] = array(
        '#markup' => t('Download Contract and sign it !link', array('!link' => l(t('contract'), '<front>'))),
      );
      $contents['contact_title'] = array(
        '#title' => t('Title'),
        '#type' => 'select',
        '#options' => array(
          'Mr' => t('Mr'),
          'Ms' => t('Ms'),
        ),
        '#required' =>  TRUE,
      );
      $contents['first_name'] = array(
        '#title' => t('First name'),
        '#type' => 'textfield',
        '#required' =>  TRUE,
      );
      $contents['last_name'] = array(
        '#title' => t('Last name'),
        '#type' => 'textfield',
        '#required' =>  TRUE,
      );
      $contents['tax_code'] = array(
        '#title' => t('Tax code'),
        '#type' => 'textfield',
        '#required' =>  TRUE,
      );
      $contents['contact_birth_date'] = array(
        '#title' => t('Date of birth'),
        '#type' => 'date_popup',
        '#date_format' => 'm/d/Y',
        '#date_label_position' => 'within',
        '#date_increment' => 15,
        '#date_year_range' => '0:+8',
      );
      $contents['contact_gender'] = array(
        '#title' => t('Gender'),
        '#type' => 'select',
        '#options' => array(
          'Male' => t('Male'),
          'Female' => t('Female'),
        ),
        '#required' =>  TRUE,
      );
      $contents['country_birth '] = array(
        '#type' => 'select',
        '#title' => t('Country of birth'),
        '#options' => countries_get_countries('name', array('enabled' => COUNTRIES_ENABLED)),
      );
      $contents['city_birth'] = array(
        '#title' => t('City of birth'),
        '#type' => 'textfield',
      );
      $contents['province_birth'] = array(
        '#title' => t('Province of birth'),
        '#type' => 'textfield',
      );
      $contents['contract'] = array(
        '#type' => 'file',
        '#title' => t('Upload signed contract'),
        //'#description' => t('Upload signed contract'),
      );
      return array('description' => '', 'contents' => $contents);

    //CHECKOUT PROCESSING - load values into order object.
    case 'process':
      watchdog('country', print_r($form_state['values']['panes']['ringo_contact_info'], true));
      $order->data['contact_title'] = $form_state['values']['panes']['ringo_contact_info']['contact_title'];
      $order->data['first_name'] = $form_state['values']['panes']['ringo_contact_info']['first_name'];
      $order->data['last_name'] = $form_state['values']['panes']['ringo_contact_info']['last_name'];
      $order->data['tax_code'] = $form_state['values']['panes']['ringo_contact_info']['tax_code'];
      $order->data['contact_gender'] = $form_state['values']['panes']['ringo_contact_info']['contact_gender'];
      $order->data['contact_birth_date'] = $form_state['values']['panes']['ringo_contact_info']['contact_birth_date'];
      $order->data['city_birth'] = $form_state['values']['panes']['ringo_contact_info']['city_birth'];
      $order->data['province_birth'] = $form_state['values']['panes']['ringo_contact_info']['province_birth'];
      //$order->data['country_birth'] = $form_state['values']['panes']['ringo_contact_info']['country_birth'];
      return TRUE;

    //CHECKOUT REVIEW
    case 'review':
      //$name = countries_api_get_name($iso2_or_iso3);
      $message[] = array('title' => t('Title'),'data' => $order->data['contact_title']);
      $message[] = array('title' => t('First name'),'data' => $order->data['first_name']);
      $message[] = array('title' => t('Last name'),'data' => $order->data['last_name']);
      $message[] = array('title' => t('Tax code'),'data' => $order->data['tax_code']);
      $message[] = array('title' => t('Gender'), 'data' => $order->data['contact_gender']);
      $message[] = array('title' => t('Date of birth'), 'data' => $order->data['contact_birth_date']);
      //$message[] = array('title' => t('Country of birth'), 'data' => $order->data['country_birth']);
      $message[] = array('title' => t('City of birth'), 'data' => $order->data['city_birth']);
      $message[] = array('title' => t('Province of birth'), 'data' => $order->data['province_birth']);
      return $message;
  }
}
