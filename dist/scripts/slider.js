$(document).ready(function() {

  //Init the carousel
  $(".owl-carousel").owlCarousel({

    // move navContainer outside the primary owl wrapper
    navContainer: '#customNav',
    // move dotsContainer outside the primary owl wrapper
    dotsContainer: '#customDots',
    
    loop: true,
    lazyLoad: true,
    items:1,
    margin:0,
    autoplay:true,
    autoplayTimeout:10000,
    stagePadding:0,
    mouseDrag: false,
    smartSpeed:500,
    items: 1
});

});