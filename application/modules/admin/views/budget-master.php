

<div id="main-content">
    <div class="container-fluid">

        <div class="block-header py-lg-4 py-3">
            <div class="row g-3">
                <div class="col-md-6 col-sm-12">
                    <h2 class="m-0 fs-5"><a href="javascript:void(0);" class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Budght Master</h2>
                    <ul class="breadcrumb mb-0">
                        <li class=""><a href="">Home</a>&nbsp;/&nbsp;</li>
                        <li class="breadcrumb-item">Budght Master</li>

                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 text-md-end">
                    <div class="d-inline-flex text-start">
                        <div class="me-2">
                            <a href="menu-list" class="btn btn-primary mt-3">Menu List</a>

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
                        <h6 class="card-title">Budght Master</h6>
                    </div>
                    <div class="card-body">
                        <form action="insert_menu_master" method="post" id="form" name="pForm" onsubmit=" return validate();" enctype="multipart/form-data" class="needs-validation" novalidate="">
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom04" class="form-label">Creation date</label>
                                    <input type="date" name="menu_description" class="form-control select2" id="validationCustom04" value="" placeholder="Menu Name " required="">
                                    <div class="invalid-feedback">Select Menu Name</div>
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
        <div class="row g-3 row-deck">
                    <div class="col-lg-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h6 class="card-title">ACR Report</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Patients</th>
                                                <th>Adress</th>
                                                <th>START Date</th>
                                                <th>END Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><span>John</span></td>
                                                <td><span class="text-info">70 Bowman St. South Windsor, CT 06074</span></td>
                                                <td>Sept 13, 2020</td>
                                                <td>Sept 16, 2020</td>
                                                <td><span class="badge bg-success">Admit</span></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><span>Jack Bird</span></td>
                                                <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                                                <td>Sept 13, 2020</td>
                                                <td>Sept 22, 2020</td>
                                                <td><span class="badge bg-secondary">Discharge</span></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><span>Dean Otto</span></td>
                                                <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                                                <td>Sept 13, 2020</td>
                                                <td>Sept 23, 2020</td>
                                                <td><span class="badge bg-success">Admit</span></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><span>Jack Bird</span></td>
                                                <td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
                                                <td>Sept 17, 2020</td>
                                                <td>Sept 16, 2020</td>
                                                <td><span class="badge bg-secondary">Discharge</span></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td><span>Hughe L.</span></td>
                                                <td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
                                                <td>Sept 18, 2020</td>
                                                <td>Sept 18, 2020</td>
                                                <td><span class="badge bg-success">Admit</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header">
                                <h6 class="card-title">Amount</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover c_list">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="fancy-checkbox">
                                                        <input class="select-all" type="checkbox" name="checkbox">
                                                        <span></span>
                                                    </label>
                                                </th>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="assets/images/xs/avatar1.jpg" class="rounded-circle avatar" alt="">
                                                </td>
                                                <td>
                                                    <p class="c_name">John Smith <span class="badge bg-secondary hidden-sm-down">Family</span></p>
                                                </td>
                                                <td>
                                                    <span class="phone"><i class="fa fa-phone me-1"></i>264-625-2583</span>
                                                </td>
                                                <td>
                                                    <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="assets/images/xs/avatar3.jpg" class="rounded-circle avatar" alt="">
                                                </td>
                                                <td>
                                                    <p class="c_name">Hossein Shams <span class="badge bg-info hidden-sm-down">Google</span></p>
                                                </td>
                                                <td>
                                                    <span class="phone"><i class="fa fa-phone me-1"></i>264-625-5689</span>
                                                </td>
                                                <td>
                                                    <address><i class="zmdi zmdi-pin"></i>44 Shirley Ave. West Chicago, IL 60185</address>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="assets/images/xs/avatar9.jpg" class="rounded-circle avatar" alt="">
                                                </td>
                                                <td>
                                                    <p class="c_name">Frank Camly</p>
                                                </td>
                                                <td>
                                                    <span class="phone"><i class="fa fa-phone me-1"></i>264-625-9999</span>
                                                </td>
                                                <td>
                                                    <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="assets/images/xs/avatar10.jpg" class="rounded-circle avatar" alt="">
                                                </td>
                                                <td>
                                                    <p class="c_name">Tim Hank<span class="badge bg-secondary hidden-sm-down">Family</span></p>
                                                </td>
                                                <td>
                                                    <span class="phone"><i class="fa fa-phone me-1"></i>264-625-1212</span>
                                                </td>
                                                <td>
                                                    <address><i class="zmdi zmdi-pin"></i>70 Bowman St. South Windsor, CT 06074</address>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
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

<!-- Mirrored from wrraptheme.com/templates/lucid/hr/bs5/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2023 09:03:58 GMT -->