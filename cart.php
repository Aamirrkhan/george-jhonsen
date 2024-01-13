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
                                    <th scope="col">S.Number</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                <tr>
                                    <td>1</td>
                                    <td><img src="assets/images/resource3.png" class="cart-img"></td>
                                    <td>Music City Express "Elvis" 6th Car</td>
                                    <td>$48.50</td>
                                    <td><input type="number" placeholder="1" min="0"></td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-evenly">
                                            <!-- <button class="viewbtn action-btn"><i class="fa-solid fa-eye"></i></button> -->
                                            <button class="trash-tbn action-btn"><i class="fa-solid fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="assets/images/banner1.png" class="cart-img"></td>
                                    <td>Music City Express "Elvis" 6th Car</td>
                                    <td>$105</td>
                                    <td><input type="number" placeholder="1" min="0"></td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-evenly">
                                            <!-- <button class="viewbtn action-btn"><i class="fa-solid fa-eye"></i></button> -->
                                            <button class="trash-tbn action-btn"><i class="fa-solid fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><img src="assets/images/conventions2.png" class="cart-img"></td>
                                    <td>Music City Express "Elvis" 6th Car</td>
                                    <td>$60</td>
                                    <td><input type="number" placeholder="1" min="0"></td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-evenly">
                                            <!-- <button class="viewbtn action-btn"><i class="fa-solid fa-eye"></i></button> -->
                                            <button class="trash-tbn action-btn"><i class="fa-solid fa-trash"></i></button>
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
                                                <h4>Subtotal</h4>
                                            </div>
                                            <div class="col-6">
                                                <p class="float-end">$20.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="totalarea-line">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h4>Shipping</h4>
                                            </div>
                                            <div class="col-6">
                                                <p class="float-end">$102.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="totalarea-line">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h4>Total</h4>
                                            </div>
                                            <div class="col-6">
                                                <p class="float-end">$122.00</p>
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
</div>