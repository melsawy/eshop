<?php



/**
* @File : Handle The Sim-Card Management Page
*/


/**
* Callback function to handle sim-cards management page
*/

function _ringo_eshop_manage_simcards() {
  $product_attributes  = uc_product_get_attributes(30) ;
  $product_options = array() ;
  $arg2 = arg(2) ;
  $arg3 = arg(3) ;
  // delete operations
  if($arg2 == "delete" && !empty($arg3) && is_numeric($arg3)) {
    uc_attribute_option_delete($arg3) ;
    drupal_set_message("Number has been deleted") ;
    drupal_goto("manage/sim-cards") ;
  }
  // Retrieve list of numbers
  if(count($product_attributes) > 0) {
    foreach($product_attributes as $product_attribute) {
      if($product_attribute->aid == 2) {
        $product_options =  $product_attribute->options ;
      }
    }
  }

  if(!empty($product_options)) {
    $query = db_select('ringo_eshop_numbers', 'num');
    $query->fields('num', array('oid', 'status'));
    $query->fields('u', array('uid', 'name'));
    $query->innerJoin('users', 'u', 'num.uid = u.uid');
    $num_status = $query->execute()->fetchAllAssoc('oid');
    return theme('manage_simcards_template', array('options' => $product_options, 'num_status' => $num_status)) ;
  }
  else{
    return t('No numbers found.')  ;
  }
}


/**
* Add sim-card form
*/
function esho_add_sim_form($form, &$form_state) {
    $form = array() ; 
    $form['simcard_number'] = array(
       '#type' => 'textfield' ,
       '#title' => t('Sim-card Number') , 
       '#description' => t('Add the sim-card number you want to add'), 
       '#required' => true,
    ); 
    $form['simcard_price'] = array(
       '#type' => 'textfield' ,
       '#title' => t('Sim-card Price') , 
       '#description' => t('Add the price of the sim-card'), 
       //'#required' => true,
      '#default_value' => 0,
    );     
    $form['submit'] = array(
       '#type' => 'submit' , 
       '#value' => t('Add'),
    );
    return $form ; 
}


/**
* Validation for : Add sim-card form
*/
function esho_add_sim_form_validate($form, &$form_state) {
  $simcard_number = $form_state['values']['simcard_number'] ;
  $simcard_price  = $form_state['values']['simcard_price'] ;

  if(!ctype_digit($simcard_number)) {
    form_set_error('simcard_number', t('Sim-card number must be numeric value')) ;
  }
  else {
      // Check number duplicate
      $result = db_query('
            SELECT COUNT(ao.oid)
            FROM {uc_attribute_options} ao
            INNER JOIN {uc_product_options} po ON ao.oid = po.oid
            WHERE ao.aid = :aid AND nid = :nid 
            AND name = :number
            ', array(
                ':aid' => 2, 
                ':nid' => variable_get('ringo_eshop_sim_id', 30),
                ':number' => $simcard_number,
                )
            )->fetchField();
        if ($result) {
            form_set_error('simcard_number', t('Sim-card number exists')) ;
        }
  }

  if(!is_numeric($simcard_price)) {
    form_set_error('simcard_price', t('Sim-card price must be numeric value')) ;
  }
  
}


/**
* Submittion for : add sim-card form
*/
function esho_add_sim_form_submit($form, &$form_state) {
  $simcard_number = $form_state['values']['simcard_number'] ;
  $simcard_price  = $form_state['values']['simcard_price'] ;
  // simcard product node
  $product_nid = variable_get('ringo_eshop_sim_id', 30);
  // attribute id
  $attribute_aid = 2 ;
  $simcard = new stdClass();
  $simcard->name = $simcard_number ;
  $simcard->price = $simcard_price ;
  $simcard->nid = $product_nid ;
  $simcard->aid = $attribute_aid ;
  // save the option into the database
  uc_attribute_option_save($simcard) ;
  // add the option into simcard product node
  uc_attribute_subject_option_save($simcard, 'product', $product_nid) ;
}