<?php
class Login extends CI_Controller 
{
	function __Construct()
	{
		parent:: __construct();
		$this->load->model('user_model');
	}
	
	function index()
	{
		if($this->session->userdata('user'))	redirect(base_url());
		
		$data['page'] = 'login';
		$this->load->view('candidate/includes/header-c-login');
		$this->load->view('candidate/login');
		$this->load->view('candidate/includes/footer-c-login');
	}
	function candidate_login()
	{
		if($this->session->userdata('user'))	redirect(base_url());
		
		$data['page'] = 'login';
				
	
	}
	
	function verify_login()
	{	
		$email = $this->security->xss_clean($this->input->post('email'));
		$password = sha1($this->security->xss_clean($this->input->post('password')));
		
		$res= $this->user_model->verify_login($email,$password);
		// print_r($res);
		if($res)
		{
			$this->session->set_userdata('user',$res);
			if($this->session->userdata('redirectTo'))
			{	
				$re = $this->session->userdata('redirectTo');
				$this->session->unset_userdata('redirectTo');
				// redirect($re);				
			}
			// else
				// redirect('/');
		}
		else
		{
			$this->session->set_userdata('login_status','failed');
			// redirect('index.php/login');
		}	 
	}
	function verify_candidate(){
		$email = $this->security->xss_clean($this->input->post('email'));
		$password = sha1($this->security->xss_clean($this->input->post('password')));
		
		$res= $this->user_model->verify_login($email,$password);
		// print_r($res[0]['user_type']);
		if($res)
		{
			
			$this->session->set_userdata('user',$res);
			if($res[0]['user_type'] == 'candidate'){
				redirect('index.php/candidate/');
			}
			else
			{
				redirect('index.php/login');
			}
			// if($this->session->userdata('redirectTo'))
			// {	
			// 	$re = $this->session->userdata('redirectTo');
			// 	$this->session->unset_userdata('redirectTo');
			// 	// redirect($re);				
			// }
			// else
				// redirect('/');
		}
		else
		{
			$this->session->set_userdata('login_status','failed');
			// redirect('index.php/login');
		}	 
	}
	// /*New user registration*/
	// function register()
	// {
	// 	$name = $this->security->xss_clean($this->input->post('r_name'));
	// 	$email = $this->security->xss_clean($this->input->post('r_email'));
	// 	$password = sha1(sha1($this->security->xss_clean($this->input->post('r_pass'))));
	// 	$data = array('name'=>$name,'email'=>$email,'password'=>$password,'date_created'=>date('Y-m-d H:i:s'));
	// 	$res= $this->user_model->register($data);
	// 	if($res)
	// 	{
	// 		$this->session->set_userdata('login_status','register_success');
	// 		redirect('login');
	// 	}
	// }	
	/*Avoid email duplication while registration*/
	function check_email()
	{
		if($this->user_model->check_email($_POST['email'])>0)
			echo json_encode(false);
		else
			echo json_encode(true);
	}
	
	function logout()
	{
		$this->session->unset_userdata('user');
		redirect(base_url());
	}	
}
?>