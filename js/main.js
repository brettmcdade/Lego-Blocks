$( document ).ready(function() {

hljs.configure({
  tabReplace: '    ', // 4 spaces
                      // … other options aren't changed
})
hljs.initHighlighting();

// swap svg to png for browsers that won't support it
if (!Modernizr.svg) {
    $('img[src$=".svg"]').each(function()
    {
        $(this).attr('src', $(this).attr('src').replace('.svg', '.png'));
    });
}

/*
  Full size Home Banner
*/
supersizeDatBanner = function() {
  var h = $(window).height();
  $('.hp-banner').height(h);
  //var controlerH = $('.hp-banner .bx-wrapper .bx-controls-direction a').height();
  //$('.hp-banner .bx-controls-direction').css("margin-top", -(h/2) - controlerH);
}
supersizeDatBanner();



// Set up variables
var isMobile = false,
    isDesktop = false;

/* 
  Here we create a function to check if an element is visible on the page. If it is add desktop class
  and set up varibales. If not add class mobile and add coresponding variables
*/
getLayout = function(htmlElement){
  if ($(htmlElement).css("display") == "none" ){
    $("body").removeClass("desktop-layout").addClass("mobile-layout");
    isMobile = true;
    isDesktop = false;   
  }
  else {
    $("body").removeClass("mobile-layout").addClass("desktop-layout");
    isMobile = false;
    isDesktop = true;
  }
}



// On window load set desktop/mobile class and check equal height
$(window).load(function() {
  getLayout('.show-medium-up');
});

// On window resize set desktop/mobile class and resize background image
$(window).resize(function(){
  supersizeDatBanner();
  getLayout('.show-medium-up');

  //$('body').removeClass('overlay-on');
  //$('.overlay').hide();
  //$('.modal').hide();
});


// show form modal on button click
$('.js-open-form-overlay').click( function() {
  $('.overlay').toggleClass('is-hidden');
  $('.overlay').toggleClass('toggle-modal');
});

// close modal on click
$('.modal--close').click( function() {
  $('.overlay').toggleClass('is-hidden');
  $('.overlay').toggleClass('toggle-modal');
});




// Animate nav bar on home page
$(window).scroll(function(){
  var x = $('.primary-navigation').height();
  if($(this).scrollTop()>=x){
    $('.primary-navigation__bar').addClass('drop-it');
  } else {
    $('.primary-navigation__bar').removeClass('drop-it');
  }
});


/* 
  Accordion Tabs  */

  // Offcanvas Nav 
  var $trigger = $('.sidebar-nav .accordion__trigger'),
      $content = $('.sidebar-nav .accordion__body');
      $content.hide();

  
    $trigger.click(function () {
      var $this = $(this),
      $relatedContent = $this.next();

        if($relatedContent.is(':visible')) { // If the tab is already open
          $relatedContent.slideUp('fast'); // Close all boxes
          $this.removeClass('active'); // Remove active class from all headers
        } else {
          //$content.slideUp('fast'); // Hiding this so user can have more than one tab open at one time
          $trigger.removeClass('active'); // Add active class to currently clicked panel
          //Open related tab
          $relatedContent.slideDown('fast'); // Show panel content
          $this.addClass('active');
        }
    }); // end click


    // Home Page Tab - Mobile

    var $triggerHomeTabMobile = $('.accordion--home-tabs__small .accordion__trigger'),
      $contentHomeTabMobile = $('.accordion--home-tabs__small .accordion__body');

    $triggerHomeTabMobile.click(function () {
      var $this = $(this),
      $relatedContent = $this.next();

      if($relatedContent.is(':visible')) { // If the tab is already open
        $relatedContent.slideUp('fast'); // Close all boxes
        $this.removeClass('active'); // Remove active class from all headers
      } else {
        $relatedContent.slideDown('fast'); // Show panel content
        $this.addClass('active');
      }
    }); // end click

    // Home Page Tab - Tablet and Desktop
    var $triggerHomeTabMedium = $('.accordion--home-tabs__medium .accordion__trigger'),
      $contentHomeTabMedium = $('.accordion--home-tabs__medium .accordion__body');

      $('.accordion--home-tabs__medium .accordion-to-tab').children('li').first().children('.accordion__trigger').addClass('active')
        .next().addClass('is-open').show();

      $('.accordion--home-tabs__medium').on('click', '.accordion-to-tab .accordion__trigger', function() {
        if (!$(this).hasClass('active')) {
          $('.accordion--home-tabs__medium .accordion-to-tab .is-open').removeClass('is-open').hide();
          $(this).next().toggleClass('is-open').toggle();
          $('.accordion--home-tabs__medium .accordion-to-tab').find('.active').removeClass('active');
          $(this).addClass('active');
          $(this).parent().addClass('active');
        } else {
          //$('.accordion-to-tab .is-open').removeClass('is-open').hide();
          //$(this).removeClass('active');
        }
     });


/*
    var $trigger2 = $('.accordion-to-tab .accordion__trigger'),
      $content2 = $('.accordion-to-tab .accordion__body');


    $('.accordion-to-tab').children('li').first().children('.accordion__trigger').addClass('active')
        .next().addClass('is-open').show();

    $trigger2.click(function () {
      var $this = $(this),
      $relatedContent = $this.next();

      if(isMobile) {
        if($relatedContent.is(':visible')) { // If the tab is already open
          $relatedContent.slideUp('fast'); // Close all boxes
          $this.removeClass('active'); // Remove active class from all headers
        } else {
          //$content.slideUp('fast'); // Hiding this so user can have more than one tab open at one time
          $trigger2.removeClass('active'); // Add active class to currently clicked panel
          //Open related tab
          $relatedContent.slideDown('fast'); // Show panel content
          $this.addClass('active');
        }
      }
      if(isDesktop) {

        $('.accordion-to-tab').on('click', '.accordion__trigger', function() {
        
          if (!$(this).hasClass('active')) {
            $('.accordion-to-tab .is-open').removeClass('is-open').hide();
            $(this).next().toggleClass('is-open').toggle();
            $('.accordion-to-tab').find('.active').removeClass('active');
            $(this).addClass('active');
          } else {
            //$('.accordion-to-tab .is-open').removeClass('is-open').hide();
            //$(this).removeClass('active');
          }
       });
      }
    }); // end click
*/


/* 
  Toggle Off-canvas Menu  */

   var $page = $('.layout-page-wrap, .primary-navigation'),
       $offCanvasMenu = $('.off-canvas'),
       $switch = $('.menu-toggle');

   $switch.on('touchstart click', function(e) {
      e.preventDefault();
      $page.toggleClass("open");
      $offCanvasMenu.toggleClass("open");
      $(this).toggleClass("open");
   });
      $('.layout-page-wrap').on('touchstart click', function() {
      $page.removeClass("open");
      $offCanvasMenu.removeClass('open');
      $switch.removeClass("open");
   });


/*
  Smooth Scrolling -
  Using this on back to top links.
  */
  var smallMenuHeight = 50,
      largeMenuHeight = 77;

  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length && isDesktop) {
        $('html,body').animate({
          scrollTop: target.offset().top - largeMenuHeight
        }, 1000);
        return false;
      }
      else if (target.length && isMobile) {
        $('html,body').animate({
          scrollTop: target.offset().top - smallMenuHeight
        }, 1000);
        return false;
      }
    }
  });




