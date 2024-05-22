<?php
include 'assets/componnets/header.php';
?>
<section class="organiz-banner auction-banner" style="background: url(assets/images/banner-product-page.png); padding: 60px !important;">

</section>

<section class="cart-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="cart-head mb-4">
                    <h1 class="cart-text">
                        SHOPPING <span class="primary-color">CART</span>
                    </h1>
                </div>
                <div class="table-cart">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ITEMS</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="assets/images/resource3.png" class="cart-img">
                                        <div class="text-left">
                                            <p class="span-text">Lorem Ipsum</p>
                                            <p class="product-title">Lorem Ipsum Dummy</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$48.50</td>
                                <td><input type="number" placeholder="1" min="0"></td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-evenly">
                                        <button class="trash-tbn action-btn"><i class="fa-regular fa-circle-xmark"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="assets/images/resource3.png" class="cart-img">
                                        <div class="text-left">
                                            <p class="span-text">Lorem Ipsum</p>
                                            <p class="product-title">Lorem Ipsum Dummy</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$48.50</td>
                                <td><input type="number" placeholder="1" min="0"></td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-evenly">
                                        <button class="trash-tbn action-btn"><i class="fa-regular fa-circle-xmark"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="assets/images/resource3.png" class="cart-img">
                                        <div class="text-left">
                                            <p class="span-text">Lorem Ipsum</p>
                                            <p class="product-title">Lorem Ipsum Dummy</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$48.50</td>
                                <td><input type="number" placeholder="1" min="0"></td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-evenly">
                                        <button class="trash-tbn action-btn"><i class="fa-regular fa-circle-xmark"></i></button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-12"></div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="total total-area">
                                <div class="totalarea-line">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <h4>SUB TOTAL</h4>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-end">$599.99</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="totalarea-line">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <h4>Basic × 1</h4>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-end">$599.99</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="totalarea-line">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <h4>SHIPPING</h4>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-end">FREE SHIPPING</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="totalarea-line">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <h4>SALES</h4>
                                        </div>
                                        <div class="col-6">
                                            <h4 class="float-end">$23</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="totalarea-line border-none">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <h4>COUPON</h4>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-end">ADD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="totalarea-line border-0">
                                    <div class="row align-items-center">
                                        <div class="checkout-btn">
                                            <a href="checkout.php">CheckOut</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include 'assets/componnets/newsletter.php';
include 'assets/componnets/footer.php';
?>
<script src="assets/js/cart.js"></script>