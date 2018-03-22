$(document).ready(function(){
  // Btn-burger
  $(".hamburger").click(function(){
    $("header").toggleClass("is-active");
  });


    // img poster
  $('.aff').magnificPopup({type:'image'});
});