// Bx Slider
var slider = $('.slideshow__items').bxSlider({
    mode: 'horizontal',
    speed: 500,
    
    onSliderLoad: function(){
      //
    }
});

var hpslider = $('.slideshow--hp__items').bxSlider({
    mode: 'fade',
    speed: 1500,
    auto: true,
    pause: 8000,
    onSliderLoad: function(){
      //
    }
});

// Hover icons on Services Overview Page
$(".no-touch .icon-list__wrap").hover(function() {
  $(this).toggleClass('toggle-service');
});

/*
  Replace video thumbnail with youtube content
  */
$('.js-video-play').click(function() {
    var video = '<div class="video_container"><iframe src="' + $(this).attr('data-video') +'?autoplay=1" frameborder="0" width="830" height="482"></iframe></div>';
    $(this).replaceWith(video);
});

$('.default').dropkick();



// Include the Google Maps API library - required for embedding maps
  
// The latitude and longitude of your business / place
var position = [34.031954, -84.055777];
 
function showGoogleMaps() {
 
    var latLng = new google.maps.LatLng(position[0], position[1]);

    google.maps.Map.prototype.setCenterWithOffset= function(latlng, offsetX, offsetY) {
        var map = this;
        var ov = new google.maps.OverlayView(); 
        ov.onAdd = function() { 
            var proj = this.getProjection(); 
            var aPoint = proj.fromLatLngToContainerPixel(latlng);
            aPoint.x = aPoint.x+offsetX;
            aPoint.y = aPoint.y+offsetY;
            map.setCenter(proj.fromContainerPixelToLatLng(aPoint));
        }
        ov.draw = function() {}; 
        ov.setMap(this); 
    };
 
    var mapOptions = {
        zoom: 16, // initialize zoom level - the max value is 21
        streetViewControl: false, // hide the yellow Street View pegman
        scaleControl: true, // allow users to zoom the Google Map
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: latLng,
        panControl: false,
        zoomControl: false
    };

    var image = '../images/map-marker.png';
 
    map = new google.maps.Map(document.getElementById('banner__img-googlemaps'),
        mapOptions);

    if(isDesktop) {
      map.setCenterWithOffset(latLng, -150, -70);
    } else {
      map.setCenterWithOffset(latLng, 0, 0);
    }
 
    // Show the default red marker at the location
    marker = new google.maps.Marker({
        position: latLng,
        map: map,
        icon: image
    });

    // center map on resize
    google.maps.event.addDomListener(window, "resize", function() {
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center); 

        if(isDesktop) {
          map.setCenterWithOffset(latLng, -150, -70);
        } else {
          map.setCenterWithOffset(latLng, 0, 0);
        }
    });
}
 
