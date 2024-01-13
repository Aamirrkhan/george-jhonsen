// $(".search-btn").click(function () {
//   $(".search-input-field").addClass("active");
// });
// $(".remove-search").click(function () {
//   $(".search-input-field").removeClass("active");
// });

// Navebar Active

$(".navbar-btn").click(function () {
  $(".menubar").fadeIn();
  $(".menubar").addClass("active");
});

// Banner Slider

$(".banner-slider").slick({
  dots: true,
  fade: true,
  arrows: false,
  cssEase: "linear",
  speed: 1000,
  autoplay: true,
  autoplaySpeed: 2000,
  cssEase: 'linear',
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: true,
});

$(document).ready(function () {
  var counters = $(".count");
  var countersQuantity = counters.length;
  var counter = [];

  for (i = 0; i < countersQuantity; i++) {
    counter[i] = parseInt(counters[i].innerHTML);
  }

  var count = function (start, value, id) {
    var localStart = start;
    setInterval(function () {
      if (localStart < value) {
        localStart++;
        counters[id].innerHTML = localStart;
      }
    }, 5);
  };

  for (j = 0; j < countersQuantity; j++) {
    count(0, counter[j], j);
  }
});

// Cookies
$(".close-menu").click(function () {
  $("#div3").fadeIn(3000);
  $(".menubar").removeClass("active");
});
$(".remove-ok").click(function () {
  $(".cookies-area").css('display','none');
});


// Stop Dropdown
// const links = document.querySelectorAll(".set-links-loop.dropdown-content a");
// const yesLink = document.getElementById("yes-link");
// const popupCheck = document.querySelector('.rout-popup');
// const noChecked = document.querySelector('#nocheck');

// let dataValueChecked = yesLink;
// links.forEach((link) => {
//   let dataValue = link.getAttribute("data-value");
//   console.log(dataValue);
//   link.addEventListener("click", function (e) {
//     e.preventDefault();
//     popupCheck.classList.add('active');
//     dataValueChecked.href = dataValue;
//   });
// });

// noChecked.addEventListener('click', function(e){
//   e.preventDefault();
//   popupCheck.classList.remove('active');
// })