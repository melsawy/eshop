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
        '#default_value' => !empty($order->data['id_type']) ? $order->data['id_type'] : "",  
        '#required' =>  TRUE,
      );
      $contents['id_number'] = array(
        '#type' => 'textfield',
        '#title' => t('Number'),
        '#required' => TRUE,
        '#default_value' => !empty($order->data['id_number']) ? $order->data['id_number'] : "",
      );
      $contents['id_expiry_date'] = array(
        '#title' => t('Expiry date'),
        '#type' => 'date_popup',
        '#required' => TRUE,
        '#date_format' => 'm/d/Y',
        '#date_label_position' => 'within',
        '#date_increment' => 15,
        '#date_year_range' => '0:+8',
        '#default_value' => !empty($order->data['id_expiry_date']) ? $order->data['id_expiry_date'] : "",  
      );
      $contents['id_card_image'] = array(
        '#type' => 'file',
        '#title' => t('Image'),
        '#name' => 'id_card_image',
        '#required' => TRUE,
        '#value' => !empty($order->data['id_expiry_date_fid']) ? $order->data['id_expiry_date_fid'] : "" , 
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
      // Validate that id_number field is a number
      if(!ctype_digit($form_state['values']['panes']['id_document']['id_number'])) {
        form_set_error('panes][id_document][id_number', t('You must enter a valid ID number.'));
        return FALSE;          
      }
      
      // id_card File Upload Validation 
        $id_card_image = 'id_card_image';
        //  make sure we upload an image
        $validators = array(
           'file_validate_is_image' => array(),
        );      
 
        foreach ($_FILES as $key => $value) {
            if ($key == $id_card_image) {
                foreach ($value as $fkey => $fvalue) {
                    $_FILES['files'][$fkey][$id_card_image] = $fvalue;
                }
            }
        }

        // if file exist then save it
        if(!empty($_FILES[$id_card_image])) {
            // temprorarly save the file
            $id_card_saved_file = file_save_upload($id_card_image, $validators, 'public://');
            if($id_card_saved_file) {
                // permenantly save the file
                $id_card_saved_file->status = FILE_STATUS_PERMANENT;
                // Save file status.
                file_save($id_card_saved_file); 
                // Add FID to Object
                $order->data['id_expiry_date_fid'] = $id_card_saved_file->fid ; 
            }
        }
           
      // End of :  id_card File Upload Validation 
      
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
      if(!empty($order->data['id_expiry_date_fid'])) {
          $id_card_saved_file  = file_load($order->data['id_expiry_date_fid']) ; 
    
      $message[] = array(
         'title' => t('ID Card') ,
          'data' =>  l(t('View Document Id'),file_create_url($id_card_saved_file->uri), array('attributes' => array('target'=>'_blank'))) 
      );
      }
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
 
      /**
      * Load Fields Default Value
      */
      global $user ; 
      $user_profile = user_load($user->uid) ;
      // load title field
      $field_user_title = field_get_items('user', $user_profile, 'field_customer_title');
      $field_user_title_output = field_view_value('user', $user_profile, 'field_customer_title', $field_user_title[0]);
      $contact_title_value = !empty($order->data['contact_title']) ? $order->data['contact_title'] : $field_user_title_output['#markup'];
      // load first name field
      $field_first_name = field_get_items('user', $user_profile, 'field_first_name');
      $field_first_name_output = field_view_value('user', $user_profile, 'field_first_name', $field_first_name[0]);         $first_name_value = !empty($order->data['first_name']) ? $order->data['first_name'] : $field_first_name_output['#markup'];
      // load last name field
      $field_last_name = field_get_items('user', $user_profile, 'field_last_name');
      $field_last_name_output = field_view_value('user', $user_profile, 'field_last_name', $field_last_name[0]);           $last_name_value = !empty($order->data['last_name']) ? $order->data['last_name'] : $field_last_name_output['#markup'];  
      // load Tax Code field
      $field_tax_code = field_get_items('user', $user_profile, 'field_tax_code');
      $field_tax_code_output = field_view_value('user', $user_profile, 'field_tax_code', $field_tax_code[0]);               $tax_code_value = !empty($order->data['tax_code']) ? $order->data['tax_code'] : $field_tax_code_output['#markup'];    
      // load Date of birth field
      $field_date_of_birth  = field_get_items('user', $user_profile, 'field_date_of_birth');
      $field_date_of_birth_output = field_view_value('user', $user_profile, 'field_date_of_birth', $field_date_of_birth[0]);         
      $contact_birth_date_value = !empty($order->data['contact_birth_date']) ? $order->data['contact_birth_date'] : $field_date_of_birth_output['#markup'];          
      // load Gender field
      $field_gender = field_get_items('user', $user_profile, 'field_gender');
      $field_gender_output = field_view_value('user', $user_profile, 'field_gender', $field_gender[0]);                     $contact_gender_value = !empty($order->data['contact_gender']) ? $order->data['contact_gender'] : $field_gender_output['#markup'] ; 
      // load Country Birth field
      $field_country_birth = field_get_items('user', $user_profile, 'field_country_of_birth');
      $field_country_birth_output = field_view_value('user', $user_profile, 'field_country_of_birth', $field_country_birth[0]);                     
      $country_birth_value = !empty($order->data['country_birth']) ? $order->data['country_birth'] : $field_country_birth_output['#markup'] ;    
      // load City Birth field
      $field_city_birth = field_get_items('user', $user_profile, 'field_city_of_birth');
      $field_city_birth_output = field_view_value('user', $user_profile, 'field_city_of_birth', $field_city_birth[0]);                     
      $city_birth_value = !empty($order->data['city_birth']) ? $order->data['city_birth'] : $field_city_birth_output['#markup'] ; 
      // load Province Birth field
      $field_province_birth = field_get_items('user', $user_profile, 'field_province_of_birth');
      $field_province_birth_output = field_view_value('user', $user_profile, 'field_province_of_birth', $field_province_birth[0]);                     
      $province_birth_value = !empty($order->data['province_birth']) ? $order->data['province_birth'] : $field_province_birth_output['#markup'] ; 

      /**
      * End of : Load Fields Default Value
      */      
      $contents['download_link'] = array(
        '#markup' => "<div class='contact-info-download-link-wrapper'>".t('Download Contract and sign it !link', array('!link' => l(t('contract'), '<front>')))."</div>",
      );
      $contents['contact_title'] = array(
        '#title' => t('Title'),
        '#type' => 'select',
        '#options' => array(
          'Mr' => t('Mr'),
          'Ms' => t('Ms'),
        ),
        '#default_value' => $contact_title_value,  
        '#required' =>  TRUE,
      );
      $contents['first_name'] = array(
        '#title' => t('First name'),
        '#type' => 'textfield',
        '#required' =>  TRUE,
        '#default_value' => $first_name_value,
      );
      $contents['last_name'] = array(
        '#title' => t('Last name'),
        '#type' => 'textfield',
        '#required' =>  TRUE,
        '#default_value' => $last_name_value,
      );
      $contents['tax_code'] = array(
        '#title' => t('Tax code'),
        '#type' => 'textfield',
        '#required' =>  TRUE,
        '#default_value' => $tax_code_value,
      );
      $contents['contact_birth_date'] = array(
        '#title' => t('Date of birth'),
        '#type' => 'date_popup',
        '#date_format' => 'm/d/Y',
        '#date_label_position' => 'within',
        '#date_increment' => 15,
        '#date_year_range' => '0:+8',
        '#default_value' => $contact_birth_date_value,
      );
      $contents['contact_gender'] = array(
        '#title' => t('Gender'),
        '#type' => 'select',
        '#options' => array(
          'Male' => t('Male'),
          'Female' => t('Female'),
        ),
        '#default_value' => $contact_gender_value,
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
        '#default_value' => $city_birth_value,  
      );
      $contents['province_birth'] = array(
        '#title' => t('Province of birth'),
        '#type' => 'textfield',
        '#default_value' => $province_birth_value,  
      );
      $contents['contract_file'] = array(
        '#type' => 'file',
        '#title' => t('Upload signed contract'),
        '#name' => 'contract_file',
        '#default_value' => !empty($order->data['contract_date_fid']) ? $order->data['contract_date_fid'] : "" ,  
        '#required' => TRUE,
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

      // Validate that tax code field is a number
      if(!ctype_digit($form_state['values']['panes']['ringo_contact_info']['tax_code'])) {
        form_set_error('panes][ringo_contact_info][tax_code', t('You must enter a valid Tax code number.'));
        return FALSE;          
      }      
      
      // Contract File Upload Validation 
        $contract_file = 'contract_file';
        //  make sure we upload an image
        $validators = array(
           'file_validate_extensions' => array('pdf doc docx png jpg jpeg'),
        ); 

        foreach ($_FILES as $key => $value) {
            if ($key == $contract_file) {
                foreach ($value as $fkey => $fvalue) {
                    $_FILES['files'][$fkey][$contract_file] = $fvalue;
                }
            }
        }

        // if file exist then save it
        if(!empty($_FILES[$contract_file])) {
            // temprorarly save the file
            $contract_saved_file = file_save_upload($contract_file, $validators, 'public://');
            if($contract_saved_file) {
                // permenantly save the file
                $contract_saved_file->status = FILE_STATUS_PERMANENT;
                // Save file status.
                file_save($contract_saved_file); 
                // Add FID to Object
                $order->data['contract_date_fid'] = $contract_saved_file->fid ; 
            }
        }
           
      // End of :  Contract File Upload Validation      
      
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
      if(!empty($order->data['contract_date_fid'])) {
          $contract_saved_file  = file_load($order->data['contract_date_fid']) ; 
    
      $message[] = array(
         'title' => t('Contract File') ,
          'data' =>  l(t('View the Contract'),file_create_url($contract_saved_file->uri), array('attributes' => array('target'=>'_blank'))) 
      );
      }      
      return $message;
  }
}
