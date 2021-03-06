/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages

      //Web Audio API test
      Modernizr.load({
  test: Modernizr.webaudio,
  yep : ' ',
  nope: 'assets/js/vendor/waapisim.js'
});

      //social open in new window
      $('.menu-').children().attr('target','_blank');
    if ($(window).width() <= 992){  
        $('.photo-footer-list').embedagram({
            instagram_id: 16943201,
            thumb_width: 150,
            limit: 2,
            link_type: 'img',
           });
      } 
      if ($(window).width() > 992){
      $('.photo-footer-list').embedagram({
        instagram_id: 16943201,
        thumb_width: 150,
        limit: 4,
        link_type: 'img',
       });
      }
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
      $('#top-slider-wrapper').flexslider({
	      animation: "fade"
	   });
	   
	   var setHeight = $(window).height();
	   $("#top-slider-wrapper").css({ 'height': setHeight + "px" });
	   $(window).resize(function() {
	   		var setHeight = $(window).height();
	   		$("#top-slider-wrapper").css({ 'height': setHeight + "px" });
	   });

    //Smooth Scroll
    $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

    
    }
  },

  songwriting:{
    init: function(){
      //Code here
    }
  },
  //On The Road
  page_id_72:{
    init: function(){
        //no colorbox and link to insta on mobile
      if ( $(window).width() <= 767 ) {
        $('.photos-page').embedagram({
        instagram_id: 16943201,
       thumb_width: 300,
        limit: 20,
        link_type: 'web'
      });
        } else {
      $('.photos-page').embedagram({
        instagram_id: 16943201,
       thumb_width: 300,
        limit: 20,
        link_type: 'img',
        success: function(){
          //fire colorbox on tablet and up+
          $('.photos-page a').colorbox({
            rel: 'gal',
            maxWidth: '800px',
            maxHeight: '600px',
            });
        }
       });
    }

      
    }
  },
  blog:{
    init: function() {
      // JavaScript to be fired on the home page
      $('.blog-img-container').imgLiquid();
    }
  },

  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

