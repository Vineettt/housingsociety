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
        public function billingDetail(){
            $this->db->join('users', 'users.user_id = billing.user_id');
            $result = $this->db->get('billing');
            return $result->result();
        }
        public function insertNotification($data){
			return $this->db->insert('daily_notification', $data);
		}
		public function getAllDailyNotification(){
            $result = $this->db->get('daily_notification');
            return $result->result();
		}
		public function getAllPost(){
			$this->db->order_by('post.post_id', 'DESC');
			$this->db->join('users', 'users.user_id = post.user_id');
            $result = $this->db->get('post');
            return $result->result();
        }
    }
?>