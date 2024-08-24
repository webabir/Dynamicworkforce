<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_main extends CI_Model {

    public function admin_login_check($phone,$password){
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('phone', $phone);
        $this->db->where('password', $password);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }


	public function insert_apply_data($image)
	{
        $data = array();
        $data['full_name'] = $this->input->post('full_name', true);
        $data['father_name'] = $this->input->post('father_name', true);
        $data['mother_name'] = $this->input->post('mother_name', true);
        $data['birth_date'] = $this->input->post('birth_date', true);
        $data['national_id'] = $this->input->post('national_id', true);
        $data['present_address'] = $this->input->post('present_address', true);
        $data['parmanent_address'] = $this->input->post('parmanent_address', true);
        $data['nationality'] = $this->input->post('nationality', true);
        $data['religion'] = $this->input->post('religion', true);
        $data['job_category'] = $this->input->post('job_category', true);
        $data['city'] = $this->input->post('city', true);
        $data['email'] = $this->input->post('email', true);
        $data['phone'] = $this->input->post('phone', true);
        $data['gender'] = $this->input->post('gender', true);
        $data['education'] = $this->input->post('education', true);
        $data['height'] = $this->input->post('height', true);
        $data['weight'] = $this->input->post('weight', true);
        $data['ref_no'] = $this->input->post('ref_no', true);
        $data['image'] = $image;
        $this->db->insert('tbl_dcwf', $data);

	}

    public function show_candidate($id){
        $this->db->where('id',$id);
        $query = $this->db->get('tbl_dcwf');
        $candidate =  $query->row();
		return $candidate;
    }

    public function show_candidate_list(){
        $query = $this->db->get('tbl_dcwf');
        return $query;
    }


    public function insert_new_job(){
        $data['post_name'] = $this->input->post('post_name',true);
        $data['type_of_work'] = $this->input->post('type_of_work',true);
        $data['education'] = $this->input->post('education',true);
        $data['work_place'] = $this->input->post('work_place',true);
        $data['salary'] = $this->input->post('salary',true);
        $this->db->insert('tbl_post_job',$data);
    }

    public function show_job_list(){
        $query = $this->db->get('tbl_post_job');
        return $query;
    }

    public function insert_new_service(){
        $data['service_name'] = $this->input->post('service_name',true);
        $data['type_of_work'] = $this->input->post('type_of_work',true);
        $data['education'] = $this->input->post('education',true);
        $data['service_fee'] = $this->input->post('service_fee',true);
        $this->db->insert('tbl_post_service',$data);
    }

    public function show_service_list(){
        $query = $this->db->get('tbl_post_service');
        return $query;
    }

    public function  insert_service_request(){
        $data['post_name'] = $this->input->post('post_name',true);
        $data['phone'] = $this->input->post('phone',true);
        $data['address'] = $this->input->post('address',true);
        $data['work_place'] = $this->input->post('work_place',true);
        $this->db->insert('tbl_request_service',$data);
    }


    public function show_service_request(){
        $query = $this->db->get('tbl_request_service');
        return $query;
    }

    public function delete_job_post($id){
       $this->db->where('id', $id);
       $this->db->delete('tbl_post_job');

    }
    public function delete_service($id){
       $this->db->where('id', $id);
       $this->db->delete('tbl_post_service');

    }
   
}