jQuery(document).ready(function () {
    // All your code here
    //adjust elements for natinal bundles
    jQuery('#tabs').tabs();
    jQuery('div.attribute-4, div.attribute-5').hide();

    jQuery('table.nat-bundle td:not(.package, .disabled)').click(function () {
        jQuery(this).toggleClass('selected-cell').siblings().removeClass('selected-cell');

        var package_id = jQuery(this).attr('package-id');
        var group = jQuery(this).parent().attr('group');

        if (jQuery(this).hasClass('selected-cell')) {
            jQuery("input[name=" + group + "][value=" + package_id + "]").prop('checked', true);
        }
        else {
            jQuery("input[name=" + group + "][value=" + package_id + "]").prop('checked', false);
        }
        _assign_national_bundle();
    });

    _assign_national_bundle();
    _assign_international_bundle();

    // update number select list
    if (typeof Drupal.settings.ringo_eshop !== "undefined" &&
      typeof Drupal.settings.ringo_eshop.eshop_number_chosen_ajax !== "undefined") {
    jQuery( "#edit_attributes_2_chosen div.chosen-search input").keyup(function(e) {
        // get keycode of current keypress event
        var code = (e.keyCode || e.which);
        // do nothing if it's an arrow key
        if(code == 37 || code == 38 || code == 39 || code == 40) {
         return;
        }
        var search_value = jQuery(this).val();
        if (jQuery.isNumeric(search_value) == false) {
            return true;
        }
        jQuery.get(
                Drupal.settings.basePath + Drupal.settings.pathPrefix + 'eshop/select-number',
                {search_value : search_value},
                function(data, status, xhr) {
                   jQuery('#edit-attributes-2').empty().append('<option value="">'+ Drupal.t('- Select -') +'</option>');
                   jQuery.each(data , function(i, v) {
                        var new_option = jQuery('<option value="'+ v['key'] +'">'+ v['value'] +'</option>');
                        jQuery('#edit-attributes-2').append(new_option);
                   });
                   jQuery('#edit-attributes-2').trigger("chosen:updated");
                   jQuery('#edit_attributes_2_chosen div.chosen-search input').val(search_value);
                });
    });
    }
});


// Update national package price in the Sim Card page.
function _assign_national_bundle() {
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

// Update international bundles summary in the bundles page.
function _assign_international_bundle() {
    var country_id = jQuery('#edit-int-region :selected').val();
    var country_name = jQuery('#edit-int-region :selected').text();
    jQuery('.internat-bundle-desc span[data-id='+ country_id +']').remove();
    jQuery('#edit-select-int-bundle .form-type-checkbox input[type=checkbox]').each(function() {
        if (jQuery(this).is(":checked")) {
            idd = jQuery(this).attr('id');
            var price = jQuery('#'+ idd).parent().parents('tr').find('td.price').html();
            var size = jQuery('#'+ idd).parent().parents('tr').find('td.size').html();
            var activationFee = jQuery('#'+ idd).parent().parents('tr').find('td.activation-fee').html();
            var html = '<span data-id="'+ country_id +'">'+ country_name +'('+ size +') - "'+ price +'" + "' + activationFee + '"</span>';
            if (jQuery('.internat-bundle-desc').html()) {
                jQuery('.internat-bundle-desc').append("\n" + html);
            }
            else {
                jQuery('.internat-bundle-desc').html(html);
            }
        }
        jQuery('#edit-attributes-5').val(jQuery('.internat-bundle-desc').text());
    });
}

function _sim_item_add_to_cart() {
    if (jQuery('#edit-attributes-2').val()) {
        jQuery('#uc-product-add-to-cart-form-30').submit();
    }
    else {
        jQuery('#edit_attributes_2_chosen, #edit-attributes-2').addClass('error');
        jQuery('html, body').animate({
            scrollTop: parseInt(jQuery("#edit_attributes_2_chosen").offset().top - 300)
        }, 1500);
        alert(Drupal.t('Number field is required.'));
    }
}