// Scrollspy
$('body').scrollspy({ target: '#page-nav'	})

// Smooth scrolling
$('a[href*="#"]').click(function(event) {
  if (
    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
    &&
    location.hostname == this.hostname
  ) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000, function() {
        var $target = $(target);
        $target.focus();
        if ($target.is(":focus")) {
          return false;
        } else {
          $target.attr('tabindex','-1');
          $target.focus();
        };
      });
    }
  }
});

// HTML Includes
$(function() {
  $("#home").load("../html/home.html");
});
$(function() {
  $("#about-me").load("../html/about-me.html");
});
$(function() {
  $("#projects").load("../html/projects.html");
});
$(function() {
  $("#connect").load("../html/connect.html");
});
