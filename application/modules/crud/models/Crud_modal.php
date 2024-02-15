<?php defined('BASEPATH') or exit('No direct script access allowed');
class Crud_modal extends CI_model
{
	function __construct()
	{
		$this->load->database();
		$this->load->library('session');
		$this->load->library('email');
	}
	function check_email_ajax()
	{
		try {
			$this->db->initialize();
			$email = $this->input->post('Email');
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where(array('user_email' => $email));
			$query = $this->db->get();
			//	echo $this->db->last_query();
			if ($query->num_rows() == 1) {
				$result =		$query->row_array();
				$this->db->close();
				return $result;
			} else {
				$this->db->close();
				return 0;
			}
		} catch (Exception $e) {
			echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
		}
	}

	function fetch_update_data($where, $tblname)
	{

		try {
			$this->db->initialize();
			$this->db->select('*');
			$this->db->from($tblname);
			$this->db->where($where);
			$query = $this->db->get();

			$result =		$query->row_array();
			//$this->db->close();	
			//echo 	 $this->db->last_query();die();
			return $result;
		} catch (Exception $e) {
			echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
		}
	}

	function data_insert_return_id($bl_name, $field)
	{
		try {
			$this->db->initialize();
			$insert = $this->db->insert($bl_name, $field);
			$id['id'] = $this->db->insert_id();

			if ($insert == 1) {
				//$this->db->close();	
				return $id['id'];
			} else {
				//$this->db->close();	
				return 0;
			}
		} catch (Exception $e) {
			echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
		}
	}

	function update_data($where, $tblname, $field)
	{
		try {
			$this->db->initialize();
			$this->db->where($where);

			$update =  $this->db->update($tblname, $field);
			return $update;
		} catch (Exception $e) {
			echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
		}
	}

	public function all_data_select($fields, $tbl_name, $where, $orderby)
	{
		try {
			$this->db->initialize();
			$this->db->select($fields);
			$this->db->from($tbl_name);
			$this->db->where($where);
			$query = $this->db->order_by($orderby);
			$query = $this->db->get();
			$result =		$query->result_array();
			//echo $this->db->last_query();	die();
			return $result;
		} catch (Exception $e) {
			echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
		}
	}
	public function all_data_select_group_by($fields, $tbl_name, $where, $orderby, $group)
	{
		try {
			$this->db->initialize();
			$this->db->select($fields);
			$this->db->from($tbl_name);
			$this->db->where($where);
			$query = $this->db->order_by($orderby);
			$query = $this->db->group_by($group);
			$query = $this->db->get();
			$result = $query->result_array();
			//echo $this->db->last_query();	die();
			return $result;
		} catch (Exception $e) {
			echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
		}
	}
	function data_insert($bl_name, $field)
	{
		try {
			$this->db->initialize();
			$insert = $this->db->insert($bl_name, $field);

			if ($insert == 1) {
				//$this->db->close();	
				return 1;
			} else {
				//$this->db->close();	
				return 0;
			}
		} catch (Exception $e) {
			echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
		}
	}

	function fetchdata_with_limit($fields, $tbl_name, $where, $orderby, $limit)
	{
		try {
			$this->db->initialize();
			$this->db->select($fields);
			$this->db->from($tbl_name);
			$this->db->where($where);
			$query = $this->db->order_by($orderby);
			$query = $this->db->limit($limit);
			$query = $this->db->get();
			$result =		$query->result_array();
			//$this->db->close();	
			return $result;
		} catch (Exception $e) {
			echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
		}
	}


	public function fetch_single_data($fields, $tbl_name, $where)
	{
		$this->db->initialize();
		$this->db->select($fields);
		$this->db->from($tbl_name);
		$this->db->where($where);
		$query = $this->db->get();
		$result = $query->row_array();
		//$this->db->close();	
		return $result;
	}

