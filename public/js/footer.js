$(document).ready(function() {
  $('p').mouseover(function() {
    $(this).addClass("animated bounceIn");
  });
  $('p').mouseleave(function() {
    $(this).removeClass("animated bounceIn");
  });
});
