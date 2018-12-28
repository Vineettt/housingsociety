<?php
	class Users extends CI_Controller{
		// Register user 
		public function register(){
            $data['title'] = 'Sign Up';
            $this->form_validation->set_rules('username', 'Username', 'required');
            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header', $data);
                $this->load->view('users/register', $data);
                $this->load->view('templates/footer', $data);
            }else{
                $data = array(
                    'username' => $this->input->post('username'),
                    'first_name' => $this->input->post('fname'),
                    'last_name' => $this->input->post('lname'),
                    'house_number' => $this->input->post('houseNum'),
                    'phone_number' => $this->input->post('phone'),
                    'password' => sha1($this->input->post('password')),
                    'email' => $this->input->post('email')
                );
                $this->load->model('user_model');
                $this->user_model->register($data);
                $this->session->set_flashdata('user_registered', 'You are now registered and can log in');
            }
        }
        public function login(){
            $data['title'] = 'Sign In';
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header', $data);
                $this->load->view('users/login', $data);
                $this->load->view('templates/footer', $data);
            }else{
                $this->load->model('user_model');
                $username = $this->input->post('username');
				$password = sha1($this->input->post('password'));
                $user_id = $this->user_model->login($username, $password);
                if($user_id){
                    $user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true
                    );
                    $this->session->set_userdata($user_data);
                }else{

                }
            }
        }
        public function logout(){
			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');

			// Set message
			$this->session->set_flashdata('user_loggedout', 'You are now logged out');

			redirect('users/login');
		}
    }
?>