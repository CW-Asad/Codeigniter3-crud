<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Read_Model extends CI_Model
{
	public function getdata()
	{
		$query = $this->db->select('FirstName,LastName,File,id')
			->get('tblusers');
		return $query->result();
	}

	public function getuserdetail($uid)
	{
		$ret = $this->db->select('FirstName,LastName,File,id')
			->where('id', $uid)
			->get('tblusers');
		return $ret->row();
	}


}