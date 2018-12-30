<?php
	class Event_model extends CI_Model{
		public function __construct(){
			$this->load->database();
        }
        public function get_events($slug = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}
			if($slug === FALSE){
				$this->db->order_by('event_startdate', 'DESC');
				$query = $this->db->get('event');
				return $query->result_array();
			} 
			$query = $this->db->get_where('event', array('event_id' => $slug));
			return $query->row_array();
		}
		public function checkEvent($event_id, $user_id){
			$query = $this->db->get_where('eventparticipant', array('event_id' => $event_id, 'user_id'=>$user_id));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}
		public function insertShownInterest($data){
			return $this->db->insert('eventparticipant', $data);
		}
    }
?>