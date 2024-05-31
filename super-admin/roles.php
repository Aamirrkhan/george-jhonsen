<?php
include "headerr.php";
?>
<div class="content-body ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header flex-wrap border-0 pb-0 justify-content-between w-100">
                        <h3 class="fs-24 text-black font-w600 me-auto mb-2 pe-3">Roles Lists</h3>
                        <div class="d-sm-flex d-block gap-2">
                            <a class="btn btn-primary btn-rounded mb-2" href="./add-role.php">Add Role</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>Numbers</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Auction</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-eye"></i></a>
                                                <a href="./add-user.php" class="btn btn-primary shadow btn-xs sharp me-1 pen-color"><i class="fas fa-pen"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Auction</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-eye"></i></a>
                                                <a href="./add-role.php" class="btn btn-primary shadow btn-xs sharp me-1 pen-color"><i class="fas fa-pen"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<?php
include "footerr.php";
?>