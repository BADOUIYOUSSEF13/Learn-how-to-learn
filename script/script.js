$(document).ready(function(){

    $('.fa-bars').click(function(){
      $(this).toggleClass('fa-times');
      $('.navbar').toggleClass('nav-toggle');
    });

    $(".menu-toggle").click(function(){
      $(".header").slideToggle(1000);
    });

    });
  
