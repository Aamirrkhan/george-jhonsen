$(".search-btn").click(function () {
  $(".search-input-field").addClass("active");
});
$(".remove-search").click(function () {
  $(".search-input-field").removeClass("active");
});

// Navebar Active

$(".navbar-btn").click(function () {
  $(".menubar").fadeIn();
  $(".menubar").addClass("active");
});

// Column count 2
$(".grid-btn").click(function () {
  $('.product-list').addClass("active");
  $('.auction-product-list').css("column-count", "2");
});
$(".list-btn-show").click(function () {
  $('.product-list').removeClass("active");
  $('.auction-product-list').css("column-count", "1");
});


$(".loadmore-btns").click(function () {
  $('.auction-member-login').addClass("active");
});
$("a.bg-gray, a.custom-bid.bg-gray").click(function () {
  $('.auction-member-login').addClass("active");
});



// Banner Slider

$(".banner-slider").slick({
  dots: true,
  fade: true,
  arrows: false,
  cssEase: "linear",
  speed: 1000,
  autoplay: true,
  autoplaySpeed: 1000,
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


// Feature Images
$(".mission-img").slick({
  dots: false,
  arrows: true,
  prevArrow: ".left-featured",
  nextArrow: ".right-featured",
  speed: 1000,
  autoplay: true,
  autoplaySpeed: 2000,
  cssEase: 'linear',
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

// Logo Area Slider

$(".logo-area").slick({
  dots: false,
  arrows: false,
  speed: 1000,
  autoplay: true,
  autoplaySpeed: 2000,
  cssEase: 'linear',
  slidesToShow: 5,
  slidesToScroll: 5,
  infinite: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
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


   // Function to remove the cookies area
   function removeCookiesArea() {
    document.getElementById('cookies-area').remove();
    localStorage.setItem('cookiesAccepted', 'true');
}

document.addEventListener('DOMContentLoaded', function () {
    const cookiesAccepted = localStorage.getItem('cookiesAccepted');
    if (cookiesAccepted === 'true') {
        document.getElementById('cookies-area').remove();
    }
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


