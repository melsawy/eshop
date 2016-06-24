<?php
/**
 * @file
 * Created by PhpStorm.
 * User: Obad
 * Date: 13/04/15
 * Time: 15:49
 */


define('ASSIGN_BUNDLE_EDIT_MODE_NONE', 'NONE');
define('ASSIGN_BUNDLE_EDIT_MODE_NAT', 'NAT');
define('ASSIGN_BUNDLE_EDIT_MODE_INT', 'INT');


/**
 * Assign bundle form.
 */
function assign_eshop_international_bundle_form($form, $form_state) {
  global $user;
  $form = array();
  $international_offers = get_international_offers();

  if (TRUE || isset($form_state['storage']['state'])) {
    $order_button_handler = '';

    if (TRUE || $form_state['storage']['state'] == ASSIGN_BUNDLE_EDIT_MODE_INT) {
      $form += assign_international_bundle_form(
        $form_state,
        $international_offers,
        array()
      );
      $order_button_handler = 'add_international_bundle_submit';
    }

    if (FALSE) {
      $form['confirm-bundles'] = array(
        '#type' => 'submit',
        '#value' => t('order now'),
        '#submit' => array($order_button_handler),
        '#attributes' => array(
          'class' => array('confirm-bundles'),
        ),
      );
    }
  }

  return $form;
}

/**
 * Assign bundle form validation.
 */
function assign_eshop_international_bundle_form_validate($form, &$form_state) {
}

/**
 * Assign bundle form submission.
 */
function manage_national_bundles_submit($form, &$form_state) {
  $form_state['rebuild'] = TRUE;
  $form_state['storage']['state'] = ASSIGN_BUNDLE_EDIT_MODE_NAT;
}

/**
 * Assign bundle form submission.
 */
function manage_international_bundles_submit($form, &$form_state) {
  $form_state['rebuild'] = TRUE;
  $form_state['storage']['state'] = ASSIGN_BUNDLE_EDIT_MODE_INT;
}

/**
 * Assign bundle form submission.
 */
function confirm_your_bundles_submit($form, &$form_state) {
  $form_state['rebuild'] = TRUE;
  $form_state['storage']['state'] = ASSIGN_BUNDLE_EDIT_MODE_NONE;
}

/**
 * Get national bundles data from the ringo api return object.
 *
 * @param \getProductOfferingResponse $object
 *   the return object of getAllProductOffering.
 *
 * @return array
 *   formatted national data.
 */
function get_national_offers($reset = FALSE) {
  $national_offers = array();
  $cid = 'national_offers';

  if (!$reset && $cache = cache_get($cid)) {
    $national_offers = $cache->data;
  }
  else {
    $all_product_offerings = ringo_api_get_all_product_offerings();

    foreach ($all_product_offerings->productOfferingNat as $bundle) {
      $bucket_name = ($bundle->bucketType->name == 'XLARGE' ? 'XL' : $bundle->bucketType->name);

      $national_offers[$bundle->bundleType->name][$bundle->bucketType->abr] = array(
        'id' => $bundle->bundleBucketMapId,
        'service_name' => 'ICS_' . $bundle->bundleType->name . '_' . $bucket_name,
        'quantity' => $bundle->quantity,
        'price' => $bundle->price,
        'obj' => $bundle,
      );
    }

    cache_set($cid, $national_offers, 'cache', RINGO_BASE_CACHE_RINGO_ENDPOINTS);
  }

  return $national_offers;
}


/**
 * Get international bundles data from the ringo api return object.
 *
 * @param bool $reset
 *   Force cache rebuild.
 *
 * @return array
 *   formatted international data.
 */
