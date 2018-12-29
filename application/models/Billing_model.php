<?php
	class Billing_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function insert_billing_detail($data){
			return $this->db->insert('billing', $data);
        }
        public function count_billing(){
            $this->db->where('house_number',$_SESSION['housenumber']);
            $this->db->from("billing");
            return $this->db->count_all_results();
        }
        public function get_billing_deatils($slug = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}
			if($slug === FALSE){
                $this->db->join('users', 'users.user_id = billing.user_id');
                $this->db->where('billing.house_number',$_SESSION['housenumber']);
				$this->db->order_by('month', 'DESC','year','DESC');
				$query = $this->db->get('billing');
				return $query->result_array();
			} 
			$query = $this->db->get_where('billing', array('slug' => $slug));
			return $query->row_array();
		}
    }
?>