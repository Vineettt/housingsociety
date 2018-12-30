<?php
	class Admin extends CI_Controller{
        public function index(){
            if($this->session->userdata('adminlogged_in')){ 
                redirect('admin/dashboard');
            }else{
                redirect('admin/login');
            }
        }
		public function dashboard(){
            if($this->session->userdata('adminlogged_in')){ 
                $data['title']='Dashboard';
                $data['users'] = $this->admin_model->getUsers();
                $data['user_count'] = $this->db->count_all('users');
                $data['post_count'] = $this->db->count_all('post');
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/dashboard', $data);
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
                    $this->load->view('admin/login', $data);
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
        public function users(){
            if($this->session->userdata('adminlogged_in')){ 
                $data['title']='Users';
                $data['users'] = $this->admin_model->getUsers();
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/users', $data);
                $this->load->view('admin/template/footer', $data);
            }else{
                redirect('admin/login');   
            }
        }
        public function billing(){
            if($this->session->userdata('adminlogged_in')){ 
                $data['title']='Billing';
                $data['billings'] = $this->admin_model->billingDetail();
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/billing', $data);
                $this->load->view('admin/template/footer', $data);
            }else{
                redirect('admin/login');   
            }
        }
        public function daily_notification(){
            if($this->session->userdata('adminlogged_in')){ 
                $data['title']='Daily Notification';
                $data['daily_notifications']=$this->admin_model->getAllDailyNotification();
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('message', 'Message', 'required');
                $this->form_validation->set_rules('date', 'Date', 'required');
                if($this->form_validation->run() === FALSE){
                    $this->load->view('admin/template/header', $data);
                    $this->load->view('admin/template/sidebar', $data);
                    $this->load->view('admin/daily_notification', $data);
                    $this->load->view('admin/template/footer', $data);
                }else{
                    $data = array(
                        'dn_title' => $this->input->post('title'),
                        'dn_message' => $this->input->post('message'),
                        'dn_date' => $this->input->post('date')
                    );
                    $this->admin_model->insertNotification($data);
                    $this->session->set_flashdata('daily_notification', 'Daily Notification Created');
                    redirect('admin/daily_notification');
                }
            }else{
                redirect('admin/login');   
            }
        }
        public function posts(){
            if($this->session->userdata('adminlogged_in')){ 
                $data['title']='Suggestion / Complaint';
                $data['posts']=$this->admin_model->getAllPost();
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/posts', $data);
                $this->load->view('admin/template/footer', $data);
            }else{
                redirect('admin/login');   
            }
        }
    }
?>