	public function fetch_single_data_orderby($fields, $tbl_name, $where, $orderby)
	{
		$this->db->initialize();
		$this->db->select($fields);
		$this->db->from($tbl_name);
		$this->db->where($where);
		$this->db->order_by($orderby, 'DESC');
		$query = $this->db->get();
		$result = $query->row_array();
		//$this->db->close();	
		return $result;
	}
	// Sohrab


	function fetch_all($tblname, $orderby)
	{
		try {
			$this->db->initialize();
			$this->db->select('*');
			$this->db->from($tblname);
			$query = $this->db->order_by($orderby);
			$query = $this->db->get();
			$result = $query->result_array();
			$this->db->close();
			//	echo 	 $this->db->last_query();
			return $result;
		} catch (Exception $e) {
			echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
		}
	}

	public function check_numrow($tblname, $where)
	{
		$this->db->initialize();
		$query = $this->db->select('*')->from($tblname)->where($where)->get();
		return $query->num_rows();
	}

	function delete_data($where, $tblname)
	{
		$this->db->initialize();
		$this->db->where($where);
		$delete =  $this->db->delete($tblname);
		$this->db->close();
		return $delete;
	}
	function insert_batch($table, $data)
	{
		$this->db->initialize();
		return $this->db->insert_batch($table, $data);
		$this->db->close();
	}
	function fetch_data_by_one_table_join($field, $table_name, $join1, $where)
	{
		$this->db->initialize();
		$result = $this->db->select($field)
			->from($table_name)
			->join($join1[0], $join1[1], $join1[2])
			->where($where)
			->get()
			->result_array();
		//$this->db->close();	
		return $result;
	}
	function fetch_data_by_two_table_join($field, $table_name, $join1, $join2, $where)
	{
		$this->db->initialize();
		$result =  $this->db->select($field)
			->from($table_name)
			->join($join1[0], $join1[1], $join1[2])
			->join($join2[0], $join2[1], $join2[2])
			->where($where)
			->get()
			->result_array();
		$this->db->close();
		return $result;
	}
	function fetch_data_by_three_table_join($field, $table_name, $join1, $join2, $join3, $where)
	{
		$this->db->initialize();
		$result = $this->db->select($field)
			->from($table_name)
			->join($join1[0], $join1[1], $join1[2])
			->join($join2[0], $join2[1], $join2[2])
			->join($join3[0], $join3[1], $join3[2])
			->where($where)
			->get()
			->result_array();
		$this->db->close();
		return $result;
	}
	public function fetch_all_data($fields, $tbl_name, $where)
	{
		$this->db->initialize();
		$this->db->select($fields);
		$this->db->from($tbl_name);
		$this->db->where($where);
		$query = $this->db->get();
		$result = $query->result_array();
		$this->db->close();
		return $result;
	}

	function fetch_data_by_one_table_join_with_order_limit($field, $table_name, $join1, $where, $order, $limit)
	{
		$this->db->initialize();
		$result = $this->db->select($field)
			->from($table_name)
			->join($join1[0], $join1[1], $join1[2])
			->where($where)
			->order_by($order)
			->limit($limit)
			->get()
			->result_array();
		$this->db->close();
		return $result;
	}
	function fetchdata_with_limit_and_having($select, $table_name, $where, $group, $having, $order, $limit)
	{
		$this->db->initialize();
		$result =  $this->db->select($select)
			->from($table_name)
			->where($where)
			->group_by($group)
			->having($having)
			->order_by($order)
			->limit($limit)
			->get()
			->result_array();
		//$this->db->close();
		return $result;
	}
	function fetchdata_with_stat_and_end_limit($fields, $tbl_name, $where, $orderby, $limit)
	{
		$this->db->initialize();
		$this->db->select($fields);
		$this->db->from($tbl_name);
		$this->db->where($where);
		$this->db->order_by($orderby);
		$this->db->limit($limit[1], $limit[0]);   // start and limit
		$query = $this->db->get();
		$result = $query->result_array();
		$this->db->close();
		return $result;
	}


