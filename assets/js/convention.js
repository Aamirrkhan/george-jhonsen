$('.slider-gallery').slick({
  centerMode: true,
  slidesToShow: 5,
  arrows: false,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        slidesToShow: 1
      }
    }
  ]
});
			