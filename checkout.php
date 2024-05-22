    <?php
    include 'assets/componnets/header.php';
    ?>
    <section class="organiz-banner auction-banner" style="background: url(assets/images/banner-product-page.png); padding: 60px !important;"></section>

    <section class="cart-sec">
        <div class="container">
            <form action="">
                <div class="row justify-content-center ">
                    <div class="col-10">
                        <div class="cart-head mb-4">
                            <h1 class="cart-text">Checkout</h1>
                            
                        </div>
                        <div class="cart-head mb-4">
                            <p>Returning customer? <a href="signin.php">Click here to login</a></p>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-lg-3 col-md-6 col-12 mb-3">
                                <div class="billing-detail">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <h4 class="checkout-head">SHIPPING DETAILS</h4>
                                            <p class="checout-required"><span class="start-required">*</span> required fields</p>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="checkout-label">Full Name <span class="start-required">*</span></label>
                                            <input type="text" placeholder="" required class="checkout-fields">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="checkout-label">Country <span class="start-required">*</span></label>
                                            <select name="Country" id="Country" class="checkout-fields">
                                                <option value="Country">Country</option>
                                                <option value="Country">Country</option>
                                                <option value="Country">Country</option>
                                                <option value="Country">Country</option>
                                            </select>
                                        </div>
                                        <div class="col-12 mb-3 clone-dive">
                                            <label class="checkout-label">Street Address <span class="start-required">*</span></label>
                                            <input type="text" id="index-1" placeholder="" required class="checkout-fields mb-3">
                                            <input type="text" id="index-2" placeholder="" required class="checkout-fields">
                                        </div>
                                        <button type="button" class="addition-address mb-4" onclick="cloneAndModify()">+ Add another address field (optional)</button>
                                        <div class="col-12 mb-3">
                                            <label class="checkout-label">Postcode / ZIP <span class="start-required">*</span></label>
                                            <div class="d-flex align-items-center gap-3">
                                                <input type="text" placeholder="" required class="checkout-fields w-50">
                                                <p class="zipcode-text">Enter ZIP for City & State</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 mb-3">
                                <div class="billing-detail">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <h4 class="checkout-head">CONTACT INFORMATION</h4>
                                            <p class="checout-required"><span class="start-required">*</span> required fields</p>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="checkout-label">Email <span class="start-required">*</span></label>
                                            <input type="email" placeholder="" required class="checkout-fields">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="checkout-label">Phone <span class="start-required">*</span></label>
                                            <input type="tel" placeholder="" required class="checkout-fields">
                                        </div>
                                        <div class="col-12 mb-5">
                                            <h4 class="checkout-head">BILLING DETAILS</h4>
                                            <input type="checkbox" id="Same" name="Same" value="Same">
                                            <label for="Same" class="checkout-label" style="cursor: pointer;">Same as shipping address</label><br>
                                        </div>
                                        <div class="col-12 mb-5">
                                            <h4 class="checkout-head">ADDITIONAL OPTIONS</h4>
                                            <button type="button" class="addition-address mb-4 p-0">+ Add a note to this order</button>
                                            <button type="button" class="addition-address mb-4 p-0">+ Apply a coupon code</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <h4 class="checkout-head">YOUR ORDER</h4>
                                <div class="total total-area billing-total">
                                    <div class="totalarea-linez">
                                        <div class="totalarea-line">
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <h4>PRODUCT</h4>
                                                </div>
                                                <div class="col-6">
                                                    <p class="float-end">TOTAL</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="totalarea-line">
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <h4>Basic × 1</h4>
                                                </div>
                                                <div class="col-6">
                                                    <p class="float-end">$23.88</p>
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
                                                    <h4>Total</h4>
                                                </div>
                                                <div class="col-6">
                                                    <p class="float-end">1,260</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="totalarea-line border-bottom-none">
                                            <div class="row align-items-center">
                                                <div class="col-6 mb-3">
                                                    <h4 class="checkout-head">Payment method</h4>
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
                                                                    <input class="card-number-validation" type="" placeholder="">
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
                                                <div class="col-12">
                                                    <button class="paypal-btn">
                                                        <div class="d-flex align-items-center justify-content-between mb-2 paypal-icon">
                                                            <p><i class="fa-regular fa-circle"></i> Paypal</p>
                                                            <img src="assets/images/paypal.png" alt="" srcset="">
                                                        </div>
                                                        <p class="paypal-prara">You can pay with your credit card if you don’t have a PayPal account.</p>
                                                    </button>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <input type="checkbox" id="website" name="website" value="website">
                                                    <label for="website" class="checkout-label terms-checkout-checkbox" style="cursor: pointer;">I have read and agree to the website terms and conditions</label><br>
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
    <script>
        function cloneAndModify() {
            var originalDiv = document.querySelector('.clone-dive');
            var cloneDiv = originalDiv.cloneNode(true);

            var inputs = cloneDiv.querySelectorAll('input');
            inputs.forEach(function(input, index) {
                var originalId = input.id;
                var parts = originalId.split('-');
                var newIndex = parseInt(parts[1]) + 1;
                input.id = parts[0] + '-' + newIndex;
                input.value = '';
            });

            originalDiv.parentNode.insertBefore(cloneDiv, document.querySelector('.addition-address'));
        }
    </script>