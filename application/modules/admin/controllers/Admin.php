<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends MY_Controller
{
    function __construct()
    {
        error_reporting(0);
        parent::__construct();
        $this->load->library('Phpmailer');
        $this->load->model('crud/Crud_modal');
        $this->load->model('Admin_model');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('pagination');
        date_default_timezone_set('Asia/Kolkata');
    }

    public function index()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('index');
        $this->load->view('temp/footer');
    }

    public function add_menu()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('add-menu');
        $this->load->view('temp/footer');
    }
    public function menu_list()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('menu-list');
        $this->load->view('temp/footer');
    }

    public function add_sub_menu()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('add-sub-menu');
        $this->load->view('temp/footer');
    }

    public function sub_menu_list()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('sub-menu-list');
        $this->load->view('temp/footer');
    }

    public function add_role()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('add-role');
        $this->load->view('temp/footer');
    }

    public function role_list()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('role-list');
        $this->load->view('temp/footer');
    }

    public function add_permission()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('add-permission');
        $this->load->view('temp/footer');
    }
    public function permissions_list()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('permissions-list');
        $this->load->view('temp/footer');
    }
    public function map_role_permission()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('map-role-permission');
        $this->load->view('temp/footer');
    }


    public function session_master()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('session-master');
        $this->load->view('temp/footer');
    }
    public function designation_master()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('designation-master');
        $this->load->view('temp/footer');
    }
    public function branch_master()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('branch-master');
        $this->load->view('temp/footer');
    }
    public function region_master()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('region-master');
        $this->load->view('temp/footer');
    }
    public function segment_master()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('segment-master');
        $this->load->view('temp/footer');
    }
    public function group_master()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('group-master');
        $this->load->view('temp/footer');
    }
    public function group_edit()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('group-edit');
        $this->load->view('temp/footer');
    }
    public function form_type_master()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('form-type-master');
        $this->load->view('temp/footer');
    }
    public function login_creation()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('login-creation');
        $this->load->view('temp/footer');
    }
    public function employee_master()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('employee-master');
        $this->load->view('temp/footer');
    }
    public function edit_employee()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('edit-employee');
        $this->load->view('temp/footer');
    }
    public function emp_official_details()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('emp-official-details');
        $this->load->view('temp/footer');
    }
    public function emp_posting_details()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('emp-posting-details');
        $this->load->view('temp/footer');
    }
    public function emp_transfer_setting()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('emp-transfer-setting');
        $this->load->view('temp/footer');
    }

    public function budget_master()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('budget-master');
        $this->load->view('temp/footer');
    }
    public function percentage_increment_master()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('percentage-increment-master');
        $this->load->view('temp/footer');
    }
    public function brnd_wise_convegancy()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('brnd-wise-convegancy');
        $this->load->view('temp/footer');
    }
    public function convegancy_tier()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('convegancy-tier');
        $this->load->view('temp/footer');
    }
    public function mobile_tier()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('mobile-tier');
        $this->load->view('temp/footer');
    }
    public function hra_tier()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('hra-tier');
        $this->load->view('temp/footer');
    }
    public function perf_linked_special_allowance()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('perf-linked-special-allowance');
        $this->load->view('temp/footer');
    }
    public function book_and_story()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('book-and-story');
        $this->load->view('temp/footer');
    }
    public function book_and_periodical()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('book-and-periodical');
        $this->load->view('temp/footer');
    }
    public function liverries_and_story()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('liverries-and-story');
        $this->load->view('temp/footer');
    }
    public function mobile_reimbursement()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('mobile-reimbursement');
        $this->load->view('temp/footer');
    }
    public function medical_reimbursement()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('medical-reimbursement');
        $this->load->view('temp/footer');
    }
    public function apprasial_section()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('apprasial-section');
        $this->load->view('temp/footer');
    }
    public function session_master_list()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('session-master-list');
        $this->load->view('temp/footer');
    }
    public function designation_list()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('designation-list');
        $this->load->view('temp/footer');
    }
    public function branch_list()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('branch-list');
        $this->load->view('temp/footer');
    }
    public function region_list()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('region-list');
        $this->load->view('temp/footer');
    }
    public function segment_list()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('segment-list');
        $this->load->view('temp/footer');
    }
    public function group_list()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('group-list');
        $this->load->view('temp/footer');
    }
    public function login_list()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('login-list');
        $this->load->view('temp/footer');
    }
    public function employeePosting_list()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('employeePosting-list');
        $this->load->view('temp/footer');
        
    }
}
