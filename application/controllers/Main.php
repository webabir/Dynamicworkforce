<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function login_page(){
		$this->load->view('login');
	}

	public function login_check(){
		$phone = $this->input->post('phone', true);
		$password = $this->input->post('password', true);
		$this->load->model('Model_main');
		$result = $this->Model_main->admin_login_check($phone, $password);
		$sdata = array();
		if ($result && $phone != null && $password != null) {

			$_SESSION['admin'] = true;
			$this->session->set_flashdata('success', 'You are now logged in as an admin');
			redirect(base_url());
		} else {
			$this->session->set_flashdata('error', 'Invalid Number or Password');
			redirect('login-page');
		}
	}

	public function admin_logout(){
		unset($_SESSION['admin']);
		$this->session->set_flashdata('success', 'Log out successfully ');
		redirect(base_url());
	}

	public function index()
	{	
		$sdata['home'] = "active";
		$this->session->set_userdata($sdata);
		$this->load->model('Model_main');
		$data['job_list'] = $this->Model_main->show_job_list();
		$data['view_path'] = 'dashboard';
		$this->load->view('template',$data);
	}
	public function c_job_apply()
	{
		$data['view_path'] = 'apply';
		$this->load->view('template',$data);
	}

	public function c_about()
	{
		$sdata['about'] = "active";
		$this->session->set_userdata($sdata);
		$data['view_path'] = 'about';
		$this->load->view('template',$data);
	}
	public function c_location()
	{	
		$sdata['contact'] = "active";
		$this->session->set_userdata($sdata);
		$data['view_path'] = 'address';
		$this->load->view('template',$data);
	}
	public function c_contact()
	{
		$sdata['contact'] = "active";
		$this->session->set_userdata($sdata);
		$data['view_path'] = 'contact';
		$this->load->view('template',$data);
	}
	public function apply_submit()
	{
		$this->load->model('Model_main');

		$config['allowed_types'] = 'gif|jpg|png';
		$config['upload_path'] = './uploads/';
		$this->load->library('upload', $config);

		if($this->upload->do_upload('image')){
			$img=$this->upload->data();
			$image=$img['raw_name'].$img['file_ext'];
			// $this->Model_main->insert_image();
			$this->Model_main->insert_apply_data($image);
		}
		redirect('payment-view');
		
	}

	public function view_candidate($id){

		if(isset($_SESSION['admin'])){
			$this->load->model('Model_main');
			$data['candidate'] = $this->Model_main->show_candidate($id);
			$data['view_path'] = 'candidate';
			$this->load->view('template',$data);
		}else{
			redirect(base_url());
		}
		
	}

	public function candidates_list(){

		if(isset($_SESSION['admin'])){
			$sdata['candidates'] = "active";
			$this->session->set_userdata($sdata);
			$this->load->model('Model_main');
			$data['candidates'] = $this->Model_main->show_candidate_list();
			$data['view_path'] = 'candidate_list';
			$this->load->view('template',$data);
		}else{
			redirect(base_url());
		}
		
	}


	public function get_services(){
		$sdata['service'] = "active";
		$this->session->set_userdata($sdata);
		$this->load->model('Model_main');
		$data['service_list'] = $this->Model_main->show_service_list();
		$data['view_path'] = 'service';
		$this->load->view('template',$data);
	}

	public function add_new_job(){
		if(isset($_SESSION['admin'])){
			$this->load->model('Model_main');
			$this->Model_main->insert_new_job();
			$this->session->set_flashdata('success', 'New Job Post Added Successfully');
			redirect(base_url());
		}else{
			redirect(base_url());
		}
	}


	public function add_new_service(){
		$this->load->model('Model_main');
		$this->Model_main->insert_new_service();
		$this->session->set_flashdata('success', 'New Service Added Successfully');
		redirect('services');
	}


	public function service_request(){
		$this->load->model('Model_main');
		$this->Model_main->insert_service_request();
		$this->session->set_flashdata('success', 'Your request submitted, We will back to you as soon as ');
		redirect('services');
	}


	public function client_service_request(){
		$this->load->model('Model_main');
		$data['service_request'] = $this->Model_main->show_service_request();
		$data['view_path'] = 'request';
		$this->load->view('template',$data);
	}

	public function delete_job_post($id){
		$this->load->model('Model_main');
		$this->Model_main->delete_job_post($id);
		$this->session->set_flashdata('success', 'The post has been deleted');
		redirect(base_url());
	}
	
		public function delete_service($id){
		$this->load->model('Model_main');
		$this->Model_main->delete_service($id);
		$this->session->set_flashdata('success', 'The service has been deleted');
		redirect('services');
	}
	
	public function send_mail(){
	    $this->load->view('send-mail');
	    $this->session->set_flashdata('success', 'Message Sent Successfully');
	   // redirect('send-mail');
	   redirect('contact');
	}
	
}