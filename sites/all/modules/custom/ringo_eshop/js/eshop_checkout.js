Drupal.behaviors.eshopCheckout = {
    attach : function(context) {
        jQuery("table.eshop-checkout-sroll-table td.checkout-scroll-tab").click(function() {
            targetId = jQuery(this).attr("data-target") ; 
            jQuery("html, body").animate({scrollTop: jQuery('#' + targetId).offset().top });
        });   
    }
}