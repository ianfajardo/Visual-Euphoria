$('#gallery-menu-trigger').click(function() {
  var gallery = $('.gallery-menu');
  if(gallery.is(":visible")){
    gallery.slideUp('slow');
  }
  else{
    gallery.slideDown('slow');
  }
});

$("#menu-icon").on('click', function(){
  $(".navigation").toggle();
});

$(window).on('resize', function(){
  if($(window).width() > 992){
    $(".navigation").show();
  }
  else{
    $(".navigation").hide();
  }
});