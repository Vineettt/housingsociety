<?php
	class Admin extends CI_Controller{
		public function dashboard(){
            if($this->session->userdata('adminlogged_in')){ 
                $data['title']='Dashboard';
                $data['users'] = $this->admin_model->getUsers();
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/dashboard/index', $data);
                $this->load->view('admin/template/footer', $data);
            }else{
                redirect('admin/login');   
            }
        }
        public function Login(){
            if($this->session->userdata('adminlogged_in')){ 
                redirect('admin/dashboard');
            }else{
                $data['title']='Admin Login';
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');
                if($this->form_validation->run() === FALSE){
                    $this->load->view('admin/template/header', $data);
                    $this->load->view('admin/login/index', $data);
                    $this->load->view('admin/template/footer', $data);
                }else{
                    $username = $this->input->post('username');
                    $password = sha1($this->input->post('password'));
                    $result = $this->admin_model->login($username, $password);
                    if($result){
                        $user_data = array(
                            'admin_id' => $result->admin_id,
                            'admin_username' => $result->admin_username,
                            'adminlogged_in' => true
                        );
                        $this->session->set_userdata($user_data);
                        $this->session->set_flashdata('admin_loggedin', 'You are now logged in');
                        redirect('admin/dashboard');
                    }else{
                        $this->session->set_flashdata('adminlogin_failed', 'Login is invalid');
                        redirect('admin/login');
                    }
                }
            }
        }
        public function logout(){
			$this->session->unset_userdata('adminlogged_in');
			$this->session->unset_userdata('admin_id');
            $this->session->unset_userdata('adminlogged_in');
			$this->session->set_flashdata('user_loggedout', 'You are now logged out');
			redirect('admin/login');
        }
    }
?>