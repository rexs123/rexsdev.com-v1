$(".side-nav").height($('body').height());
$(window).resize(function(){
  $(".side-nav").height($('body').height());
});
$('.collapse').on('show.bs.collapse', function(){
  $(".site-nav").height($('body').height());
});
