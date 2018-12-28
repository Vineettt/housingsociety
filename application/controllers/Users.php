<?php
	class Users extends CI_Controller{
		// Register user 
		public function register(){
            $data['title'] = 'Sign Up';
            $this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('houseNum', 'House Number', 'required|numeric');
            $this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
            $this->form_validation->set_rules('phone','Phone Number','required|numeric');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
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
                $username = $this->input->post('username');
				$password = sha1($this->input->post('password'));
                $result = $this->user_model->login($username, $password);
                if($result){
                    $user_data = array(
						'user_id' => $result->user_id,
                        'username' => $result->username,
                        'housenumber' => $result->house_number,
						'logged_in' => true
                    );
                    $this->session->set_userdata($user_data);
                    redirect('home');
                }else{
                    $this->session->set_flashdata('login_failed', 'Login is invalid');
					redirect('users/login');
                }
            }
        }
        public function logout(){
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('housenumber');
			$this->session->set_flashdata('user_loggedout', 'You are now logged out');
			redirect('users/login');
		}
    }
?>