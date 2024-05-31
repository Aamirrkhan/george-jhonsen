<?php
include "headerr.php";
?>
<div class="content-body ">
    <!-- row -->
    <div class="container-fluid">
        <form>
            <div class="row">
                <div class="col-12">
                    <div class="card profile-card">
                        <div class="card-header flex-wrap border-0 pb-0">
                            <h3 class="fs-24 text-black font-w600 me-auto mb-2 pe-3">Add User</h3>
                            <div class="d-sm-flex d-block gap-2">
                                <button class="btn btn-primary btn-rounded mb-2">Publish</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label>First Name *</label>
                                            <input type="text" class="form-control" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Last Name *</label>
                                            <input type="text" class="form-control" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Email * </label>
                                            <input type="text" class="form-control" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Access Type</label>
                                            <select class="select-user" name="access-type" id="access-type">
                                                <option value="Select Option">Select Option</option>
                                                <option value="saab">Saab</option>
                                                <option value="mercedes">Mercedes</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Lorem Ipsum</label>
                                            <select class="select-user" name="facility-type" id="facility-type">
                                                <option value="Select Option">Select Option</option>
                                                <option value="Lorem Ipsum">Lorem Ipsum</option>
                                                <option value="Lorem Ipsum">Lorem Ipsum</option>
                                                <option value="Lorem Ipsum">Lorem Ipsum</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Lorem Ipsum</label>
                                            <select class="select-user" name="department-type" id="department-type">
                                                <option value="Select Option">Select Option</option>
                                                <option value="Lorem Ipsum">Lorem Ipsum</option>
                                                <option value="Lorem Ipsum">Lorem Ipsum</option>
                                                <option value="Lorem Ipsum">Lorem Ipsum</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <div class="eye-btn-flex">
                                                <input type="password" class="form-control" placeholder="" id="password" required>
                                                <i class="bi bi-eye-slash" id="togglePassword1"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <div class="eye-btn-flex">
                                                <input type="password" class="form-control" placeholder="" id="confirm-password" required>
                                                <i class="bi bi-eye-slash" id="togglePassword2"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group phone-number">
                                            <label>Phone: </label>
                                            <input type="number" id="mobile_code" class="form-control" placeholder="Phone Number" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group phone-number">
                                            <label>Status</label>
                                            <div class="d-flex align-items-center justify-content-start gap-2 radio-status">
                                                <div>
                                                    <input type="radio" id="Active" name="age" value="Active">
                                                    <label for="Active">Active</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="Inactive" name="age" value="Inactive">
                                                    <label for="Inactive">Inactive</label><br>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="module-box">
                                                <h3 class="fs-24 text-black font-w600 me-auto mb-2 pe-3">Module Permissions</h3>
                                                <div class="module-inner-box">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 border-btm-sets mb-3">
                                                        <h4 class="fs-16 text-black font-w600 me-auto mb-2 pe-3">Email & Notifications</h4>
                                                        <div class="d-flex align-items-center justify-content-start gap-2 radio-status">
                                                            <div>
                                                                <input type="radio" id="enable01" name="Module" value="Enable">
                                                                <label for="enable01">Enable</label>
                                                            </div>
                                                            <div>
                                                                <input type="radio" id="disable01" name="Module" value="Disable">
                                                                <label for="disable01">Disable</label><br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="box-padding">
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
                                                            <h5 class="fs-16 text-black font-w600 me-auto mb-2 pe-3">Email & Notifications <i class="fa-solid fa-arrow-right"></i> View</h5>
                                                            <div class="d-flex align-items-center justify-content-start gap-2 radio-status">
                                                                <div>
                                                                    <input type="radio" id="Enable02" name="Notifications" value="Enable">
                                                                    <label for="Enable02">Enable</label>
                                                                </div>
                                                                <div>
                                                                    <input type="radio" id="Disable03" name="Notifications" value="Disable">
                                                                    <label for="Disable03">Disable</label><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
                                                            <h5 class="fs-16 text-black font-w600 me-auto mb-2 pe-3">Email & Notifications <i class="fa-solid fa-arrow-right"></i> View</h5>
                                                            <div class="d-flex align-items-center justify-content-start gap-2 radio-status">
                                                                <div>
                                                                    <input type="radio" id="Enable2" name="ModuleView" value="Enable">
                                                                    <label for="Enable2">Enable</label>
                                                                </div>
                                                                <div>
                                                                    <input type="radio" id="Disable3" name="ModuleView" value="Disable">
                                                                    <label for="Disable3">Disable</label><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
                                                            <h5 class="fs-16 text-black font-w600 me-auto mb-2 pe-3">Email & Notifications <i class="fa-solid fa-arrow-right"></i> Add</h5>
                                                            <div class="d-flex align-items-center justify-content-start gap-2 radio-status">
                                                                <div>
                                                                    <input type="radio" id="Enable4" name="Moduleadd" value="Enable">
                                                                    <label for="Enable4">Enable</label>
                                                                </div>
                                                                <div>
                                                                    <input type="radio" id="Disable5" name="Moduleadd" value="Disable">
                                                                    <label for="Disable5">Disable</label><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
                                                            <h5 class="fs-16 text-black font-w600 me-auto mb-2 pe-3">Email & Notifications <i class="fa-solid fa-arrow-right"></i> Edit</h5>
                                                            <div class="d-flex align-items-center justify-content-start gap-2 radio-status">
                                                                <div>
                                                                    <input type="radio" id="Enable5" name="ModuleEdit" value="Enable">
                                                                    <label for="Enable5">Enable</label>
                                                                </div>
                                                                <div>
                                                                    <input type="radio" id="Disable6" name="ModuleEdit" value="Disable">
                                                                    <label for="Disable6">Disable</label><br>
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
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
include "footerr.php";
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
<script>
    // -----Country Code Selection
    $("#mobile_code").intlTelInput({
        initialCountry: "us",
        separateDialCode: true,
        // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
    });
</script>
<script>
    // Function to toggle password visibility
    function togglePasswordVisibility(toggleId, inputId) {
        const togglePassword = document.querySelector(toggleId);
        const passwordInput = document.querySelector(inputId);

        togglePassword.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            togglePassword.classList.toggle('bi-eye');
            togglePassword.classList.toggle('bi-eye-slash');
        });
    }

    // Toggle password visibility for both fields
    togglePasswordVisibility('#togglePassword1', '#password');
    togglePasswordVisibility('#togglePassword2', '#confirm-password');
</script>