function get_international_offers($reset = FALSE) {
  $international_offers = array();
  $cid = 'international_offers';

  if (!$reset && $cache = cache_get($cid)) {
    $international_offers = $cache->data;
  }
  else {
    $all_product_offerings = ringo_api_get_all_product_offerings();

    foreach ($all_product_offerings->productOfferingInt as $bundle) {
      $international_offers[$bundle->region->regionDescription]['bundles'][$bundle->bundleCountryMapId] = array(
        'id' => $bundle->bundleCountryMapId,
        'service_name' => str_replace(' ', '_', $bundle->region->regionDescription) . '_' . $bundle->quantity,
        'quantity' => $bundle->quantity,
        'price' => $bundle->price,
        'ratePerMin' => $bundle->ratePerMin,
        'activationFee' => $bundle->activationFee,
        'obj' => $bundle,
      );

      $international_offers[$bundle->region->regionDescription]['regionName'] = $bundle->region->regionDescription;
      $international_offers[$bundle->region->regionDescription]['regionId'] = $bundle->region->regionId;

      uasort($international_offers[$bundle->region->regionDescription]['bundles'], 'int_bundle_cmp');
    }

    // Add size to all bundles.
    $package_sizes = array('S', 'M', 'L', 'XL', 'XXL', 'XXL');
    $idx = 0;
    foreach ($international_offers as $region => $offers) {
      $idx = 0;
      foreach ($offers['bundles'] as $offer_id => $bundle) {
        $international_offers[$region]['bundles'][$offer_id]['size'] = $package_sizes[$idx++ % count($package_sizes)];
      }
    }

    cache_set($cid, $international_offers, 'cache', RINGO_BASE_CACHE_RINGO_ENDPOINTS);
  }

  return $international_offers;
}

/**
 * Compare two int bundles.
 *
 * Helper function to use with uasort
 *
 * @param array $a
 *   first bundle.
 * @param array $b
 *   second bundle.
 *
 * @return bool
 *   the boolean of the comparison result.
 */
function int_bundle_cmp($a, $b) {
  return $a['quantity'] > $b['quantity'];
}

/**
 * Generate the international bundles table for one region.
 *
 * @param array $region_data
 *   formatted region bundles data.
 *
 * @return array
 *   the variable array for themeing a table.
 * @throws \Exception
 */
function get_international_table($region_data, $show_radios = TRUE, $taken_bundles = array()) {
  $rows = array();
  $selectable = $show_radios;

  // Sort the int bundles.
  uasort($region_data['bundles'], 'int_bundle_cmp');

  $headers = array(
    t('Package'),
    t('Amount'),
    t('Monthly Charge'),
    t('Rate/Min'),
    t('Activation fee'),
  );

  foreach ($region_data['bundles'] as $offer) {
    if (in_array($offer['id'], $taken_bundles)) {
      continue;
    }

    $rows[$offer['id']] = array(
      array('data' => t($offer['size']), 'class' => array('size')),
      t('!count Min', array('!count' => $offer['quantity'])),
      array('data' => t('!count €', array('!count' => $offer['price'])), 'class' => array('price')),
      t('!count €', array('!count' => $offer['ratePerMin'])),
      array('data' => t('!count €', array('!count' => $offer['activationFee'])) , 'class' => array('activation-fee')),
    );
  }

  if ($selectable) {
    $element = array(
      '#type' => 'tableselect',
      '#header' => $headers,
      '#options' => $rows,
      '#multiple' => TRUE,
      '#attributes' => array('class' => array('int-bundle')),
    );
  }
  else {
    $element = array(
      '#markup' => theme(
        'table', array(
          'header' => $headers,
          'rows' => $rows,
          'attributes' => array('class' => array('int-bundle')),
        )
      ),
    );

  }

  return $element;
}

/**
 * Returns the block to select countries and choose bundles.
 *
 * @param $form_state
 * @param $international_promotions
 * @param $user_promotions
 *
 * @return array
 */
