export default {
  init() {
    // JavaScript to be fired on all pages
    if ($(window).width() <= 800) {
      $("#test-right").each(function() {
          $(this).removeClass("text-right")
          $(this).find(".testimonial_image").prependTo(this, ".testimonial_text");
      });
    }
    if ($(window).width() <= 9999) {
      $("#navmover").appendTo(".page-header");
    } else {
      $("#navmover").appendTo("#appendme");
    }



    $(".nav-link").prop('title','ABOUT').click(function() {
      $('html,body').animate({
        scrollTop: $("#about").offset().top},
        'slow');
    });
    $(".nav-link").prop('title','INFORMATIE').click(function() {
      $('html,body').animate({
        scrollTop: $("#advertisers").offset().top},
        'slow');
    });
    $(".nav-link").prop('title','PUBLISHERS').click(function() {
      $('html,body').animate({
        scrollTop: $("#publishers").offset().top},
        'slow');
    });
    $(".nav-link").prop('title','CONTACT').click(function() {
      $('html,body').animate({
        scrollTop: $("#contact").offset().top},
        'slow');
    });

    

    $( ".nav-link" ).on( "click", function() {
      if ( $( this ).is( ":contains('ABOUT')" ) ) {
        $('html,body').animate({
          scrollTop: $("#about").offset().top},
          'slow');
        }
    });
    $( ".nav-link" ).on( "click", function() {
      if ( $( this ).is( ":contains('ADVERTISERS')" ) ) {
        $('html,body').animate({
          scrollTop: $("#advertisers").offset().top},
          'slow');
        }
    });
    $( ".nav-link" ).on( "click", function() {
      if ( $( this ).is( ":contains('PUBLISHERS')" ) ) {
        $('html,body').animate({
          scrollTop: $("#publishers").offset().top},
          'slow');
        }
    });
    $( ".nav-link" ).on( "click", function() {
      if ( $( this ).is( ":contains('CONTACT')" ) ) {
        $('html,body').animate({
          scrollTop: $("#contact").offset().top},
          'slow');
        }
    });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};