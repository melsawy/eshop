Drupal.behaviors.ISShoppingExposedFilter = {
    attach : function(context) {
        // If Exposed Filter widget is exit  
        viewsSortOrderWidget = jQuery(".views-exposed-form .views-widget-sort-order").length  ;
        viewsSortOrderByWidget = jQuery(".views-exposed-form .views-widget-sort-by").length  ;
        if(viewsSortOrderWidget > 0 && viewsSortOrderByWidget > 0 ) {
            /**
            * @Value : (DESC, ASC)
            */
            viewsSortOrderWidgetValue =  jQuery(".views-exposed-form .views-widget-sort-order select").val() ; 
            /**
            * Append DIV that will contain ASC & DESC arrows
            */
            viewsSortByArrowsWrapper  = "<div class='filter-sortby-arrow-wrapper'></div>" ;
            /**
            * To avoid multiple javascript call
            */
            if(jQuery(".filter-sortby-arrow-wrapper").length == 0) {
                jQuery(".views-exposed-form .views-widget-sort-by div.form-item-sort-by").append(viewsSortByArrowsWrapper); 
            }
            /**
            * add arrows class based on current order by value
            */
            if(viewsSortOrderWidgetValue == "ASC") {
                jQuery(".filter-sortby-arrow-wrapper").addClass("order-asc") ; 
            }else {
                 jQuery(".filter-sortby-arrow-wrapper").addClass("order-desc") ; 
            }
            
            /**
            * Handle the arrows click actions 
            */
            jQuery("div.filter-sortby-arrow-wrapper").click(function(context) {
                if(viewsSortOrderWidgetValue == "ASC") {
                    jQuery(".views-exposed-form .views-widget-sort-order select").val("DESC") ; 
                    jQuery(".views-exposed-form .views-widget-sort-order select").change() ; 
                }else{
                    jQuery(".views-exposed-form .views-widget-sort-order select").val("ASC") ; 
                    jQuery(".views-exposed-form .views-widget-sort-order select").change() ;                     
                }
            });
            
            console.log("Expost Filter Exist") ;
            console.log(viewsSortOrderWidgetValue) ;
        }
    }
}