function assign_international_bundle_form($form_state, $international_promotions, $user_promotions = NULL) {
  $form = array();
  $user_regions = array();
  // Add bundle field set.
  $form['select-int-bundle'] = array(
    '#prefix' => '<div id="tabs-2">',
    '#type' => 'fieldset',
    '#title' => t('International Offers'),
    '#weight' => 2,
  );
  $regions = array();
  $table_region = NULL;
  $taken_bundles = array();
  foreach ($international_promotions as $region_promotions) {
    $region_id = $region_promotions['regionId'];
    $regions[$region_promotions['regionId']] = t($region_promotions['regionName']);
    // Show selected country if any.
    if (isset($form_state['input']['int-region']) && $form_state['input']['int-region'] == $region_promotions['regionId']) {
      $table_region = $region_promotions;
      $taken_bundles = isset($user_regions[$region_id]) ? $user_regions[$region_id] : array();
    }

    // Show first country by default.
    if (is_null($table_region)) {
      $table_region = $region_promotions;
      $taken_bundles = isset($user_regions[$region_id]) ? $user_regions[$region_id] : array();
    }
  }
  $form['select-int-bundle']['int-region'] = array(
    '#type' => 'select',
    '#options' => $regions,
    '#ajax' => array(
      'event' => 'change',
      'wrapper' => 'select-int-wrapper',
      'callback' => 'int_bundle_selection_change_callback',
      'method' => 'replace',
    ),
  );
  if (!is_null($table_region)) {
    $form['select-int-bundle']['int-bundle'] = get_international_table(
      $table_region,
      !is_null($user_promotions),
      $taken_bundles
    );

    $form['select-int-bundle']['int-bundle']['#prefix'] = '<div id="select-int-wrapper" >';
    $form['select-int-bundle']['int-bundle']['#suffix'] = '</div>';
  }
  else {
    $form['select-int-bundle']['int-bundle'] = array(
      '#markup' => '<div id="select-int-wrapper" ></div>',
    );
  }

  $form['select-int-bundle']['int-bundle-end'] = array(
    '#markup' => '</div>',
  );

  return $form;
}

/**
 * Ajax callback to update the international bundle table on region change.
 *
 * @param $form
 * @param $form_state
 *
 * @return mixed
 */
function int_bundle_selection_change_callback($form, &$form_state) {
  return $form['select-int-bundle']['int-bundle'];
}


function add_international_bundle_submit($form, &$form_state) {
  $mobile = '122222';//current_mobile_number();

  $promotion_id = $form_state['values']['int-bundle'];

  $international_promotion = new bundleRegionMap('?', $promotion_id, '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?');

  ringo_api_assign_promotion($mobile, '?', '?', '?', $international_promotion);

  $form_state['redirect'] = 'my-ringo/manage-bundles';
}

/**
 * Handle national table submit.
 *
 * @param $form
 * @param $form_state
 */
function add_national_bundle_submit($form, &$form_state) {
  $values = $form_state['values'];

  $types = array('voice', 'sms', 'data');
  foreach ($types as $type) {
    if (isset($values[$type]) && !empty($values['type']) && !is_null($values[$type])) {
//      ringo_api_assign_promotion();
    }
  }

  $voice = $sms = $data = '?';
  if (!is_null($values['voice']) && $values['voice'] != -1) {
    $voice = find_national_offer_by_id($values['voice'], 'VOICE');
  }

  if (!is_null($values['sms']) && $values['sms'] != -1) {
    $sms = find_national_offer_by_id($values['sms'], 'SMS');
  }

  if (!is_null($values['data']) && $values['data'] != -1) {
    $data = find_national_offer_by_id($values['data'], 'DATA');
  }

  $mobile = current_mobile_number();

  $result = ringo_api_assign_promotion($mobile, $voice, $sms, $data, '?');

  $form_state['redirect'] = 'my-ringo/manage-bundles';
}

