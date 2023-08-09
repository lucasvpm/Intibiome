jQuery(document).ready(function($){
  
  
  // START SITE ANIMATIONS
  new WOW().init();



  // SEARCH TOGGLE
  $(".search-toggle").on('click',function(e){
    e.preventDefault();
    $('.search-overlay').toggleClass('active');
  });
  $(".search-close").on('click',function(e){
    e.preventDefault();
    $('.search-overlay').toggleClass('active');
  });
  
  // MOBILE MENU TOGGLE
  $('.menu-toggle').on('click',function(e){
    e.preventDefault();
    $(this).toggleClass('active');
    $('.main-menu-container.mobile-version').fadeToggle();
  });
  
  $(".main-menu-container.mobile-version .menu-item-has-children a").on('click',function(e){
    e.preventDefault();
    $(this).parent().children('.sub-menu').slideToggle();
  });

  $('.products').slick({
    centerMode: false,
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          infinite:false,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          infinite:false,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
  $('.list-posts').slick({
    centerMode: false,
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          infinite:false,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          infinite:false,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
});