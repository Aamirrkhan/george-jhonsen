<?php
include './assets/componnets/header.php';
?>
<style>

</style>
<section class="organiz-banner auction-banner" style="background: url(assets/images/banner-product-page.png); padding: 60px !important;">

</section>

<section class="pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="humber-menu">
                    <li><a href=".">Home</a></li>
                    <li><i class="fa-solid fa-angle-right"></i></li>
                    <li><a href="auction.php">Auction</a></li>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="thumbnail_slider">
                            <!-- Primary Slider Start-->
                            <div id="primary_slider">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <img src="assets/images/auction-pro-2.png" class="">
                                        </li>
                                        <li class="splide__slide">
                                            <img src="assets/images/auction-pro-2.png" class="">
                                        </li>
                                        <li class="splide__slide">
                                            <img src="assets/images/auction-pro-2.png" class="">
                                        </li>
                                        <li class="splide__slide">
                                            <img src="assets/images/auction-pro-2.png" class="">
                                        </li>
                                        <li class="splide__slide">
                                            <img src="assets/images/auction-pro-2.png" class="">
                                        </li>
                                        <li class="splide__slide">
                                            <img src="assets/images/auction-pro-2.png" class="">
                                        </li>
                                        <li class="splide__slide">
                                            <img src="assets/images/auction-pro-2.png" class="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Primary Slider End-->
                            <!-- Thumbnal Slider Start-->
                            <div id="thumbnail_slider">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <img src="assets/images/auction-pro-2.png" class="">
                                        </li>
                                        <li class="splide__slide">
                                            <img src="assets/images/auction-pro-2.png" class="">
                                        </li>
                                        <li class="splide__slide">
                                            <img src="assets/images/auction-pro-2.png" class="">
                                        </li>
                                        <li class="splide__slide">
                                            <img src="assets/images/auction-pro-2.png" class="">
                                        </li>
                                        <li class="splide__slide">
                                            <img src="assets/images/auction-pro-2.png" class="">
                                        </li>
                                        <li class="splide__slide">
                                            <img src="assets/images/auction-pro-2.png" class="">
                                        </li>
                                        <li class="splide__slide">
                                            <img src="assets/images/auction-pro-2.png" class="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Thumbnal Slider End-->
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="product-details">
                            <h2 class="auc-product-hd">Lorem Ipsum Dummy Text</h2>
                            <h4 class="auc-price">Start Bidding: $600.00</h4>
                            <h6 class="auc-primary">Item Description:</h6>
                            <p class="auc-discrip">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                            <h6 class="auc-primary">Time Left:</h6>
                            <div class="clock-area detail-page">
                                <ul id="timecounter" class="counter-flex">
                                    <li class="circle"><span class="days"></span>DAYS</li>
                                    <li class="circle"><span class="hours"></span>HOURS</li>
                                    <li class="circle"><span class="minutes"></span>MINS</li>
                                    <li class="circle"><span class="seconds"></span>SECS</li>
                                </ul>
                            </div>
                            <h6 class="auc-primary">Ending On: <span>August 31, 2025 11:42 am</span></h6>

                            <div class="buttons-number">
                                <div class="input-price">
                                    <i class="fa-solid fa-dollar-sign"></i> <input type="number" class="placeyou-bid" placeholder="Place Your Bid here">
                                </div>
                                <div class="custom-bid-btn">
                                    <a href="./auction-bid.php" class="custom-bid">Custom Bid</a>
                                </div>
                                <div class="buynow-btn">
                                    <a href="#!" class="custom-bid bg-gray">Buy Now</a>
                                </div>
                            </div>
                            <h6 class="auc-primary"><span>(Enter more than or equal to:<span> $600.00</span>)</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="products-tabs-reviews">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="tabs-pro">
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'Description')" id="defaultOpen">Description</button>
                        <button class="tablinks" onclick="openCity(event, 'Bids')">Bids</button>
                        <button class="tablinks" onclick="openCity(event, 'Reviews')">Reviews <span>(0)</span></button>
                        <button class="tablinks" onclick="openCity(event, 'Private')">Private message</button>
                    </div>

                    <div class="content-tabs">
                        <div id="Description" class="tabcontent">
                            <h3>Item Description:</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>

                        <div id="Bids" class="tabcontent">
                            <h3>Total Bids Placed:</h3>
                            <div class="d-flex align-item-start justify-content-between gap-4">
                                <div class="layer-birds">
                                    <h5>Bidder Name</h5>
                                    <p>Lorem Ipsum Dummy</p>
                                    <p>Lorem Ipsum Dummy</p>
                                    <p>Lorem Ipsum Dummy</p>
                                    <p>Lorem Ipsum Dummy</p>
                                    <p>Lorem Ipsum Dummy</p>
                                </div>
                                <div class="layer-birds">
                                    <h5>Bidding Time</h5>
                                    <p>March 10, 2024 3:00 am</p>
                                    <p>March 10, 2024 3:00 am</p>
                                    <p>March 10, 2024 3:00 am</p>
                                    <p>March 10, 2024 3:00 am</p>
                                    <p>March 10, 2024 3:00 am</p>
                                </div>
                                <div class="layer-birds">
                                    <h5>Bid</h5>
                                    <p>$600.00</p>
                                    <p>$600.00</p>
                                    <p>$600.00</p>
                                    <p>$600.00</p>
                                    <p>$600.00</p>
                                </div>
                            </div>
                        </div>

                        <div id="Reviews" class="tabcontent">
                            <h3>There are no reviews yet.</h3>

                        </div>
                        <div id="Private" class="tabcontent">
                            <h3>Send Private Message</h3>
                            <form action="">
                                <div class="flex-private-msg">
                                    <div class="label-form">
                                        <label for="">Name:</label>
                                    </div>
                                    <div class="input-form">
                                        <input type="text" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="flex-private-msg">
                                    <div class="label-form">
                                        <label for="">Email:</label>
                                    </div>
                                    <div class="input-form">
                                        <input type="text" placeholder="Your email" required>
                                    </div>
                                </div>
                                <div class="flex-private-msg">
                                    <div class="label-form">
                                        <label for="">Message:</label>
                                    </div>
                                    <div class="input-form">
                                        <input type="text" placeholder="details" required>
                                    </div>
                                </div>
                                <button type="submit" class="submit-message">
                                    send
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="related-product pt-5 pb-5">
    <div class="auction-rules-textarea text-center">
        <h1>Related Products</h1>
    </div>
    <div class="container">
        <div class="product-listarea">
            <ul class="auction-product-list">
                <li class="list-pro">
                    <div class="product-list">
                        <div class="pro-imge">
                            <img src="assets/images/auction-pro-3.png" class="img-fluid">
                        </div>
                        <div class="content-pro">
                            <p>Lorem Ipsum</p>
                            <p class="product-para">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy.
                            </p>
                            <h4 class="startbidding-head">Current Bidding: <span>$600.00</span></h4>

                            <div class="acutionplace-bid-btn">
                                <a href="auction-product-detail.php">Place Bid</a>
                                <span>Or</span>
                                <a href="auction-product-detail.php" class="bg-gray">Order Now</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-pro">
                    <div class="product-list">
                        <div class="pro-imge">
                            <img src="assets/images/auction-pro-3.png" class="img-fluid">
                        </div>
                        <div class="content-pro">
                            <p>Lorem Ipsum</p>
                            <p class="product-para">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy.
                            </p>
                            <h4 class="startbidding-head">Current Bidding: <span>$600.00</span></h4>

                            <div class="acutionplace-bid-btn">
                                <a href="auction-product-detail.php">Place Bid</a>
                                <span>Or</span>
                                <a href="auction-product-detail.php" class="bg-gray">Order Now</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-pro">
                    <div class="product-list">
                        <div class="pro-imge">
                            <img src="assets/images/auction-pro-1.png" class="img-fluid">
                        </div>
                        <div class="content-pro">
                            <p>Lorem Ipsum</p>
                            <p class="product-para">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy.
                            </p>
                            <h4 class="startbidding-head">Current Bidding: <span>$600.00</span></h4>

                            <div class="acutionplace-bid-btn">
                                <a href="auction-product-detail.php">Place Bid</a>
                                <span>Or</span>
                                <a href="auction-product-detail.php" class="bg-gray">Order Now</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>




<?php
include './assets/componnets/newsletter.php';
include './assets/componnets/footer.php';
include './assets/componnets/auction-login.php';
?>
<script src="assets/js/time-counter.js"></script>
<script src="assets/js/splide.min.js"></script>
<script>
    var primarySlider = new Splide('#primary_slider', {
        type: 'fade',
        heightRatio: 0.5,
        pagination: false,
        arrows: false,
        cover: true,
    });
    var thumbnailSlider = new Splide('#thumbnail_slider', {
        rewind: true,
        fixedWidth: 100,
        fixedHeight: 64,
        isNavigation: true,
        gap: 10,
        focus: 'center',
        pagination: false,
        cover: true,
        breakpoints: {
            '600': {
                fixedWidth: 66,
                fixedHeight: 40,
            }
        }
    }).mount();

    primarySlider.sync(thumbnailSlider).mount();



    // Tabs 


    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>