google.maps.event.addDomListener(window, 'load', showGoogleMaps);




/*
  Begin: Schedule a Tour Form Submission */

  // Change value of checkbox if user chooses to opt in or opt out; Default is yes
  $('#userReceiveUpdates_tour').change(function() {
      $(this).val(($(this).is(':checked')) ? "Yes" : "No");
  });

  $("#form_tour").submit(function(){
    var hasErrors = false;

    // Validate Name
    var firstName = $("#userFirstName_tour");
    if (firstName.val()=='') {
      firstName.parent().addClass('has-error');
      firstName.next('.form__error-message').html('Please provide first name');
      hasErrors = true;                            
    }


    // Validate the e-mail and phone number. A user can enter either an email address or a phone number.
    var email = $("#userEmail_tour");
    var phone = $("#userPhone_tour"); 

    if(email.val() == "" && phone.val() == "") {
      email.parent().addClass('has-error');
      phone.parent().addClass('has-error');
      email.next('.form__error-message').html('Please provide a valid email');
      phone.next('.form__error-message').html('Please provide phone number');
      hasErrors = true;
    } else if ( (email.val() != "") && (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email.val()))) {
      email.parent().addClass('has-error');
      email.next('.form__error-message').html('Please provide a valid email');
      hasErrors = true;
    } else if ( (phone.val() != "") && (!/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/.test(phone.val()))) {
      phone.parent().addClass('has-error');
      phone.next('.form__error-message').html('Please provide phone number');
      hasErrors = true;
    }
    else {
      email.parent().removeClass('has-error');
      phone.parent().removeClass('has-error');
      email.next('.form__error-message').html('');
      phone.next('.form__error-message').html('');
    }

    //if any inputs on the page have the class 'needsfilled' the form will not submit
    if (hasErrors) {
        return false;
    } else {
      var action = $(this).attr('action');

      $("#message_tour").slideUp(750,function() {
        $('#message_tour').hide();
        $('#saveForm_tour')
          .after('<img src="/images/loader.GIF" class="loader" />')
          .attr('disabled','disabled')
          .css({'display':'none'});
        $.post(action, {
          firstName: $('#userFirstName_tour').val(),
          lastName: $('#userLastName_tour').val(),
          email: $('#userEmail_tour').val(),
          phone: $('#userPhone_tour').val(),
          receiveInfo: $('#userReceiveUpdates_tour').val()
        },

        function(data){
          if(data.match('success') != null) {
            $('.form--schedule-tour .form__content').fadeOut('slow', function() {
                document.getElementById('message_tour').innerHTML = data;               
                $('#message_tour').show();
                $('#saveForm_tour').fadeOut('slow',function(){$(this).remove()});
                $('#saveForm_tour').removeAttr('disabled');
            });
          }
          else if (data.match('server-error') != null) {
            $('.form--schedule-tour .form__content').fadeOut('slow', function() {
                document.getElementById('message_tour').innerHTML = data;               
                $('#message_tour').show();
                $('#saveForm_tour').fadeOut('slow',function(){$(this).remove()});
                $('#saveForm_tour').removeAttr('disabled');
            });
          }
        }

      );
      // end slideUp Form

      });

      return false;
    }
  }); // end Submit Function

