<div class="cart-page-change">
    <?php
    include 'assets/componnets/header.php';
    ?>
    <!-- <section class="organiz-banner" style="background: url(assets/images/banner3.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-inner-dev">
                    <h1 class="banner-text">
                        SHOPPING <span class="primary-color">CART</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section> -->

    <section class="cart-sec">
        <div class="container">
            <form action="">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="cart-head mb-4">
                            <h1 class="cart-text">
                                Checkout
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h3 class="billing-head">Billing Details</h3>
                            </div>
                            <div class="col-lg-8 col-md-6 col-12 mb-3">
                                <div class="billing-detail">
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-3">
                                            <div class="input-fields-billing">
                                                <label for="">Full Name</label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mb-3">
                                            <div class="input-fields-billing">
                                                <label for="">Last Name</label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <div class="input-fields-billing">
                                                <label for="">Country / Region</label>
                                                <select>
                                                    <option value="0">Select car</option>
                                                    <option value="1">Audi</option>
                                                    <option value="2">BMW</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <div class="input-fields-billing">
                                                <label for="">State</label>
                                                <select>
                                                    <option value="0">State</option>
                                                    <option value="1">State</option>
                                                    <option value="2">State</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <div class="input-fields-billing">
                                                <label for="">Street Address </label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mb-3">
                                            <div class="input-fields-billing">
                                                <label for="">Postcode </label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mb-3">
                                            <div class="input-fields-billing">
                                                <label for="">Phone </label>
                                                <input type="tel" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <div class="input-fields-billing">
                                                <label for="">Email </label>
                                                <input type="email" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <div class="input-fields-billing">
                                                <label for="">Order Notes </label>
                                                <textarea name="" id="" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="total total-area billing-total">
                                    <div class="totalarea-line">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbody">
                                                        <tr>
                                                            <td class="pro-name-tb">Music City Express</td>
                                                            <td>1</td>
                                                            <td>$60</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pro-name-tb">City Express</td>
                                                            <td>10</td>
                                                            <td>$60</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="totalarea-line">
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <h4>Subtotal</h4>
                                                </div>
                                                <div class="col-6">
                                                    <p class="float-end">$1,400</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="totalarea-line">
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <h4>10% off any purchase over $500</h4>
                                                </div>
                                                <div class="col-6">
                                                    <p class="float-end">$140</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="totalarea-line">
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <h4>Shipping</h4>
                                                </div>
                                                <div class="col-6">
                                                    <p class="float-end">Free</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="totalarea-line">
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <h4>Total</h4>
                                                </div>
                                                <div class="col-6">
                                                    <p class="float-end">1,260</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="totalarea-line">
                                            <div class="row align-items-center">
                                                <div class="col-6 mb-3">
                                                    <h4>Payment method</h4>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <div class="payment-lable">
                                                        <input type="radio" id="cash" name="fav_language" value="cash">
                                                        <label for="cash"> Cash On Delivery</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <div class="payment-lable">
                                                        <input type="radio" id="credit" name="fav_language" value="credit">
                                                        <label for="credit"> Credit/Debit Card</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 none-payment-flieds">
                                                    <div class="payment-lable">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="input-fields-billing">
                                                                    <label for="">Card Number </label>
                                                                    <input type="" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-12">
                                                                <div class="input-fields-billing card-expire">
                                                                    <label for="">Card Expiry </label>
                                                                    <input type="text" placeholder="MM/YYYY">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-12">
                                                                <div class="input-fields-billing">
                                                                    <label for="">Card CVV </label>
                                                                    <input type="" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-0">
                                        <div class="row align-items-center">
                                            <div class="checkout-btn">
                                                <a href="./thankyou.php">Place Order</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </section>


    <?php
    include 'assets/componnets/newsletter.php';
    include 'assets/componnets/footer.php';
    ?>
    <script src="assets/js/cart.js"></script>
</div>