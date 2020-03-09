<?php
class Signup extends CI_Controller 
{
	function __Construct()
	{
		parent:: __construct();
		$this->load->model('user_model');
	}
	
	function index()
	{
		if($this->session->userdata('user'))	redirect(base_url());
		
		$data['page'] = 'signup';
			
		$this->load->view('candidate/includes/header-c-login');
		$this->load->view('candidate/signup');
		$this->load->view('candidate/includes/footer-c-login');
	}
	/*New user registration*/
	function register()
	{
		$fname = $this->security->xss_clean($this->input->post('r_fname'));
		$lname = $this->security->xss_clean($this->input->post('r_lname'));
		$email = $this->security->xss_clean($this->input->post('r_email'));
		$password = sha1($this->security->xss_clean($this->input->post('r_pass')));
        $data = array(
        'firstname'=>$fname,
        'lastname'=>$lname,
        'email'=>$email,
        'password'=>$password,
        'date_created'=>date('Y-m-d H:i:s')
    );
		$res= $this->user_model->register($data);
		if($res)
		{
            $this->session->set_userdata('login_status','register_success');
            $this->session->set_userdata('login_status','register_success');
			redirect(base_url('index.php/login'));
		}
	}	
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