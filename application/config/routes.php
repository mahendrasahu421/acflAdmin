<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'login/Login/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'login/Login/login';
$route['logout'] = 'login/Login/logout';
$route['admin-dashboard'] = 'admin/Admin/check_login';
$route['add-menu'] = 'admin/Admin/add_menu';
$route['menu-list'] = 'admin/Admin/menu_list';
$route['add-sub-menu'] = 'admin/Admin/add_sub_menu';
$route['sub-menu-list'] = 'admin/Admin/sub_menu_list';
$route['add-role'] = 'admin/Admin/add_role';
$route['create-new-role'] = 'admin/Admin/create_new_role';
$route['role-list'] = 'admin/Admin/role_list';
$route['add-permission'] = 'admin/Admin/add_permission';
$route['permissions-list'] = 'admin/Admin/permissions_list';
$route['map-role-permission'] = 'admin/Admin/map_role_permission';
$route['session-master'] = 'admin/Admin/session_master';
$route['designation-master'] = 'admin/Admin/designation_master';
$route['branch-master'] = 'admin/Admin/branch_master';
$route['region-master'] = 'admin/Admin/region_master';
$route['segment-master'] = 'admin/Admin/segment_master';
$route['group-master'] = 'admin/Admin/group_master';
$route['group-edit'] = 'admin/Admin/group_edit';
$route['form-type-master'] = 'admin/Admin/form_type_master';
$route['login-creation'] = 'admin/Admin/login_creation';
$route['employee-master'] = 'admin/Admin/employee_master';
$route['edit-employee'] = 'admin/Admin/edit_employee';
$route['emp-official-details'] = 'admin/Admin/emp_official_details';
$route['emp-posting-details'] = 'admin/Admin/emp_posting_details';
$route['emp-transfer-setting'] = 'admin/Admin/emp_transfer_setting';
$route['budget-master'] = 'admin/Admin/budget_master';
$route['percentage-increment-master'] = 'admin/Admin/percentage_increment_master';
$route['brnd-wise-convegancy'] = 'admin/Admin/brnd_wise_convegancy';
$route['convegancy-tier'] = 'admin/Admin/convegancy_tier';
$route['mobile-tier'] = 'admin/Admin/mobile_tier';
$route['hra-tier'] = 'admin/Admin/hra_tier';
$route['perf-linked-special-allowance'] = 'admin/Admin/perf_linked_special_allowance';
$route['book-and-story'] = 'admin/Admin/book_and_story';
$route['book-and-periodical'] = 'admin/Admin/book_and_periodical';
$route['liverries-and-story'] = 'admin/Admin/liverries_and_story';
$route['mobile-reimbursement'] = 'admin/Admin/mobile_reimbursement';
$route['medical-reimbursement'] = 'admin/Admin/medical_reimbursement';
$route['apprasial-section'] = 'admin/Admin/apprasial_section';
$route['session-master-list'] = 'admin/Admin/session_master_list';
$route['designation-list'] = 'admin/Admin/designation_list';
$route['branch-list'] = 'admin/Admin/branch_list';
$route['region-list'] = 'admin/Admin/region_list';
$route['segment-list'] = 'admin/Admin/segment_list';
$route['group-list'] = 'admin/Admin/group_list';
$route['login-list'] = 'admin/Admin/login_list';
$route['employeePosting-list'] = 'admin/Admin/employeePosting_list';

// Reports sessions
$route['employee-master-report'] = 'reports/AdminReports/employee_master_report';