/*
  End: Schedule a Tour Form Submission */


/*
  Begin: Contact Form Submission */

  // Change value of checkbox if user chooses to opt in or opt out; Default is yes
  $('#userReceiveUpdates_contact').change(function() {
      $(this).val(($(this).is(':checked')) ? "Yes" : "No");
  });



  $("#form_contact").submit(function(){
    var hasErrors = false;

    // Validate Name
    var firstName = $("#userFirstName_contact");
    if (firstName.val()=='') {
      firstName.parent().addClass('has-error');
      firstName.next('.form__error-message').html('Please provide first name');
      hasErrors = true;                            
    }


    // Validate the e-mail and phone number. A user can enter either an email address or a phone number.
    var email = $("#userEmail_contact");
    var phone = $("#userPhone_contact"); 

    if(email.val() == "" && phone.val() == "") {
      email.parent().addClass('has-error');
      phone.parent().addClass('has-error');
      email.next('.form__error-message').html('Please provide a valid email');
      phone.next('.form__error-message').html('Please provide phone number');
      hasErrors = true;
    } else if ( (email.val() != "") && (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email.val()))) {
      email.parent().addClass('has-error');
      email.next('.form__error-message').html('Please provide a valid email');
      hasErrors = true;
    } else if ( (phone.val() != "") && (!/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/.test(phone.val()))) {
      phone.parent().addClass('has-error');
      phone.next('.form__error-message').html('Please provide phone number');
      hasErrors = true;
    }
    else {
      email.parent().removeClass('has-error');
      phone.parent().removeClass('has-error');
      email.next('.form__error-message').html('');
      phone.next('.form__error-message').html('');
    }

    //if any inputs on the page have the class 'needsfilled' the form will not submit
    if (hasErrors) {
        return false;
    } else {
      var action = $(this).attr('action');

      $("#message_contact").slideUp(750,function() {
        $('#message_contact').hide();
        $('#saveForm_contact')
          .after('<img src="/images/loader.GIF" class="loader" />')
          .attr('disabled','disabled')
          .css({'display':'none'});
        $.post(action, {
          firstName: $('#userFirstName_contact').val(),
          lastName: $('#userLastName_contact').val(),
          email: $('#userEmail_contact').val(),
          phone: $('#userPhone_contact').val(),
          about: $('#userAboutYou_contact').val(),
          interest: $('#userInterest_contact').val(),
          message: $('#userMessage_contact').val(),
          receiveInfo: $('#userReceiveUpdates_contact').val()
        },

        function(data){
          if(data.match('success') != null) {
            $('.form--contact .form__content').fadeOut('slow', function() {
                document.getElementById('message_contact').innerHTML = data;               
                $('#message_contact').show();
                $('#saveForm_contact').fadeOut('slow',function(){$(this).remove()});
                $('#saveForm_contact').removeAttr('disabled');
            });
          }
          else if (data.match('server-error') != null) {
            $('.form--contact .form__content').fadeOut('slow', function() {
                document.getElementById('message_contact').innerHTML = data;               
                $('#message_contact').show();
                $('#saveForm_contact').fadeOut('slow',function(){$(this).remove()});
                $('#saveForm_contact').removeAttr('disabled');
            });
          }
        }

      );
      // end slideUp Form

      });

      return false;
    }
  }); // end Submit Function

