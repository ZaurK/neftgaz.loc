$(function(){

$('#lcont').on('click', function(e){
  $('html,body').stop().animate({ scrollTop: $('#map').offset().top }, 1000);
  e.preventDefault();
});

$('#lmap').on('click', function(e){
  $('html,body').stop().animate({ scrollTop: $('#map').offset().top }, 1000);
  e.preventDefault();
});


$('#lmetal').on('click', function(e){
  $('html,body').stop().animate({ scrollTop: $('#metal').offset().top }, 1000);
  e.preventDefault();
});
$('#lenerg').on('click', function(e){
  $('html,body').stop().animate({ scrollTop: $('#energ').offset().top }, 1000);
  e.preventDefault();
});
$('#lstroy').on('click', function(e){
  $('html,body').stop().animate({ scrollTop: $('#stroy').offset().top }, 1000);
  e.preventDefault();
});
$('#lugol').on('click', function(e){
  $('html,body').stop().animate({ scrollTop: $('#ugol').offset().top }, 1000);
  e.preventDefault();
});
$('#lneft').on('click', function(e){
  $('html,body').stop().animate({ scrollTop: $('#neft').offset().top }, 1000);
  e.preventDefault();
});

});