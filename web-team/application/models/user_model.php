<?php
class User_model extends CI_Model
{	
	function verify_login($where)
	{
		return $this->db->select('user_id,email,name')->from('users')->where($where)->get()->row();
	}
	function get_users()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by('user_type','candidate');
		return $this->db->get()->result();
	}
	
	function register($data)
	{
		return $this->db->insert('users',$data);
	}
	
	function check_email($email)
	{
		return $this->db->from('users')->where('email',$email)->get()->num_rows();
		
	}
}
?>