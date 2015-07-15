<?php
	
	class Press_model extends CI_Model {
		public function __construct()
		{
			$this->load->database();
		}
		public function get_press($limit =2){
			$query = $this->db->get('press',$limit);
			return $query->result_array();
		}
	}
?>
