<?php

defined('BASEPATH') or exit('No direct script access allowed');
class AdminReports extends MY_Controller
{
    function __construct()
    {
        error_reporting(0);
        parent::__construct();
        $this->load->library('Phpmailer');
        $this->load->model('crud/Crud_modal');
        $this->load->model('Report_model');
        $this->load->model('admin/Admin_model');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('pagination');
        date_default_timezone_set('Asia/Kolkata');
    }

    public function employee_master_report()
    {
        $this->load->view('temp/head');
        $this->load->view('temp/sidebar');
        $this->load->view('employee-master-report');
        $this->load->view('temp/footer');
    }
}
