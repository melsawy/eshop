<?php
/**
* @Variables
*   $options : list of sim-card numbers
*/
// Load Js Files
drupal_add_js(drupal_get_path("module", "ringo_eshop")."/js/manage_simcards.js") ;

//Initialize table variables 
$contents = array() ;
$rows = array() ; 
$header = array() ; 
$attributes = array('class' => array('eshop-manage-simcards-table'), 'sticky' => true) ;  
$table_row_counter = 1 ;
$add_number_form = drupal_get_form("esho_add_sim_form" );  

// Define The Header 
$header['number'] = array('data' => t('Number')) ;
$header['price'] = array('data' => t('Price')) ;
$header['status'] = array('data' => t('Status')) ;
$header['owner'] = array('data' => t('Owner')) ;
$header['operations'] = array('data' => t('Operations')) ;


// Number List
foreach($options as $simcard_number) {
  $delete = TRUE;
  $status = t('Free');
  $owner = '-';
  if (array_key_exists($simcard_number->oid, $num_status)) {
    //Can not delete number if locked by user.
    $delete = FALSE;
    $status = ($num_status[$simcard_number->oid]->status == 1) ? t('Locked') : t('Sold');
    $owner = l($num_status[$simcard_number->oid]->name, 'user/'. $num_status[$simcard_number->oid]->uid);
  }

  // sim card number column
  $rows[$table_row_counter][] = array('data' => $simcard_number->name, 'class' => array('simcard-number'), 'data-oid' => $simcard_number->oid ) ;
  // sim card price column
  $rows[$table_row_counter][] = array('data' => $simcard_number->price, 'class' => array('simcard-price')) ;
  // sim card status column
  $rows[$table_row_counter][] = array('data' => $status, 'class' => array('simcard-status')) ;
  // sim card owner
  $rows[$table_row_counter][] = array('data' => $owner, 'class' => array('simcard-owner')) ;
  // sim card operations column
  if ($delete) {
    $rows[$table_row_counter][] = array('data' => l(t('Delete'), url('manage/sim-cards/delete/'.$simcard_number->oid,
      array('absolute' => TRUE ))), 'class' => array('simcard-operations')
    ) ;
  }
  else {
    $rows[$table_row_counter][] = array('data' => '-', 'class' => array('simcard-operations')) ;
  }

  $table_row_counter++ ;
}




echo drupal_render($add_number_form) ;
echo theme('table', array('header' => $header, 'rows' => $rows, 'attributes' => $attributes)) ; 