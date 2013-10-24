(function($, _) {

  $(window).on('load', function () {
    var $slideshows = $.fn.flexslider && $('.flexslider');

    $slideshows && $slideshows.flexslider({
      animation: "slide",
      directionNav: false,
      manualControls: ".flex-control-nav li",
    });

    var $customer_slides = $.fn.flexslider && $('#customer-slider');

    $customer_slides.flexslider({
      animation: "fade",
      controlNav: false,
      directionNav: false,
    });

  });

})(jQuery, window);
