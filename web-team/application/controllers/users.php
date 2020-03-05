<?php
class Jobs extends CI_Controller 
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
		$data['jobs']= $this->user_model->get_users();
		$this->load->view('includes/header');
		$this->load->view('includes/nav',$data);
		$this->load->view('index',$data);
		$this->load->view('includes/footer');
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
	
	/*Open job form in edit mode*/
	function edit()
	{
		$data['tab'] = 'EDIT';
		if($this->session->userdata('user') && $this->uri->segment(3) && $this->job_model->validate_author($this->uri->segment(3)))
		{
			$data['edit'] = $this->job_model->get_job($this->uri->segment(3));
			$data['location'] = array('Mumbai','Chennai','Bangalore','Kolkata','Hyderabad','Pune','Ahmedabad','New Delhi','Chandigarh','Jaipur','Surat','Gurgaon','Noida');
			sort($data['location']);
			$this->load->view('header',$data);
			$this->load->view('post_job',$data);			
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
	function add(){
			// basic required field
			$this->form_validation->set_rules('jtitle', 'Text Field One', 'required');
     
			// basic required field with minimum length
			$this->form_validation->set_rules('salary', 'Text Field Two', 'required|min_length[8]');
			 
			// basic required field with maximum length
			$this->form_validation->set_rules('jobtype', 'Text Field Three', 'required|max_length[20]');
			 
			// basic required field with exact length
			$this->form_validation->set_rules('exact_skillreq', 'Text Field Four', 'required|exact_length[12]');
			 
			// basic required field but alphabets only
			$this->form_validation->set_rules('state', 'Text Field Five', 'required|alpha');
			 
			// basic required field but alphanumeric only
			$this->form_validation->set_rules('district', 'Text Field Six', 'required|alpha_numeric');
			 
			// basic email field with email validation
			$this->form_validation->set_rules('lang', 'Email Field', 'required|valid_email');
			 
			// password field with confirmation field matching
			$this->form_validation->set_rules('password_field', 'Password One', 'required');
			$this->form_validation->set_rules('password_confirmation_field', 'Password Confirmation Field', 'required|matches[password_field]');
			    // field with custom error message
				$this->form_validation->set_rules('alphabets_text_field', 'Text Field Five', 'required|alpha',
				array('required'=>'Please enter Text Field Five!','alpha'=>'Only alphabets please!'));
		   
			// basic required field with IPv4 validation
			$this->form_validation->set_rules('valid_ip_field', 'Valid IP Field', 'required|valid_ip[ipv4]');
			 
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('validate_form');
			}
			else
			{
				// load success template...
				echo "It's all Good!";
			}
	}
}
?>