<?php
	class Billing extends CI_Controller{
		public function index(){
            if($this->session->userdata('logged_in')){ 
                $data['title'] = 'Maintenance Payment';
                $data['billing_info'] = $this->profile_model->checkbillinginfo($_SESSION['housenumber'],date('m'),date('Y'));
                $this->form_validation->set_rules('cardnumber', 'Card Number', 'required|numeric|max_length[16]');
                $this->form_validation->set_rules('ccv', 'CCV', 'required|numeric|max_length[3]');
                $this->form_validation->set_rules('amount', 'Amount', 'required|numeric');
                if($this->form_validation->run() === FALSE){
                    $this->load->view('templates/header', $data);
                    $this->load->view('billing/index', $data);
                    $this->load->view('templates/footer', $data);
                }else{
                    $data = array(
                        'user_id' => $_SESSION['user_id'],
                        'house_number' => $_SESSION['housenumber'],
                        'month' => date('m'),
                        'year' => date('Y'),
                        'amount' => $this->input->post('amount'),
                        'card_number' => $this->input->post('cardnumber'),
                        'ccv' => $this->input->post('ccv'),
                    );
                    $this->billing_model->insert_billing_detail($data);
                    $this->session->set_flashdata('billing_successfull', 'Your payment is successful!!!');
                    redirect('profile');
                }
            }else{
                redirect('users/login');
            }
        }
        public function info($offset = 0){
            if($this->session->userdata('logged_in')){                 
                $config['base_url'] = base_url() . 'billing/info/';
    			$config['total_rows'] = $this->billing_model->count_billing();
	    		$config['per_page'] = 3;
		    	$config['uri_segment'] = 3;
			    $config['attributes'] = array('class' => 'pagination-link');
			    $this->pagination->initialize($config);  
                $data['title'] = 'Billing Information';
                $data['billing_info'] = $this->profile_model->checkbillinginfo($_SESSION['housenumber'],date('m'),date('Y'));
                $data['billingDetails'] = $this->billing_model->get_billing_deatils(FALSE, $config['per_page'], $offset);
                $this->load->view('templates/header', $data);
                $this->load->view('billing/info', $data);
                $this->load->view('templates/footer', $data);
            }else{
                redirect('users/login');
            }
        }

    }
?>