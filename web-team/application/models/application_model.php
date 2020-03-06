<?php
class Application_model extends CI_Model
{	
	
	function get_applications()
	{
		$this->db->select('*');
		$this->db->from('applications');
		$this->db->order_by('date_created','desc');
		return $this->db->get()->result();
	}
	
	function apply($data)
	{
		return $this->db->insert('users',$data);
	}
	
	function email()
	{
		
		
	}
	function get_application($id)
	{
		$this->db->select('*');
		$this->db->from('applications');
		$this->db->where('application_id',$id);
		$this->db->order_by('date_created','desc');
		return $this->db->get()->result();
	}
	function update_application($data,$application_id)
	{
		$this->db->where('applications_id',$application_id);
		return $this->db->update('applications',$data);
	}
	function delete($id)
	{
		
		$this->db->set('status', 'delete');
$this->db->where('applications_id', $id);
		return $this->db->update('applications');
    }
    function filter_result($data)
	{   
		$this->db->select('*');
        $this->db->from('applications');
        $this->db->where($data);
		$this->db->order_by('date_created','desc');
		return $this->db->get()->result();
	}
	
}
?>