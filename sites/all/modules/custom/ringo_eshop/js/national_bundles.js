jQuery(document).ready(function() {
    //adjust elements for natinal bundles
    jQuery('.form-item-voice, .form-item-sms, .form-item-data').hide();
    var nat_options = jQuery('#edit-select-nat-bundle');
    jQuery('#national-bundle-details').prepend(nat_options);
    jQuery('#edit-attributes-4').hide();

    jQuery( "select#edit-attributes-2" ).change(function() {
        if (jQuery(this).val()) {
            jQuery('#national-bundle-details').show();
        }
        else {
            jQuery('#national-bundle-details').hide();
        }
    });
    jQuery( "select#edit-attributes-2").trigger('change');
    jQuery('table.nat-bundle td:not(.package, .disabled)').on('click', function () {
        jQuery(this).toggleClass('selected-cell').siblings().removeClass('selected-cell');

        var package_id = jQuery(this).attr('package-id');
        var group = jQuery(this).parent().attr('group');

        if (jQuery(this).hasClass('selected-cell')) {
            jQuery("input[name=" + group + "][value=" + package_id + "]").prop('checked', true);
        }
        else {
            jQuery("input[name=" + group + "][value=" + package_id + "]").prop('checked', false);
        }
        updateSummary();
    });
    updateSummary();

    // adjust element for international bundles
    var internat_options = jQuery('#edit-select-int-bundle');
    jQuery('#international-bundle-details').prepend(internat_options);
    jQuery('#edit-attributes-5').hide();
    jQuery('#international-bundle-details').hide();
});

function toggle_bundle(bundle) {
    if (bundle == 'international') {
        jQuery('#international-bundle-details').show();
        jQuery('#national-bundle-details').hide();
    }
    else {
        jQuery('#international-bundle-details').hide();
        jQuery('#national-bundle-details').show();
    }
}

function updateSummary() {
  if (jQuery('table.nat-bundle').length == 0) {
    return;
  }

  // Update packages in description text under the table.
  jQuery('.nat-bundle-desc .voice').text(jQuery('table.nat-bundle .voice .selected-cell .size').text());
  jQuery('.nat-bundle-desc .sms').text(jQuery('table.nat-bundle .sms .selected-cell .size').text());
  jQuery('.nat-bundle-desc .data').text(jQuery('table.nat-bundle .data .selected-cell .size').text());

  // Add zero to unselected packages to make sure they still look nice. this is only
  // for looks, has no functionality impact.
  jQuery('.nat-bundle-desc .voice, .nat-bundle-desc .sms, .nat-bundle-desc .data').each(function() {
    if (jQuery(this).text() == "") {
      jQuery(this).text("0");
    }
  });

  // Update the total cost.
  var sum = 0;
  jQuery('table.nat-bundle .selected-cell .price').each(function () {
    sum += Number(jQuery(this).text());
  });

  jQuery('.nat-bundle-desc .total').text(sum);


  // Disable order now button if nothing is selected.
  if (jQuery('table.nat-bundle td.selected-cell').length > 0) {
    jQuery('#edit-attributes-4').val(jQuery('.nat-bundle-desc').text());
  }
  else {
    jQuery('#edit-attributes-4').val('');
  }
}
