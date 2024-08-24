<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_payment extends CI_Model {
    public function save_payment_details(){
        $phone = $this->input->post('phone',true);
        $transection_id = $this->input->post('transection_id',true);
        if((strlen($phone) == 11) && $transection_id){
            $data['payment_method'] = $this->input->post('payment_method',true);
            $data['phone'] = $this->input->post('phone',true);
            $data['transection_id'] = $this->input->post('transection_id',true);
            $this->db->insert('tbl_payment', $data);
            $this->session->set_flashdata('payment-success', 'Payment Info submitted');
            redirect('payment-view');
        }else{
             $this->session->set_flashdata('error', 'Please fill with correct Value ');
             redirect('payment-view');
        }

    }

    public function user_payment_details(){
        $query = $this->db->get('tbl_payment');
        return $query;
    }
}