<?php
	class Profile_model extends CI_Model{
		public function __construct(){
			$this->load->database();
        }
        public function get_profile_detail(){ 
            $query = $this->db->get_where('users', array('user_id' => $_SESSION['user_id']));
			return $query->row_array();
        }
        public function profile_detail_update($data){ 
            $this->db->where('user_id', $_SESSION['user_id']);
            return $this->db->update('users',$data);
        }
        public function checkbillinginfo($housenumber,$month,$year){
            $query = $this->db->get_where('billing', array('house_number' => $housenumber, 'month'=>$month, 'year'=>$year));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
        }
    }
?>