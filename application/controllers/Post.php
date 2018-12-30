<?php
	class Post extends CI_Controller{
        public function index(){
            if($this->session->userdata('logged_in')){ 
                $data['title'] ='Suggestion and Complaint';
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('body', 'Body', 'required');
                $this->form_validation->set_rules('category','Category','required');
                if($this->form_validation->run() === FALSE){
                    $this->load->view('templates/header', $data);
                    $this->load->view('post/index', $data);
                    $this->load->view('templates/footer', $data);
                }else{
                    $data = array(
                        'user_id' => $_SESSION['user_id'],
                        'post_title' => $this->input->post('title'),
                        'post_body' => $this->input->post('body'),
                        'post_category' => $this->input->post('category')
                    );
                    $this->post_model->insertPost($data);
                    $this->session->set_flashdata('post_submitted', 'Your '.$this->input->post('category').' has been submitted.');
                    redirect('post');
                }
            }else{
                redirect('users/login');
            }
        }
    }
?>