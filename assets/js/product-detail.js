$(".pro-gallery-slider").slick({
  infinite: false,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 4,
  arrow: true,
  infinite: true,
  prevArrow: ".left-btn",
  nextArrow: ".right-btn",
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

var slider = tns({
  arrowKeys: true,
  container: ".js-sliderImageViewer",
  controls: false,
  loop: false,
  mouseDrag: true,
  navContainer: ".js-imageViewerNav",
});

$(document).ready(function () {
  $(".o-slider-image-viewer__slide a").fancybox({
    loop: true, 
  });
});
