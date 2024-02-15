

<div id="main-content">
    <div class="container-fluid">

        <div class="block-header py-lg-4 py-3">
            <div class="row g-3">
                <div class="col-md-6 col-sm-12">
                    <h2 class="m-0 fs-5"><a href="javascript:void(0);" class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Add Sub Menu</h2>
                    <ul class="breadcrumb mb-0">
                        <li class=""><a href="">Home</a>&nbsp;/&nbsp;</li>
                        <li class="breadcrumb-item">Add Sub Menu</li>

                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 text-md-end">
                    <div class="d-inline-flex text-start">
                        <div class="me-2">
                            <a href="sub-menu-list" class="btn btn-primary mt-3">Sub Menu List</a>

                        </div>
                        <span id="bh_visitors"></span>
                    </div>


                </div>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">Add Sub Menu</h6>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" method="post" action="insert_sub_menu_master" novalidate>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom02">Menu Name</label>
                                    <!-- <select class="form-control select2-show-search form-select" name="user"  name="status"> -->
                                    <select class="form-select select2" name="user" required>
                                        <option value="" selected>Select Menu</option>
                                        <option value="1">User Authentication Master</option>
                                        <option value="2">Settings</option>
                                        <option value="3">Volunteer Zone</option>
                                        <option value="4">Intern Zone</option>
                                        <option value="5">Activity Reports</option>
                                        <option value="6">My Task Volunteer</option>
                                        <option value="7">Find Task Volunteer</option>
                                        <option value="8">Daily Report Volunteer</option>
                                        <option value="9">Clain Certificate Volunteer</option>
                                        <option value="10">My Task Intern</option>
                                        <option value="11">Find Task Intern</option>
                                        <option value="12">Daily Report Intern</option>
                                        <option value="13">Claim Certificate Intern</option>
                                        <option value="20">Template Master</option>
                                        <option value="21">Post Registration Form</option>
                                        <option value="22">test1</option>
                                        <option value="23">Daily Report </option>
                                    </select>
                                    <div class="invalid-feedback">Select Menu</div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom02">Sub Menu Name</label>
                                    <input type="text" name="sub_menu_description" class="form-control" id="validationCustom02" value="" placeholder="Sub Menu Name" required>
                                    <div class="invalid-feedback">Select Sub Menu Name</div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom02">Route Name</label>
                                    <input type="text" name="sub_menu_route" class="form-control" id="validationCustom02" value="" placeholder="Route Name" required>
                                    <div class="invalid-feedback">Select Route Name</div>
                                </div>
                                <div class="col-xl-12 col-lg-12 mb-3">
                                    <label for="validationCustom04">Status</label>
                                    <select name="status" class="form-select select2" id="validationCustom04" required>
                                        <option selected disabled value="">Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                    <div class="invalid-feedback">Select Status</div>

                                </div>
                            </div>
                            <button class="btn btn-primary mt-3" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>


<!-- Mirrored from wrraptheme.com/templates/lucid/hr/bs5/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2023 09:03:58 GMT -->