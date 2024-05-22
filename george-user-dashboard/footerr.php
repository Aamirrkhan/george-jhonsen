 <!--**********************************
            Footer start
        ***********************************-->
 <div class="footer">
   <div class="container-fluid">
     <div class="col-12">
       <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 set-justify">
         <p class="copyright-color">© Copyright <script>
             document.write(new Date().getFullYear())
           </script> <strong>1993-2023 N Sale Enthusiast.</strong> All rights Reserved</p>
         <p class="copyright-color">Designed & Developed by <strong><a href="https://webdesignglory.com/">Web Design Glory.</a></strong></p>
       </div>
     </div>
   </div>
 </div>
 <!--**********************************
            Footer end
        ***********************************-->
 </div>
 <!--**********************************
        Main wrapper end
    ***********************************-->

 <!--**********************************
        Scripts
    ***********************************-->
 <!-- Required vendors -->
 <script src="public/vendor/global/global.min.js" type="text/javascript"></script>
 <script src="public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
 <script src="public/vendor/chart.js/Chart.bundle.min.js" type="text/javascript"></script>
 <script src="public/vendor/owl-carousel/owl.carousel.js" type="text/javascript"></script>
 <script src="public/vendor/peity/jquery.peity.min.js" type="text/javascript"></script>
 <script src="public/js/dashboard/dashboard-1.js" type="text/javascript"></script>
 <script src="public/js/custom.min.js" type="text/javascript"></script>
 <script src="public/js/deznav-init.js" type="text/javascript"></script>
 <script src="public/js/demo.js" type="text/javascript"></script>
 <script src="public/js/styleSwitcher.js" type="text/javascript"></script>

 <script>
   function carouselReview() {
     /*  testimonial one function by = owl.carousel.js */
     function checkDirection() {
       var phpClassName = document
         .getElementsByTagName("php")[0]
         .getAttribute("class");
       if (phpClassName == "rtl") {
         return true;
       } else {
         return false;
       }
     }
     jQuery(".testimonial-one").owlCarousel({
       loop: true,
       autoplay: true,
       margin: 15,
       nav: false,
       dots: false,
       left: true,
       rtl: checkDirection(),
       navText: ["", ""],
       responsive: {
         0: {
           items: 1,
         },
         800: {
           items: 2,
         },
         991: {
           items: 2,
         },

         1200: {
           items: 2,
         },
         1600: {
           items: 2,
         },
       },
     });
     jQuery(".testimonial-two").owlCarousel({
       loop: true,
       autoplay: true,
       margin: 15,
       nav: false,
       dots: true,
       left: true,
       rtl: checkDirection(),
       navText: ["", ""],
       responsive: {
         0: {
           items: 1,
         },
         600: {
           items: 2,
         },
         991: {
           items: 3,
         },

         1200: {
           items: 3,
         },
         1600: {
           items: 4,
         },
       },
     });
   }
   jQuery(window).on("load", function() {
     setTimeout(function() {
       carouselReview();
     }, 1000);
   });
 </script>
 </body>

 <!-- Mirrored from jobie.dexignzone.com/laravel/demo/index by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2024 23:11:51 GMT -->
 </php>