/*
  End: Contact Form Submission */


/*
  Begin: Ask a question Form Submission */

  $("#form_question").submit(function(){
    var hasErrors = false;

    // Validate Name
    var firstName = $("#userFirstName_question");
    if (firstName.val()=='') {
      firstName.parent().addClass('has-error');
      firstName.next('.form__error-message').html('Please provide first name');
      hasErrors = true;                            
    }


    // Validate the e-mail and phone number. A user can enter either an email address or a phone number.
    var email = $("#userEmail_question");
    var phone = $("#userPhone_question"); 

    if(email.val() == "" && phone.val() == "") {
      email.parent().addClass('has-error');
      phone.parent().addClass('has-error');
      email.next('.form__error-message').html('Please provide a valid email');
      phone.next('.form__error-message').html('Please provide phone number');
      hasErrors = true;
    } else if ( (email.val() != "") && (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email.val()))) {
      email.parent().addClass('has-error');
      email.next('.form__error-message').html('Please provide a valid email');
      hasErrors = true;
    } else if ( (phone.val() != "") && (!/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/.test(phone.val()))) {
      phone.parent().addClass('has-error');
      phone.next('.form__error-message').html('Please provide phone number');
      hasErrors = true;
    }
    else {
      email.parent().removeClass('has-error');
      phone.parent().removeClass('has-error');
      email.next('.form__error-message').html('');
      phone.next('.form__error-message').html('');
    }

    //if any inputs on the page have the class 'needsfilled' the form will not submit
    if (hasErrors) {
        return false;
    } else {
      var action = $(this).attr('action');

      $("#message_question").slideUp(750,function() {
        $('#message_question').hide();
        $('#saveForm_question')
          .after('<img src="/images/loader.GIF" class="loader" />')
          .attr('disabled','disabled')
          .css({'display':'none'});
        $.post(action, {
          firstName: $('#userFirstName_question').val(),
          email: $('#userEmail_question').val(),
          phone: $('#userPhone_question').val(),
          comment: $('#userQuestion_question').val()
        },

        function(data){
          if(data.match('success') != null) {
            $('.form--question .form__content').fadeOut('slow', function() {
                document.getElementById('message_question').innerHTML = data;               
                $('#message_question').show();
                $('#saveForm_question').fadeOut('slow',function(){$(this).remove()});
                $('#saveForm_question').removeAttr('disabled');
            });
          }
          else if (data.match('server-error') != null) {
            $('.form--question .form__content').fadeOut('slow', function() {
                document.getElementById('message_question').innerHTML = data;               
                $('#message_question').show();
                $('#saveForm_question').fadeOut('slow',function(){$(this).remove()});
                $('#saveForm_question').removeAttr('disabled');
            });
          }
        }

      );
      // end slideUp Form

      });

      return false;
    }
  }); // end Submit Function

/*
  End: Ask a question Form Submission */


  
  // Global Forms

  // Clears any fields in the form when the user clicks on them
  $(":input").click(function(){   
    $(this).parent().removeClass('has-error')
      .removeClass('has-success'); 
    $(this).next('.form__error-message').html('');                              
  });

  // Clear error message if a user clicks it
  $(".form__error-message").click(function(){ 
    $(this).parent().removeClass('has-error')
      .removeClass('has-success'); 
    $(this).html('');  
    $(this).prev(':input').focus();                            
  });




}); //end