	function fetch_data_by_four_table_join_with_limit($field, $table_name, $join1, $join2, $join3, $join4, $where, $limit, $order)
	{
		return $this->db->select($field)
			->from($table_name)
			->join($join1[0], $join1[1], $join1[2])
			->join($join2[0], $join2[1], $join2[2])
			->join($join3[0], $join3[1], $join3[2])
			->join($join4[0], $join4[1], $join4[2])
			->where($where)
			->order_by($order)
			->limit($limit)
			->get()
			->result_array();
	}
	function fetch_data_by_four_table_join($field, $table_name, $join1, $join2, $join3, $join4, $where)
	{
		return $this->db->select($field)
			->from($table_name)
			->join($join1[0], $join1[1], $join1[2])
			->join($join2[0], $join2[1], $join2[2])
			->join($join3[0], $join3[1], $join3[2])
			->join($join4[0], $join4[1], $join4[2])
			->where($where)
			->get()
			->result_array();
	}

	public function data_insert_returnid($bl_name, $field)
	{

		try {
			$this->db->initialize();
			$insert = $this->db->insert($bl_name, $field);
			$result =  $this->db->insert_id();
			$this->db->close();
			return $result;
		} catch (Exception $e) {

			echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
		}
	}

	function fetch_data_category_by_one_table_join_with_order_limit($field, $table_name, $join1, $where, $order, $limit, $whereCateID)
	{
		$this->db->initialize();
		$result = $this->db->select($field)
			->from($table_name)
			->join($join1[0], $join1[1], $join1[2])
			->where($where)
			->where($whereCateID)
			->order_by($order)
			->limit($limit)
			->get()
			->result_array();
		//$this->db->close();
		return $result;
	}

	public function all_data($fields, $tbl_name, $orderby)
	{
		try {
			$this->db->initialize();
			$this->db->select($fields);
			$this->db->from($tbl_name);
			$query = $this->db->order_by($orderby);
			$query = $this->db->get();
			$result =        $query->result_array();
			//$this->db->close();    
			return $result;
		} catch (Exception $e) {
			echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
		}
	}

	public function delete_record($where, $table)
	{
		$this->db->initialize();
		$this->db->where($where);
		$this->db->delete($table);
		//$this->db->close();	
		return true;
	}

	public function getTotalSysUsers($input)
	{
		$this->db->initialize();
		$query = $this->db->select('*')
			->from('sysusers')
			->join('sysstate', 'sysusers.SUState = sysstate.STId', 'left')
			->join('sysdisctrict', 'sysusers.SUDistrict = sysdisctrict.DSId', 'left')
			->join('syscity', 'sysusers.SUVillage = syscity.CTId', 'left');

		if (!empty($input['peer_user_type'])) {
			$query->where('sysusers.userType', $input['peer_user_type']);
		}
		if (!empty($input['date_from'])) {
			$query->where('sysusers.SURegdate >=', $input['date_from']);
		}
		if (!empty($input['date_to'])) {
			$query->where('sysusers.SURegdate <=', $input['date_to']);
		}
		return $query->get()->num_rows();
	}


	public function getSysUsers($input)
	{
		$this->db->initialize();
		$query = $this->db->select('*')
			->from('sysusers')
			->join('sysstate', 'sysusers.SUState = sysstate.STId', 'left')
			->join('sysdisctrict', 'sysusers.SUDistrict = sysdisctrict.DSId', 'left')
			->join('syscity', 'sysusers.SUVillage = syscity.CTId', 'left');
		if (!empty($input['peer_user_type'])) {
			$query->where('userType', $input['peer_user_type']);
		}
		if (!empty($input['date_from'])) {
			$query->where('SURegdate >=', $input['date_from']);
		}
		if (!empty($input['date_to'])) {
			$query->where('SURegdate <=', $input['date_to']);
		}

		$query->order_by("SUId", "asc");
		$query->limit($input['length'], $input['start']);
		$result = $query->get()->result_array();
		return $result;
	}
}
