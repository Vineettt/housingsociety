<?php
	class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
        }
        public function insertPost($data){
            return $this->db->insert('post', $data);
        }
    }
?>