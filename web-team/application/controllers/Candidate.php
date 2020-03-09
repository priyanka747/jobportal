<?php
class Candidate extends CI_Controller 
{
	function __Construct()
	{
		parent:: __construct();
		$this->load->model('user_model');
		// load form and url helpers
        $this->load->helper(array('form', 'url'));
         
        // load form_validation library
        $this->load->library('form_validation');
	}

	function index()
	{
		$data['page'] = 'VCS';
		$data['candidates']=json_decode(json_encode($this->user_model->get_users()), true); 
		$this->load->view('includes/header-view');
		$this->load->view('includes/nav',$data);
		$this->load->view('view-candidates',$data);
		$this->load->view('includes/footer-view');
	}
	
	/*Search & filter*/
	function filter_result()
	{
		if(isset($_POST['ajax']))
		{
			parse_str($_POST['str'],$str);
			if(isset($str['city']))	$data['city'] = $str['city'];
			$data['salary_min'] = $str['salary_min'];
			$data['salary_max'] = $str['salary_max'];
			$res = $this->job_model->filter_result($data);
			echo json_encode($res);
		}
		else
			redirect(base_url());
	}
	
	/*View single job- full screen*/
	function view()
	{
		if($this->uri->segment(3))
		{			
			$job_id = $this->uri->segment(3);	
			$data = $this->job_model->get_job($job_id);
			$data = (array) $data;
			$data['tab'] = 'SINGLE JOB';
			$this->load->view('header',$data);
			$this->load->view('single_job',$data);
		}
		else
			redirect('jobs');
	}
	function addJobOffer(){
		$data['page']="JO";
		$this->load->view('includes/header');
		$this->load->view('includes/nav',$data);
		$this->load->view('add-joboffer');
		$this->load->view('includes/footer');
	}
	/*Open job form in edit mode*/
	function edit()
	{
		$data['page'] = 'EDIT';
		if($this->session->userdata('user') && $this->uri->segment(3))
		{
			$data['edit'] = $this->job_model->get_job($this->uri->segment(3));
			
			$data['page']="JO";
		$this->load->view('includes/header');
		$this->load->view('includes/nav',$data);
		$this->load->view('add-joboffer',$data);
		$this->load->view('includes/footer');			
		}
		else
			redirect(base_url());
	}
	
	/*Delete job*/
	function delete()
	{
		$id = $_POST['id'];
		if($this->job_model->delete($id))
			$r = true;
		else
			$r = false;
		echo json_encode($r);
	}
	
}
?>