<?php
	class Pages_model extends CI_Model{
		public function __construct(){
			$this->load->database();
        }
        public function todayNotification($date){
            $this->db->where('dn_date',$date);
            $query = $this->db->get('daily_notification');
            return $query->result_array();
        }
        public function todayEvent($date){
            $this->db->where('event_startdate',$date);
            $query = $this->db->get('event');
            return $query->result_array();
        }
    }
?>