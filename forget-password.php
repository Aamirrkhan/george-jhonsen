<?php
include 'assets/componnets/header.php';
?>
<section class="organiz-banner signin-banner" style="background: url(assets/images/banner3.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-inner-dev">
                    <!-- <h1 class="banner-text">
                        Sign In
                    </h1> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sign-in-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-12">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h1 class="text-center secondary-hd primary-color">
                        FORGOT <span class="black">PASSWORD</span>
                        </h1>
                    </div>
                    <div class="col-12">
                        <div class="logoform-input">
                            <label for="Password" class="w-100"> Email
                                <input type="email" placeholder="admin@admin.com" class="w-100 login-fields">
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="login-button text-center">
                            <button type="submit">Send reset password link</button>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="login-button text-center mt-3">
                            <a href="./signin.php">Back to Signin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'assets/componnets/footer.php';
?>