<?php
	class Profile extends CI_Controller{
		// Register user 
		public function index(){
            if($this->session->userdata('logged_in')){   
                $data['title'] = 'Profile';
                $data['subtopic'] = 'Billing Information';
                $data['billing_info'] = $this->profile_model->checkbillinginfo($_SESSION['housenumber'],date('m'),date('Y'));
                $data['profile_detail'] = $this->profile_model->get_profile_detail();
		    	$this->load->view('templates/header', $data);
			    $this->load->view('profile/index', $data);
			    $this->load->view('templates/footer', $data);
            }else{
                redirect('users/login');
            }
        }
        public function edit(){
            if($this->session->userdata('logged_in')){   
                $data['title'] = 'Profile Edit';
                $this->form_validation->set_rules('fname', 'First Name', 'required');
                $this->form_validation->set_rules('lname', 'Last Name', 'required');
                $this->form_validation->set_rules('houseNum', 'House Number', 'required|numeric');
                $this->form_validation->set_rules('phone','Phone Number','required|numeric');
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                if($this->form_validation->run() === FALSE){
                    $data['profile_detail'] = $this->profile_model->get_profile_detail();
                    $this->load->view('templates/header', $data);
                    $this->load->view('profile/edit', $data);
                    $this->load->view('templates/footer', $data);
                }else{
                    $data = array(
                        'first_name' => $this->input->post('fname'),
                        'last_name' => $this->input->post('lname'),
                        'house_number' => $this->input->post('houseNum'),
                        'phone_number' => $this->input->post('phone'),
                        'email' => $this->input->post('email')
                    );
                    $this->profile_model->profile_detail_update($data);
                    $this->session->set_flashdata('profile_updated', 'Your profile has been updated.');
                    redirect('profile');
                }
            }else{
                redirect('users/login');
            }
        }
    }
?>