function assign_national_bundle_form($national_bundles, $user_bundles = NULL) {
  $headers = array('', t('XS'));
  $rows = array();
  foreach ($national_bundles as $type => $packages) {
    $row = array(
      'data' => array(),
      'class' => array(strtolower($type)),
      'group' => array(strtolower($type)),
    );

    $options = array();
    $type_sign = '';
    if (strtolower($type) == 'voice') {
        $type_sign = t(' (Minutes)');
    }
    elseif (strtolower($type) == 'data') {
        $type_sign = t(' (GB)');
    }
    $row['data'][] = array('data' => t("$type !type", array('!type' => $type_sign)) , 'class' => array('package'));
    $row['data'][] = array(
      'data' => format_string('<span class="size">!quantity</span>', array('!quantity' => 0)) . '<br />'
        . format_string('!currency <span class="price">!price</span>', array('!currency' => t('€'), '!price' => 0)),
      'package-id' => -1,
    );
    $options[-1] = "Nothing";
    foreach ($packages as $size => $package) {
      $cell = array(
        'data' => format_string('<span class="size">!quantity</span>', array('!quantity' => $package['quantity'])) . '<br />'
        . format_string('!currency <span class="price">!price</span>', array('!currency' => t('€'), '!price' => $package['price'])),
        'package-id' => $package['id'],
      );
      $options[$package['id']] = $package['service_name'];
      if (!is_null($user_bundles)) {
        // Find out if this cell is already taken.
        if (is_array($user_bundles->simPromotions)) {
          foreach ($user_bundles->simPromotions as $user_bundle) {
            if ($user_bundle->name == $package['service_name']) {
              $cell['class'] = array('disabled');
              $cell['title'] = t('Package already active.');

              // Remove this promotion from selectable packages.
              unset($options[$package['id']]);
              break;
            }
          }
        }
      }
      $row['data'][] = $cell;
      if (!in_array($size, $headers)) {
        $headers[] = $size;
      }
    }
    $rows[] = $row;
    /*
    $form[strtolower($type)] = array(
      '#type' => 'radios',
      '#title' => $type,
      '#options' => $options,
    );
    */
  }
  $form['select-nat-bundle'] = array(
    '#prefix' => '<div id="tabs-1">',
    '#type' => 'fieldset',
    '#title' => t('National Offers'),
    '#weight' => 1,
  );
  $form['select-nat-bundle']['nat-table'] = array(
    '#prefix' => '<div id ="nat-bundle-options">',
    '#markup' => theme(
      'table', array(
        'header' => $headers,
        'rows' => $rows,
        'attributes' => array('class' => array('nat-bundle')),
      )
    ),
    '#suffix' => '</div></div>',
  );
  return $form;
}

/**
 * User bundles table.
 *
 * List all currently active National & International bundles.
 */
