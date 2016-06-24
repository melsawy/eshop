jQuery(document).ready(function () {
  // All your code here
  //adjust elements for natinal bundles
  jQuery('#tabs').tabs();
  jQuery('div.attribute-4, div.attribute-5, div.attribute-6').hide();

  // update number select list
  if (typeof Drupal.settings.ringo_eshop !== "undefined" &&
    typeof Drupal.settings.ringo_eshop.eshop_number_chosen_ajax !== "undefined") {
    jQuery("#edit_attributes_2_chosen div.chosen-search input").keyup(function (e) {
      // get keycode of current keypress event
      var code = (e.keyCode || e.which);
      // do nothing if it's an arrow key
      if (code == 37 || code == 38 || code == 39 || code == 40) {
        return;
      }
      var search_value = jQuery(this).val();
      if (jQuery.isNumeric(search_value) == false) {
        return true;
      }
      jQuery.get(
        Drupal.settings.basePath + Drupal.settings.pathPrefix + 'eshop/select-number',
        {search_value: search_value},
        function (data, status, xhr) {
          jQuery('#edit-attributes-2').empty().append('<option value="">' + Drupal.t('- Select -') + '</option>');
          jQuery.each(data, function (i, v) {
            var new_option = jQuery('<option value="' + v['key'] + '">' + v['value'] + '</option>');
            jQuery('#edit-attributes-2').append(new_option);
          });
          jQuery('#edit-attributes-2').trigger("chosen:updated");
          jQuery('#edit_attributes_2_chosen div.chosen-search input').val(search_value);
        });
    });
  }
});



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