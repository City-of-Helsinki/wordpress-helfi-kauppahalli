/* global Packery, Modernizr, WPTheme, google */

function parallax() {
  var scrolled = $(window).scrollTop();
  if(Modernizr.csstransforms) {
    $('.parallaxtile .bg-img').css('transform','translateY(' + -(scrolled*1.35)+'px)');
    $('.hotspotcontainer').css('transform','translateY(' + -(scrolled*1.35)+'px)');
  } else {
    $('.parallaxtile .bg-img').css('background-position','center ' + -(scrolled*1.35)+'px');
    $('.hotspotcontainer').css('top', + -(scrolled*1.35)+'px');    
  }
}

function frontpage(element) {
  var topbarheight = $('#mainnavigation').outerHeight();
  $('#frontpage-landing').css('height','1400px');
  $(element).fadeOut();
  $('html, body').animate({ scrollTop: (topbarheight)+'px' }, 600);
  $('.hotspotcontainer').addClass('show');

  var innerboxtop = $('.innerbox').offset().top;

  $(window).scroll(function(){

    var windowoffsettop = $(window).scrollTop();
    if(windowoffsettop >= innerboxtop) {
      $('.innerbox').addClass('hidden');
    }
    else {
      $('.innerbox').removeClass('hidden');
    }
  });
}

function initializeMap() {
  var latlng = new google.maps.LatLng(60.166184,24.953041);
  var mapOptions = {
    zoom: 16,
    center: latlng,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false
  };
  var map = new google.maps.Map(document.getElementById('map'), mapOptions);

  var marker = new google.maps.Marker({
      position: latlng,
      animation: google.maps.Animation.DROP,
      icon: new google.maps.MarkerImage(WPTheme.url+"/assets/img/logo-marker.png", null, null, null, new google.maps.Size(60, 75)),
      map: map
  });
}

$(document).ready(function() {
  if (Modernizr.mq('only screen and (min-width : 1024px)')) {
    parallax();
  }

  $('#frontpage-toggle').on('click', function(){
    frontpage(this);
    return false;
  });

  $('#opening-hours-modal-link').on('click', function() {
    $('#openingtimes-overlay').css({ display: 'table' });
  });

  $('#openingtimes-overlay').on('click', '#modal', function(e) {
    /* there's probably a better way to do this but this prevents the modal from closing
       when you click on the modal (as the event would bubble up to the overlay otherwise) */
    e.stopPropagation();
  });

  $('#modal-close, #openingtimes-overlay').on('click', function() {
    $('#openingtimes-overlay').css({ display: 'none' });
  });
});

$(document).keyup(function(e) {
  // esc
  if (e.keyCode == 27) {
    $('#openingtimes-overlay').css({ display: 'none' });
  }
});

$(window).scroll(function(){
  if (Modernizr.mq('only screen and (min-width : 1024px)')) {
    parallax();
  }
  var activeSection = $('.stickynav[data-magellan-expedition="fixed"] a.active').text();
  $('.map').attr('data-section', activeSection);
});

$(window).load(function(){
  if ($('#latestitems').length > 0) {
    var container = document.querySelector('#latestitems');
    var pckry = new Packery( container, {
      itemSelector: '.item',
      gutter: 10
    });
  }
  if($("#map").length > 0) {
    initializeMap();
  }
});

$(document).foundation();
