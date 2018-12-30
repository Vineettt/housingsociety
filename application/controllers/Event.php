<?php
	class Event extends CI_Controller{
		public function index($offset = 0){
            if($this->session->userdata('logged_in')){                 
                $config['base_url'] = base_url() . 'event/index';
    			$config['total_rows'] = $this->db->count_all('event');  
	    		$config['per_page'] = 3;
		    	$config['uri_segment'] = 3;
			    $config['attributes'] = array('class' => 'pagination-link');
			    $this->pagination->initialize($config);  
                $data['title'] = 'Event';
                $data['events'] = $this->event_model->get_events(FALSE, $config['per_page'], $offset);
                $this->load->view('templates/header', $data);
                $this->load->view('event/index', $data);
                $this->load->view('templates/footer', $data);
            }else{
                redirect('users/login');
            }
        }
        public function view($slug = NULL){
			$data['event'] = $this->event_model->get_events($slug);
			if(empty($data['event'])){
				show_404();
			}
			$data['interested'] = $this->event_model->checkEvent($slug, $_SESSION['user_id']);
			$this->form_validation->set_rules('slug', 'Slug', 'required');
			if($this->form_validation->run() === FALSE){
				$data['title'] = $data['event']['event_title'];
				$this->load->view('templates/header',$data);
				$this->load->view('event/view', $data);
				$this->load->view('templates/footer', $data);
			}else{
				if($this->uri->segment(3) !=  $this->input->post('slug')){
					redirect('event');
				}else{
					$data = array(
						'user_id' => $_SESSION['user_id'],
						'event_id' => $this->uri->segment(3)
					);
					$this->event_model->insertShownInterest($data);
					$this->session->set_flashdata('shown_interest', 'You are now registered and can log in');
					redirect('event/'.$this->uri->segment(3).'');
				}
			}
		}
    }
?>
        