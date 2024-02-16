<div id="main-content">
    <div class="container-fluid">

        <div class="block-header py-lg-4 py-3">
            <div class="row g-3">
                <div class="col-md-6 col-sm-12">
                    <h2 class="m-0 fs-5"><a href="javascript:void(0);" class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Role List</h2>
                    <ul class="breadcrumb mb-0">
                        <li class="#"><a href="#">Home</a>&nbsp;/&nbsp;</li>
                        <li class="breadcrumb-item">Role List</li>

                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 text-md-end">
                    <div class="d-inline-flex text-start">
                        <div class="me-2">
                            <a href="<?php echo base_url('add-role') ?>" class="btn btn-primary mt-3">Role List</a>

                        </div>
                        <span id="bh_visitors"></span>
                    </div>


                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card p-4 mb-4">
                    <table id="myTable" class="table display dataTable table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr.no</th>
                                <th>Role Name</th>
                                <th>Role description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($roleData as $roleList) { ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $roleList['role_name']; ?></td>

                                    <td><?php echo $roleList['role_description']; ?></td>
                                    <td><?php $roleList['role_description'] == 1 ? '<span class="badge rounded-pill bg-primary me-1 mb-1 mt-1">Active</span>' : '<span class="badge rounded-pill bg-primary me-1 mb-1 mt-1">Inactive</span>'; ?></td>
                                    <td>
                                        <a href="#" onClick="javascript:if(confirm('Do You Want to Edit Menu ?')){return true;}else{return false}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>

                                </tr>
                            <?php   } ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- Mirrored from wrraptheme.com/templates/lucid/hr/bs5/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2023 09:03:58 GMT -->