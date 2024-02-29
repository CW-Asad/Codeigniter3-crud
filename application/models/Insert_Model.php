<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Insert_Model extends CI_Model {
public function insertdata($fname,$lname, $file){
$data=array(
			'FirstName'=>$fname,
			'LastName'=>$lname,
			'File'=>$file,
		);
$sql_query=$this->db->insert('tblusers',$data);
if($sql_query){
$this->session->set_flashdata('success', 'Registration successful');
		redirect('read');
	}
	else{
		$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
		redirect('read');
	}
	}


public function updatedetails($fname,$lname,$file,$usid){
$data=array(
			'FirstName'=>$fname,
			'LastName'=>$lname,
			'File'=>$file,

		);

$sql_query=$this->db->where('id', $usid)
                ->update('tblusers', $data); 

    if($sql_query){
$this->session->set_flashdata('success', 'Record updated successful');
		redirect('read');
	}
	else{
		$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
		redirect('read');
	}

}








}