function user_bundles_form($user_offerings, $national_bundles, $international_bundles) {
  $headers = array(
    t('Offers'),
    t('Exp. Date'),
    t('Available Amount'),
    t('Status'),
  );
  $national_rows = array();

  // National bundle rows.
  $national_rows[] = array(
    array(
      'data' => t('National Offers'),
      'class' => array('nat-bundles', 'wide-cell', 'user-bundles-label'),
      'colspan' => 4,
    ),
  );
  $types = array('VOICE', 'SMS', 'DATA');
  $units = array('VOICE' => t('min'), 'SMS' => t('sms'), 'DATA' => t('GB'));
  $size_map = array(
    'SMALL' => array('weight' => 0, 'abbr' => t('S')),
    'MEDIUM' => array('weight' => 1, 'abbr' => t('M')),
    'LARGE' => array('weight' => 2, 'abbr' => t('L')),
    'L' => array('weight' => 2, 'abbr' => t('L')),
    'XLARGE' => array('weight' => 3, 'abbr' => t('XL')),
    'XL' => array('weight' => 3, 'abbr' => t('XL')),
  );
  foreach ($types as $type) {
    $found = FALSE;

    if (is_array($user_offerings->simPromotions)) {
      foreach ($user_offerings->simPromotions as $promotion) {
        if (strpos($promotion->name, $type) !== FALSE) {
          $found = TRUE;

          $nat_offer = find_national_offer_by_service_name($promotion->name);

          $parts = explode('_', $promotion->name);
          $size = array_pop($parts);
          $size_text = isset($size_map[$size]) ? $size_map[$size]['abbr'] : $size;
          $weight = isset($size_map[$size]) ? $size_map[$size]['weight'] : $size;

          $national_rows[] = array(
            'data' => array(
              t($type) . ' <span class="size">(' . $size_text . ')</span>',
              ringo_format_date($promotion->endDate),
              is_object($nat_offer) ? t(
                '- / !count !unit',
                array(
                  '!count' => $nat_offer->quantity,
                  '!unit' => $units[$type]
                )
              ) : '-',
              $promotion->subscriptionStatus == 1 ? t('Active') : '-',
            ),
            'class' => array('data'),
            'type' => $type,
            'size' => $size_text,
            'weight' => $weight,
          );
        }
      }
    }

    if (!$found) {
      $national_rows[] = array(
        'data' => array(
          t($type),
          '-',
          '-',
          '-',

        ),
        'class' => array('no-data'),
        'type' => $type,
        'size' => '-',
      );
    }
  }

  uasort(
    $national_rows,
    function ($a, $b) {
      if (!isset($a['size'])) {
        return -1;
      }

      if (!isset($b['size'])) {
        return 1;
      }

      if ($a['type'] == $b['type']) {
        return $a['weight'] > $b['weight'];
      }

      return $a['type'] < $b['type'];
    }
  );

  // National bundle stuff.
  $national_rows[] = array(
    array(
      'data' => t('International Offers'),
      'class' => array('int-bundles', 'wide-cell', 'user-bundles-label'),
      'colspan' => 4,
    ),
  );

  // Keep international rows in a separate array to sort them.
  $international_rows = array();
  if (is_array($user_offerings->simPromotions)) {
    foreach ($user_offerings->simPromotions as $promotion) {
      if (is_object($promotion) && strpos($promotion->name, 'ICS') === FALSE) {
        $bundle = find_international_offer_by_service_name(
          $promotion->name,
          $international_bundles
        );

        $international_rows[] = array(
          'data' => array(
            t(
              $bundle['obj']->region->regionDescription
            ) . ' <span class="size">(' . t($bundle['size']) . ')</span>',
            ringo_format_date($promotion->endDate),
            t('- / !count min', array('!count' => $bundle['quantity'])),
            $promotion->subscriptionStatus == 1 ? t('Active') : '-',
          ),
          'class' => array('data', $promotion->name),
          'country' => t($bundle['obj']->region->regionDescription),
          'size' => $bundle['size'],
        );
      }
    }
  }

  uasort($international_rows, function ($a, $b) {
    if ($a['country'] == $b['country']) {
      return $a['size'] < $b['size'];
    }
    return $a['country'] > $b['country'];
  });

  foreach ($international_rows as $row) {
    $national_rows[] = $row;
  }

  $national_rows[] = array('','','','');

  $form['user-bundles'] = array(
    '#markup' => theme(
        'table', array(
          'header' => $headers,
          'rows' => $national_rows,
          'attributes' => array('class' => array('user-bundles')),
        )
      ),
  );
  return $form;
}

/**
 * Find international offer by service name.
 *
 * @param string $service_name
 *   the service name.
 *
 * @param null|array $international_bundles
 *   list of international bundles to search.
 *
 * @return mixed
 *   the international offer if found, FALSE otherwise.
 */
function find_international_offer_by_service_name($service_name, $international_bundles = NULL) {
  if (is_null($international_bundles)) {
    $international_bundles = get_international_offers();
  }

  $country = substr($service_name, 0, strrpos($service_name, '_'));
  $country = str_replace('_', ' ', $country);

  if (isset($international_bundles[$country])) {
    foreach ($international_bundles[$country]['bundles'] as $bundle) {
      if ($bundle['service_name'] == $service_name) {
        return $bundle;
      }
    }
  }

  return NULL;
}


/**
 * Find national offer by id.
 *
 * @param int $id
 *   the id to search with.
 * @param  string $target_type
 *   the type to search within, if omited will search through all types.
 *
 * @return bundleBucketMap
 */
function find_national_offer_by_id($id, $target_type = NULL) {
  $national_offers = get_national_offers();

  foreach ($national_offers as $type => $offers) {
    if (!is_null($type) && $target_type != $type) {
      continue;
    }

    foreach ($offers as $offer) {
      if ($offer['obj']->bundleBucketMapId == $id) {
        return $offer['obj'];
      }
    }
  }

  return '?';
}

/**
 * Find national offer by service name.
 *
 * @param string $service_name
 *   the service name of this service.
 *
 * @return bundleBucketMap
 */
function find_national_offer_by_service_name($service_name) {
  $national_offers = get_national_offers();

  foreach ($national_offers as $type => $offers) {
    foreach ($offers as $offer) {
      if ($offer['service_name'] == $service_name) {
        return $offer['obj'];
      }
    }
  }

  return '?';
}
