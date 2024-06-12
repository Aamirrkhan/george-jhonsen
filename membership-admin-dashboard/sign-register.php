<?php
include "headerr.php";
?> <div class="content-body " style="min-height: 1100px;">
    <!-- row -->
    <div class="container-fluid">
        <form>
            <div class="row">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card profile-card"><grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="dnXmp"></grammarly-extension><grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="dnXmp"></grammarly-extension>
                            <div class="card-header flex-wrap border-0 pb-0">
                                <h3 class="fs-24 text-black font-w600 me-auto mb-2 pe-3">Add Product</h3>
                                <div class="d-sm-flex d-block gap-2">
                                    <a class="btn btn-primary btn-rounded mb-2" href="#">Publish</a>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="mb-5">
                                    <div class="row addvalue_input">
                                        
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label></label>
                                                <input type="text" class="form-control" placeholder="Proposed By Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="button" class="addmore-btns"><i class="fa-solid fa-plus"></i> Add More</button>
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
include "./footerr.php";
?>
<script>
    const addMorebtn = document.querySelector('.addmore-btns');
    const addfields = document.querySelector('.addvalue_input');

    addMorebtn.addEventListener('click', function(e) {
        e.preventDefault();
        console.log('Hello More');
        const createElement = `
        <div class="col-md-6 col-12">
            <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Add Another Fields">
                <select class="form-control p-3" name="select type" id="select type">
                <option value="text">text</option>
                <option value="unput">input</option>
                <option value="radio">radio</option>
                <option value="check">check</option>
                <option value="textarea">textarea</option>
                </select>
            </div>
        </div>`;
        console.log(createElement);
        addfields.insertAdjacentHTML('beforeend', createElement);
    });
</script>