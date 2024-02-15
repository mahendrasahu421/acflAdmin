<?php 

class Report_model extends CI_Model{
    function __construct()
	{
		parent::__construct();
		$this->load->model('crud/Crud_modal');
		$this->load->database();
		date_default_timezone_set('Asia/Kolkata');
		$sql = "SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));";
		
}
}