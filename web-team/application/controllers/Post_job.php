<?php
class Post_job extends CI_Controller 
{
	function __Construct()
	{
		parent:: __construct();
		$this->load->model('job_model');
	}
	
	function index()
	{
		if(!$this->session->userdata('user'))
		{
			$this->session->set_userdata('login_status','login_needed');
			$this->session->set_userdata('redirectTo','post_job');
			redirect('index.php/login');
		}
		else
		{
			$data['page'] = 'JO';
			
			$this->load->view('includes/header');
			$this->load->view('includes/nav',$data);
			$this->load->view('add-joboffer');
			$this->load->view('includes/footer');
		}	
	}
	
	/*Post new job & edit existing job*/
	function submit()
	{
		
		if(isset($_POST['form']))
		{	
			$data = array(
			'title' => $this->security->xss_clean($_POST['jtitle']),
			'description' => $this->security->xss_clean($_POST['description']),
			'salary' => $this->security->xss_clean($_POST['salary']),
			'type' => $this->security->xss_clean($_POST['jobtype']),
			'skill_id' => $this->security->xss_clean($_POST['skillreq']),
			'state' => $this->security->xss_clean($_POST['state']),
			'city' => $this->security->xss_clean($_POST['city']),
			'language' =>implode(',',$this->security->xss_clean($_POST['lang'])),
			'status' => 'active',
			'date_created' => date('Y-m-d H:i:s')
			);
			print_r($data);
			// if($_POST['form_type']=='submit')
			// {
				$id = $this->job_model->post_job($data);
				echo $id;
				// if(!$id)
					redirect(base_url('index.php/jobs'));
				// else
				// 	redirect('jobs/view/'.$id);
			}			
			// else if($_POST['form_type']=='edit')
			// {
			// 	unset($data['date_created']);
			// 	$data['date_modified'] = date('Y-m-d H:i:s');
			// 	$job_id = $_POST['job_id'];
			// 	$id = $this->job_model->update_job($data,$job_id);
			// 	if(!$id)
			// 		redirect(base_url());
			// 	else
			// 		redirect('jobs/view/'.$job_id);
			// }
			
		// }
		// else
		// 	redirect(base_url());
		// }
			}
	// 	function add(){
	// 		// basic required field
	// 		$this->form_validation->set_rules('jtitle', 'Text Field One', 'required');
     
	// 		// basic required field with minimum length
	// 		$this->form_validation->set_rules('salary', 'Text Field Two', 'required|min_length[8]');
			 
	// 		// basic required field with maximum length
	// 		$this->form_validation->set_rules('jobtype', 'Text Field Three', 'required|max_length[20]');
			 
	// 		// basic required field with exact length
	// 		$this->form_validation->set_rules('exact_skillreq', 'Text Field Four', 'required|exact_length[12]');
			 
	// 		// basic required field but alphabets only
	// 		$this->form_validation->set_rules('state', 'Text Field Five', 'required|alpha');
			 
	// 		// basic required field but alphanumeric only
	// 		$this->form_validation->set_rules('district', 'Text Field Six', 'required|alpha_numeric');
			 
	// 		// basic email field with email validation
	// 		$this->form_validation->set_rules('lang', 'Email Field', 'required|valid_email');
			 
	// 		// password field with confirmation field matching
	// 		$this->form_validation->set_rules('password_field', 'Password One', 'required');
	// 		$this->form_validation->set_rules('password_confirmation_field', 'Password Confirmation Field', 'required|matches[password_field]');
	// 		    // field with custom error message
	// 			$this->form_validation->set_rules('alphabets_text_field', 'Text Field Five', 'required|alpha',
	// 			array('required'=>'Please enter Text Field Five!','alpha'=>'Only alphabets please!'));
		   
	// 		// basic required field with IPv4 validation
	// 		$this->form_validation->set_rules('valid_ip_field', 'Valid IP Field', 'required|valid_ip[ipv4]');
			 
	// 		if ($this->form_validation->run() == FALSE)
	// 		{
	// 			$this->load->view('validate_form');
	// 		}
	// 		else
	// 		{
	// 		
	// 			
	// 		}
	// }
	
}
?>