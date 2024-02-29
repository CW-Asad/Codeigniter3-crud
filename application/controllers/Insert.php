<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Controller {
// For data insertion	
public function index(){
$this->form_validation->set_rules('firstname','First Name','required|alpha');	
$this->form_validation->set_rules('lastname','Last Name','required|alpha');	
$this->form_validation->set_rules('file','File','required|alpha');	

if($this->form_validation->run()){
$fname=$this->input->post('firstname');
$lname=$this->input->post('lastname');
$file=$this->input->post('file');

$this->load->model('Insert_Model');
$this->Insert_Model->insertdata($fname,$lname,$file);
$this->load->view('insert');
} else {
$this->load->view('insert');
}
}

// For data updation
public function updatedetails(){
$this->form_validation->set_rules('firstname','First Name','required|alpha');	
$this->form_validation->set_rules('lastname','Last Name','required|alpha');	
$this->form_validation->set_rules('file','File','required|alpha');	

if($this->form_validation->run()){
$fname=$this->input->post('firstname');
$lname=$this->input->post('lastname');
$usid=$this->input->post('userid');
$file=$this->input->post('file');
$this->load->model('Insert_Model');
$this->Insert_Model->updatedetails($fname,$lname,$usid,$file);
} else {
$this->session->set_flashdata('error', 'Somthing went worng.  !!');
		redirect('read');
}
}

}