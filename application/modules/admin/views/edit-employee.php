

<div id="main-content">
    <div class="container-fluid">

        <div class="block-header py-lg-4 py-3">
            <div class="row g-3">
                <div class="col-md-6 col-sm-12">
                    <h2 class="m-0 fs-5"><a href="javascript:void(0);" class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Edit Employee Master</h2>
                    <ul class="breadcrumb mb-0">
                        <li class=""><a href="">Home</a>&nbsp;/&nbsp;</li>
                        <li class="breadcrumb-item">Edit Employee Master</li>

                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 text-md-end">
                    <div class="d-inline-flex text-start">
                        <div class="me-2">
                            <a href="<?php echo base_url('edit-employee-list')?>" class="btn btn-primary mt-3">Edit Employee Master List</a>

                        </div>
                        <span id="bh_visitors"></span>
                    </div>


                </div>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">Employee Details Part 1</h6>
                    </div>
                    <div class="card-body">
                        <form action="insert_menu_master" method="post" id="form" name="pForm" onsubmit=" return validate();" enctype="multipart/form-data" class="needs-validation" novalidate="">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom04" class="form-label">Name</label>
                                    <input type="text" name="description" class="form-control select2" id="validationCustom04" value="" placeholder="Name " required="">
                                    <div class="invalid-feedback">Select Name</div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom02" class="form-label">Joinin date</label>
                                    <input type="date" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="Date Of Birth" required="">
                                    <div class="invalid-feedback">Date Of Birth</div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom02" class="form-label">Joinin date</label>
                                    <input type="date" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="Joinin date" required="">
                                    <div class="invalid-feedback">Joinin date</div>
                                </div>

                                <div class="form-group col-md-3 mb-3">
                                    <label for="validationCustom04" class="form-label">Registration No</label>
                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="Registration No" required="">

                                </div>
                                <div class="form-group col-md-3 mb-3">
                                    <label for="validationCustom04" class="form-label">Contect Number</label>
                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="Contect Number" required="">

                                </div>

                            </div>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="">
                                        <div class="card-header px-1">
                                            <h6 class="card-title">Persnal Details Part 2</h6>
                                        </div>
                                        <div class="card-body px-1">

                                            <div class="row">
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom04" class="form-label">Marriteul Status</label>
                                                    <select name="status" class="form-select select2 " id="validationCustom04" data-placeholder="Select Status" required="" tabindex="-1" aria-hidden="true">
                                                        <!-- <option label="Choose one">Select Status </option> -->
                                                        <option selected="" value="">Select Status</option>
                                                        <option value="1">Married</option>
                                                        <option value="2">UnMarried</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom02" class="form-label">Driving Skill With Lincese</label>
                                                    <select name="status" class="form-select select2 " id="validationCustom04" data-placeholder="Select Status" required="" tabindex="-1" aria-hidden="true">
                                                        <!-- <option label="Choose one">Select Status </option> -->
                                                        <option selected="" value="">Select Skill With Lincese</option>
                                                        <option value="1">Yes</option>
                                                        <option value="2">None</option>
                                                    </select>
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="">
                                        <div class="card-header px-1">
                                            <h6 class="card-title">Education Details part 2</h6>
                                        </div>
                                        <div class="card-body px-1">

                                            <div class="row">
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom04" class="form-label">Qualification</label>
                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom02" class="form-label">Year</label>
                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom02" class="form-label">Institute / Univercity</label>
                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom02" class="form-label">Percentage</label>
                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-3 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-3 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-3 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-3 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-3 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-3 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-3 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-3 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>

                                            </div>
                                            <button href="#" class="btn btn-primary mt-3" type="submit">Add More</button>


                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="">
                                        <div class="card-header px-1">
                                            <h6 class="card-title">Education Profile Section 3</h6>
                                        </div>
                                        <div class="card-body px-1">

                                            <div class="row">
                                                <div class="col-md-2 mb-3">
                                                    <label for="validationCustom04" class="form-label">From</label>
                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-2 mb-3">
                                                    <label for="validationCustom02" class="form-label">To</label>
                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-2 mb-3">
                                                    <label for="validationCustom02" class="form-label">Organaization Details</label>
                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom02" class="form-label">Industries</label>
                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom02" class="form-label">Degination</label>
                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-2 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-2 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-2 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-3 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-3 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-2 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-2 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-2 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-3 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-3 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>


                                            </div>
                                            <button href="#" class="btn btn-primary mt-3" type="submit">Add More</button>


                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="">
                                        <div class="card-header bg-primery px-1">
                                            <h6 class="card-title text-black">Experiance Profile Section 4</h6>
                                        </div>
                                        <div class="card-body px-1">

                                            <div class="row">
                                                <div class="col-md-1 mb-3">
                                                    <label for="validationCustom04" class="form-label">From</label>
                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-1 mb-3">
                                                    <label for="validationCustom02" class="form-label">To</label>
                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-1 mb-3">
                                                    <label for="validationCustom02" class="form-label">Degination</label>
                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-2 mb-3">
                                                    <label for="validationCustom02" class="form-label">Date Of Posting</label>
                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-1 mb-3">
                                                    <label for="validationCustom02" class="form-label">Band</label>
                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-2 mb-3">
                                                    <label for="validationCustom02" class="form-label">Place Of Posting</label>
                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-2 mb-3">
                                                    <label for="validationCustom02" class="form-label">Controlling Officer</label>
                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-2 mb-3">
                                                    <label for="validationCustom02" class="form-label">Reviewing Officer</label>
                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-1 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-1 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-1 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-2 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-1 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-2 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-2 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>
                                                <div class="col-md-2 mb-3">

                                                    <input type="text" name="dob" class="form-control select2" id="validationCustom04" value="" placeholder="" required="">
                                                </div>

                                            </div>
                                            <button href="#" class="btn btn-primary mt-3" type="submit">Add More</button>

                                            <button href="#" class="btn btn-primary mt-3" type="submit">Submit</button>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>

<!-- Mirrored from wrraptheme.com/templates/lucid/hr/bs5/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2023 09:03:58 GMT -->