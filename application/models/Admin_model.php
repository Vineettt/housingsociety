<?php
	class Admin_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function login($username, $password){
			$this->db->where('admin_username', $username);
			$this->db->where('admin_password', $password);
			$result = $this->db->get('admin');
			if($result->num_rows() == 1){
				return $result->row(0);
			} else {
				return false;
			}
        }
        public function getUsers(){
            $result = $this->db->get('users');
            return $result->result();
        }
    }
?>