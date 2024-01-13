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
                            Sign <span class="black">In</span>
                        </h1>

                    </div>
                    <div class="col-12">
                        <div class="logoform-input">
                            <label for="E-mail" class="w-100"> Email
                                <input type="email" placeholder="" class="w-100 login-fields">
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="logoform-input">
                            <label for="Password" class="w-100"> Password
                                <input type="password" placeholder="" class="w-100 login-fields">
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="logoform-input">
                            <select class="select w-100">
                                <option value="value1">Member</option>
                                <option value="value1">Returning Non - Member</option>
                                <option value="value2">Guest</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="logoform-input">
                            <label for="Member Name" class="w-100"> Member Name
                                <input type="text" placeholder="" class="w-100 login-fields">
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="logoform-input">
                            <label for="Password" class="w-100"> Password
                                <input type="password" placeholder="" class="w-100 login-fields">
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="logoform-input">
                            <label for="Non - Member Name" class="w-100"> Non- Member Name
                                <input type="text" placeholder="" class="w-100 login-fields">
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="logoform-input">
                            <label for="Password" class="w-100"> Password
                                <input type="password" placeholder="" class="w-100 login-fields">
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="login-button text-center">
                            <button type="submit">Sign In</button>
                            <a href="./forget-password.php">Forget Password</a>
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