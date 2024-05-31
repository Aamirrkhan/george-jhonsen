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
                            <h3 class="fs-24 text-black font-w600 me-auto mb-2 pe-3">Add Role</h3>
                            <div class="d-sm-flex d-block gap-2">
                                <button class="btn btn-primary btn-rounded mb-2">Publish</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Roles *</label>
                                            <input type="text" class="form-control" placeholder="" required>
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
                                        <div class="col-md-6 col-12">
                                            <div class="module-box">
                                                <h3 class="fs-24 text-black font-w600 me-auto mb-2 pe-3">Operation Permissions</h3>
                                                <div class="module-inner-box">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 border-btm-sets mb-3">
                                                        <h4 class="fs-16 text-black font-w600 me-auto mb-2 pe-3">Manage Admin</h4>
                                                        <div class="d-flex align-items-center justify-content-start gap-2 radio-status">
                                                            <div>
                                                                <input type="radio" id="Enable11" name="Enable" value="Enable">
                                                                <label for="Enable11">Enable</label>
                                                            </div>
                                                            <div>
                                                                <input type="radio" id="Disable11" name="Enable" value="Disable">
                                                                <label for="Disable11">Disable</label><br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="box-padding">
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
                                                            <h5 class="fs-16 text-black font-w600 me-auto mb-2 pe-3">Admin Manage Users</h5>
                                                            <div class="d-flex align-items-center justify-content-start gap-2 radio-status">
                                                                <div>
                                                                    <input type="radio" id="Enable12" name="AdminManage" value="Enable">
                                                                    <label for="Enable12">Enable</label>
                                                                </div>
                                                                <div>
                                                                    <input type="radio" id="Disable13" name="AdminManage" value="Disable">
                                                                    <label for="Disable13">Disable</label><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
                                                            <h5 class="fs-16 text-black font-w600 me-auto mb-2 pe-3">Manage users <i class="fa-solid fa-arrow-right"></i> Add</h5>
                                                            <div class="d-flex align-items-center justify-content-start gap-2 radio-status">
                                                                <div>
                                                                    <input type="radio" id="Enable14" name="ManageAdd" value="Enable">
                                                                    <label for="Enable14">Enable</label>
                                                                </div>
                                                                <div>
                                                                    <input type="radio" id="Disable15" name="ManageAdd" value="Disable">
                                                                    <label for="Disable15">Disable</label><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
                                                            <h5 class="fs-16 text-black font-w600 me-auto mb-2 pe-3">Manage users <i class="fa-solid fa-arrow-right"></i> Edit</h5>
                                                            <div class="d-flex align-items-center justify-content-start gap-2 radio-status">
                                                                <div>
                                                                    <input type="radio" id="Enable15" name="ManageEdit" value="Enable">
                                                                    <label for="Enable15">Enable</label>
                                                                </div>
                                                                <div>
                                                                    <input type="radio" id="Disable16" name="ManageEdit" value="Disable">
                                                                    <label for="Disable16">Disable</label><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
                                                            <h5 class="fs-16 text-black font-w600 me-auto mb-2 pe-3">Manage users <i class="fa-solid fa-arrow-right"></i> View</h5>
                                                            <div class="d-flex align-items-center justify-content-start gap-2 radio-status">
                                                                <div>
                                                                    <input type="radio" id="Enable17" name="ManageView" value="Enable">
                                                                    <label for="Enable17">Enable</label>
                                                                </div>
                                                                <div>
                                                                    <input type="radio" id="Disable18" name="ManageView" value="Disable">
                                                                    <label for="Disable18">Disable</label><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="module-inner-box">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 border-btm-sets mb-3">
                                                        <h4 class="fs-16 text-black font-w600 me-auto mb-2 pe-3">Manage Roles</h4>
                                                        <div class="d-flex align-items-center justify-content-start gap-2 radio-status">
                                                            <div>
                                                                <input type="radio" id="Enableroles11" name="EnableRoles" value="Enable">
                                                                <label for="Enableroles11">Enable</label>
                                                            </div>
                                                            <div>
                                                                <input type="radio" id="roles11" name="EnableRoles" value="Disable">
                                                                <label for="roles11">Disable</label><br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="box-padding">
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
                                                            <h5 class="fs-16 text-black font-w600 me-auto mb-2 pe-3">Manage Roles</h5>
                                                            <div class="d-flex align-items-center justify-content-start gap-2 radio-status">
                                                                <div>
                                                                    <input type="radio" id="roles12z" name="AdminRolesManage" value="Enable">
                                                                    <label for="roles12z">Enable</label>
                                                                </div>
                                                                <div>
                                                                    <input type="radio" id="roles13" name="AdminRolesManage" value="Disable">
                                                                    <label for="roles13">Disable</label><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
                                                            <h5 class="fs-16 text-black font-w600 me-auto mb-2 pe-3">Manage Roles <i class="fa-solid fa-arrow-right"></i> Add</h5>
                                                            <div class="d-flex align-items-center justify-content-start gap-2 radio-status">
                                                                <div>
                                                                    <input type="radio" id="roles14s" name="ManageRolesAdd" value="Enable">
                                                                    <label for="roles14s">Enable</label>
                                                                </div>
                                                                <div>
                                                                    <input type="radio" id="roles15" name="ManageRolesAdd" value="Disable">
                                                                    <label for="roles15">Disable</label><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
                                                            <h5 class="fs-16 text-black font-w600 me-auto mb-2 pe-3">Manage Roles <i class="fa-solid fa-arrow-right"></i> Edit</h5>
                                                            <div class="d-flex align-items-center justify-content-start gap-2 radio-status">
                                                                <div>
                                                                    <input type="radio" id="roles155" name="ManageRolesEdit" value="Enable">
                                                                    <label for="roles155">Enable</label>
                                                                </div>
                                                                <div>
                                                                    <input type="radio" id="roles16" name="ManageRolesEdit" value="Disable">
                                                                    <label for="roles16">Disable</label><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
                                                            <h5 class="fs-16 text-black font-w600 me-auto mb-2 pe-3">Manage Roles <i class="fa-solid fa-arrow-right"></i> View</h5>
                                                            <div class="d-flex align-items-center justify-content-start gap-2 radio-status">
                                                                <div>
                                                                    <input type="radio" id="roles17" name="ManageRolesView" value="Enable">
                                                                    <label for="roles17">Enable</label>
                                                                </div>
                                                                <div>
                                                                    <input type="radio" id="roles18" name="ManageRolesView" value="Disable">
                                                                    <label for="roles18">Disable</label><br>
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
