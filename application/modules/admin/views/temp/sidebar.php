<!-- top navbar -->
<nav class="navbar navbar-fixed-top bg-light">
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
        </div>
        <div class="navbar-brand ps-2">
            <a href="index" class="d-flex">
                <img style="width: 100px; height:40px;" src="assets/images/logo/acfl.png" class="avatar lg rounded me-3"
                    alt="User Profile Picture">
            </a>
        </div>
    </div>
</nav>

<!-- Sidbar menu -->
<div id="left-sidebar" class="sidebar">
    <div class="user-account p-3 mb-3">
        <div class="d-flex mb-3 pb-3 border-bottom align-items-center">
            <img src="assets/images/user.png" class="avatar lg rounded-circle me-3" alt="User Profile Picture">
            <div class="dropdown flex-grow-1">
                <span>Welcome,</span>
                <a href="#" class="dropdown-toggle user-name" data-bs-toggle="dropdown"><strong>Jessica
                        Doe</strong></a>
                <ul class="dropdown-menu p-2 shadow-sm">
                    <li><a href="page-profile2"><i class="fa fa-user me-2"></i>My Profile</a></li>
                    <li><a href="app-inbox"><i class="fa fa-envelope-open me-2"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-cog me-2"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="page-login"><i class="fa fa-power-off me-2"></i>Logout</a></li>
                </ul>
            </div>
        </div>

    </div>

    <div class="tab-content px-0">
        <div class="tab-pane fade show active" id="hr_menu" role="tabpanel">
            <nav class="sidebar-nav">
                <ul class="metismenu list-unstyled">
                    <li class="active"><a href="index"><i class="fa fa-tachometer"></i><span>
                                Dashboard</span></a></li>
                    <li>
                        <a href="#Master" class="has-arrow"><i class="fa fa-users"></i><span>Authenticaion
                                Master</span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo base_url()?>add-menu">Add Menu</a></li>
                            <li><a href="<?php echo base_url()?>add-sub-menu">Add Sub Menu </a></li>
                            <li><a href="<?php echo base_url()?>add-role">Add Role</a></li>
                            <li><a href="<?php echo base_url()?>add-permission">Add Permission</a></li>
                            <li><a href="<?php echo base_url()?>map-role-permission">Map Role & Permission</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#Master" class="has-arrow"><i class="fa fa-users"></i><span>Masters</span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo base_url()?>session-master">Session Master</a></li>
                            <li><a href="<?php echo base_url()?>designation-master">Designation Master</a></li>
                            <li><a href="<?php echo base_url()?>branch-master">Branch Master</a></li>
                            <li><a href="<?php echo base_url()?>region-master">Region Master</a></li>
                            <li><a href="<?php echo base_url()?>segment-master">Segment Master</a></li>
                            <li><a href="<?php echo base_url()?>group-master">Group Master </a></li>
                            <!-- <li><a href="role-master">Role Master </a></li> -->
                            <li><a href="<?php echo base_url()?>group-edit">Group Edit </a></li>
                            <li><a href="<?php echo base_url()?>form-type-master">Form Type Master</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#Employees" class="has-arrow"><i class="fa fa-users"></i><span>Employees</span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo base_url()?>login-creation">Login Creation</a></li>
                            <li><a href="<?php echo base_url()?>employee-master">Employee Master</a></li>
                            <li><a href="<?php echo base_url()?>edit-employee">Edit Employye Master</a></li>
                            <li><a href="<?php echo base_url()?>emp-official-details">Employee Offical Details</a></li>
                            <li><a href="<?php echo base_url()?>emp-posting-details">Employee Posting Details</a></li>
                            <li><a href="<?php echo base_url()?>emp-transfer-setting">Employee Transfer Setting </a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="#ACR" class="has-arrow"><i class="fa fa-users"></i><span>ACR Master</span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo base_url()?>budget-master">Budget Master</a></li>
                            <li><a href="<?php echo base_url()?>percentage-increment-master">Percentage Increment Master </a></li>
                            <li><a href="<?php echo base_url()?>department-master">Deartment Master</a></li>
                            <li><a href="<?php echo base_url()?>brnd-wise-convegancy">Band Wise Convegancy Setting</a></li>
                            <li><a href="<?php echo base_url()?>convegancy-tier">Convegancy Tier Master</a></li>
                            <li><a href="<?php echo base_url()?>mobile-tier">Mobile Tier Master</a></li>
                            <li><a href="<?php echo base_url()?>hra-tier">HRA Tier Master</a></li>
                            <li><a href="<?php echo base_url()?>perf-linked-special-allowance">Perf Linked Special Allowance</a></li>
                            <li><a href="<?php echo base_url()?>book-and-story">Books & Stories</a></li>
                            <li><a href="<?php echo base_url()?>book-and-periodical">Books & Periodical Settings</a></li>
                            <li><a href="<?php echo base_url()?>liverries-and-story">Liverries & Stories</a></li>
                            <li><a href="<?php echo base_url()?>mobile-reimbursement">Mobile Reimbursement</a></li>
                            <li><a href="<?php echo base_url()?>medical-reimbursement">Medical Reimbursement</a></li>

                        </ul>
                    </li>
                    <li><a href="apprasial-section"><i class="fa fa-file-text-o"></i><span>Apprasial
                                Section</span></a></li>
                    <li>
                        <a href="#Reports" class="has-arrow"><i class="fa fa-users"></i><span>Reports</span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo base_url()?>employee-master-report">Employee Reports</a></li>
                            <li><a href="<?php echo base_url()?>login-report">Login Reports</a></li>
                            <li><a href="<?php echo base_url()?>appraisal-report">Appraisal Reports</a></li>
                            <li><a href="<?php echo base_url()?>transfer-report">Transfer Reports</a></li>
                            <li><a href="<?php echo base_url()?>traning-report">Traning Reports</a></li>
                            <li><a href="<?php echo base_url()?>pending=report">Pendiing Reports</a></li>
                            <li><a href="<?php echo base_url()?>average-garding-report">Average Grading Details</a></li>
                            <li><a href="<?php echo base_url()?>comparision-details">Comparision Details</a></li>
                            <li><a href="<?php echo base_url()?>sales-target-reports">Sales Target Reports</a></li>
                            <li><a href="<?php echo base_url()?>acr-reports">ACR Reports</a></li>
                        </ul>
                    </li>
                    </li>
                    <li><a href="<?php echo base_url()?>help-supports"><i class="fa fa-user"></i><span>Help And
                                Supports</span></a></li>

                </ul>
            </nav>
        </div>



    </div>
</div>