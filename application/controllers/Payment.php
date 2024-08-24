<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
	public  function payment_method(){
        $data['view_path'] = 'payment';
		$this->load->view('template',$data);
    }
    
	public  function peyment_list(){
     $sdata['payments'] = "active";
		$this->session->set_userdata($sdata);
    $this->load->model('Model_payment');
    $data['paymentDetails']=$this->Model_payment->user_payment_details();
    $data['view_path'] = 'applicant-payment';
		$this->load->view('template',$data);
    }
    
    public function submit_payment(){
      $this->load->model('Model_payment');
      $this->Model_payment->save_payment_details();
    }
}