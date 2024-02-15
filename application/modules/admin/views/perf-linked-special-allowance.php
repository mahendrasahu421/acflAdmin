

<div id="main-content">
    <div class="container-fluid">

        <div class="block-header py-lg-4 py-3">
            <div class="row g-3">
                <div class="col-md-6 col-sm-12">
                    <h2 class="m-0 fs-5"><a href="javascript:void(0);" class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Perf Linked Special Allowance</h2>
                    <ul class="breadcrumb mb-0">
                        <li class=""><a href="">Home</a>&nbsp;/&nbsp;</li>
                        <li class="breadcrumb-item">Perf Linked Special Allowance</li>

                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 text-md-end">
                    <div class="d-inline-flex text-start">
                        <div class="me-2">
                            <a href="perf-linked-special-allowance-list" class="btn btn-primary mt-3">Perf Linked Special Allowance List</a>

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
                        <h6 class="card-title">Perf Linked Special Allowance</h6>
                    </div>
                    <div class="card-body">
                        <form action="insert_menu_master" method="post" id="form" name="pForm" onsubmit=" return validate();" enctype="multipart/form-data" class="needs-validation" novalidate="">
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom04" class="form-label">Creation Date</label>
                                    <input type="date" name="menu_description" class="form-control select2" id="validationCustom04" value="" placeholder="Creation Date " required="">
                                    <div class="invalid-feedback">Select Creation Date</div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom02" class="form-label">Amount</label>
                                    <input type="text" name="menu_route_name" class="form-control select2" id="validationCustom04" value="" placeholder="Amount" required="">
                                    <div class="invalid-feedback"> Select Amount</div>
                                </div>
                                <div class="form-group col-md-12 mb-3">
                                    <label for="validationCustom04" class="form-label">Status</label>
                                    <select name="status" class="form-select select2 " id="validationCustom04" data-placeholder="Select Status" required="" tabindex="-1" aria-hidden="true">
                                        <!-- <option label="Choose one">Select Status </option> -->
                                        <option selected="" value="">Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>

                                </div>
                            </div>
                            <button href="view-menu" class="btn btn-primary mt-3" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>


<!-- Mirrored from wrraptheme.com/templates/lucid/hr/bs5/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2023 09:03:58 GMT -->