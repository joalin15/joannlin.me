/*
 * Scrollspy
 */
    $('body').scrollspy({ target: '#page-nav'	})

/*
 * Smooth Scrolling
 */
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

/*
 * HTML Includes
 */
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
      $("#experience").load("../html/experience.html");
    });
    $(function() {
      $("#connect").load("../html/connect.html");
    });

/*
 * Replace all SVG images with inline SVG
 */
   $(document).ready(function() {
     $('img[src$=".svg"]').each(function() {
         var $img = jQuery(this);
         var imgURL = $img.attr('src');
         var attributes = $img.prop("attributes");

         $.get(imgURL, function(data) {
             // Get the SVG tag, ignore the rest
             var $svg = jQuery(data).find('svg');

             // Remove any invalid XML tags
             $svg = $svg.removeAttr('xmlns:a');

             // Loop through IMG attributes and apply on SVG
             $.each(attributes, function() {
                console.log("found svg")
                 $svg.attr(this.name, this.value);
             });

             // Replace IMG with SVG
             $img.replaceWith($svg);
         }, 'xml');
     });
    });
