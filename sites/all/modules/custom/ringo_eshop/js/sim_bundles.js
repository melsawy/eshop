
(function ($) {
  Drupal.behaviors.national_bundles_sync = {
    attach: function (context, settings) {
      jQuery('table.nat-bundle').once('bundle-sync', function () {
        var data = get_bundles();

        // Set up old data.
        data['national'].forEach(function (bundle_id) {
          if (bundle_id == -1) return;
          
          jQuery('table.nat-bundle td[package-id="' + bundle_id + '"]').addClass("selected-cell");
        });
        _update_national_summary();


        jQuery('td:not(.package, .disabled)', this).click(function () {
          // Mark self and clean up siblings.
          jQuery(this).toggleClass('selected-cell').siblings().each(function (idx, sibling) {
            jQuery(sibling).removeClass('selected-cell');
            remove_bundle('national', jQuery(sibling).attr('package-id'));
          });

          // Update data.
          var bundle_id = jQuery(this).attr('package-id');
          if (jQuery(this).hasClass('selected-cell')) add_bundle('national', bundle_id);
          else remove_bundle('national', bundle_id);

          // Update text summary.
          _update_national_summary();
        });
      });
    }
  };

  Drupal.behaviors.international_bundles_sync = {
    attach: function (context, settings) {
      jQuery('table.int-bundle').once('bundle-sync', function () {
        var data = get_bundles();

        // Set up international summary
        jQuery('.internat-bundle-desc').html(jQuery('#edit-attributes-5').val());

        // Set up old data.
        data['international'].forEach(function (bundle_id) {
          jQuery('table.int-bundle input[value="' + bundle_id + '"]').prop("checked", true);
        });

        // Set up sync.
        jQuery('input', this).change(function () {
          // Update data.
          var bundle_id = jQuery(this).val();
          if (this.checked) add_bundle('international', bundle_id);
          else remove_bundle('international', bundle_id);

          // Update national bundle summary text.
          _update_international_summary();
        });
      });
    }
  };

})(jQuery);


function get_bundles() {
  try {
    var data = JSON.parse(jQuery('#edit-attributes-6').val());

    if (typeof data == 'object') {
      return data;
    }
  } catch (e) {}

  return {
    'national': [],
    'international': []
  };
}

function add_bundle(type, id) {
  var data = get_bundles();

  if (data[type].indexOf(id) == -1)
    data[type].push(id);

  jQuery('#edit-attributes-6').val(JSON.stringify(data));
}

function remove_bundle(type, id) {
  var data = get_bundles();

  var index = data[type].indexOf(id);
  if (index != -1)
    data[type].splice(index, 1);

  jQuery('#edit-attributes-6').val(JSON.stringify(data));
}


// Update national package price in the Sim Card page.
function _update_national_summary() {
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

  if (jQuery('table.nat-bundle td.selected-cell').length > 0) {
    jQuery('#edit-attributes-4').val(jQuery('.nat-bundle-desc').text());
  }
  else {
    jQuery('#edit-attributes-4').val('');
  }
}

// Update international bundles summary in the bundles page.
function _update_international_summary() {
  var country_id = jQuery('#edit-int-region :selected').val();
  var country_name = jQuery('#edit-int-region :selected').text();

  // Delete all current country data.
  jQuery('.internat-bundle-desc span[data-id='+ country_id +']').remove();

  jQuery('table.int-bundle .form-type-checkbox input[type=checkbox]').each(function() {
    var idd = jQuery(this).attr('id');

    if (jQuery(this).is(":checked")) {
      var price = jQuery('#'+ idd).parent().parents('tr').find('td.price').html();
      var size = jQuery('#'+ idd).parent().parents('tr').find('td.size').html();
      var activationFee = jQuery('#'+ idd).parent().parents('tr').find('td.activation-fee').html();

      // New element HTML.
      var element = '<span data-id="'+ country_id +'">'+ country_name +'('+ size +') - "'+ price +'" + "' + activationFee + '"</span>';

      var html = jQuery('.internat-bundle-desc').html();
      html += "\n" + element;
      html = html.replace(/(\r\n|\r|\n){2}/g, '$1').replace(/(\r\n|\r|\n){3,}/g, '$1\n');

      jQuery('.internat-bundle-desc').html(html);
    }

    jQuery('#edit-attributes-5').val(jQuery('.internat-bundle-desc').html());
  });
}
