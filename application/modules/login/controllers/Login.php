<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('crud/Crud_modal');
        $this->load->helper('url');
        $this->load->library('session');
        date_default_timezone_set('Asia/Kolkata');
    }

    public function login()
    {
        $data['email'] = "";
        $data['password'] = "";

        if ($this->input->post()) {
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');

            if ($this->input->post('signin') == 'signin') {
                $rules_array = array(
                    array(
                        'field' => 'email',
                        'label' => 'Email Address',
                        'rules' => 'trim|required',
                        'errors' => array(
                            'required' => 'Enter Email Address.',
                        ),
                    ),
                    array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'trim|required',
                        'errors' => array(
                            'required' => 'Enter Password',
                        ),
                    ),
                );

                $this->form_validation->set_rules($rules_array);
                if ($this->form_validation->run() == TRUE) {
                    $email = $this->input->post('email');
                    $password = $this->input->post('password');
                    $results = $this->Crud_modal->fetch_single_data('role_id,admin_id,admin_name,admin_email,admin_password,status', 'admins', 'admin_email="' . $email . '"');
                    if (!empty($results) && $results != '') {
                        $r_password = $results['admin_password'];
                        if (password_verify($password, $r_password)) {
                            if ($results['role_id'] == 1) {
                                $this->session->set_userdata('admin_id', $results['admin_id']);
                                $this->session->set_userdata('admin_name', $results['admin_name']);
                                $this->session->set_userdata('role_id', $results['role_id']);
                                redirect(base_url('admin-dashboard'));
                            } else {
                                $this->session->set_flashdata('error', 'Your Login has been blocked.');
                            }
                        } else {
                            $this->session->set_flashdata('error', 'Wrong Password');
                        }
                    } else {
                        $this->session->set_flashdata('error', 'Please Enter Valid Email Address');
                    }
                }
            }
        }
        $this->load->view('login', $data);
    }


    public function logout()
    {
        $this->session->unset_userdata('admin_id ');
        $this->session->unset_userdata('admin_name');
        $this->session->sess_destroy();
        echo '<script>window.location.href = "' . base_url() . 'login"</script>';
    }
}
