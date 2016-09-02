<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class dashboard_model extends CI_MODEL
	{
		
		public function __construct()
		{
			$this->load->database();			
		}

		public function f_get_menu()
		{
			$query = $this->db->get('food');
			return $query->result_array();			
		}

		public function f_get_menu_type()
		{
			$query = $this->db->get('foodtype');
			return $query->result_array();
		}

		public function f_get_orders($table)
		{
			// $query = $this->db->get_where('ordertable', 'tabno', $table);
			$query = $this->db->query('SELECT * FROM `ordertable` WHERE tabno=1');
			return $query->result_array();
		}
	}
