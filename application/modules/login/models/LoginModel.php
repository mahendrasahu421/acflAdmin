<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model{
    function __construct()
    {
        parent :: __construct();
        $this->load->database();
        date_default_timezone_set('Asia/Kolkata');

    }

}
