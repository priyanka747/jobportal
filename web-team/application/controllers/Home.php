<?php
class Home extends CI_Controller 
{
	public function __Construct()
	{	error_reporting(-1);
		parent:: __construct();
	}
	
	function index()
	{
		if($this->session->userdata('user')){
			$user=json_decode(json_encode($this->session->userdata('user')),true);
			if($user[0]['user_type']=='candidate'){
				$this->load->view('candidate/includes/header');
				$this->load->view('candidate/includes/nav');
				$this->load->view('candidate/index');
				$this->load->view('candidate/includes/footer');
			}else{
					$data['page'] = 'Dashboard';
					$this->load->view('includes/header');
					$this->load->view('includes/nav',$data);
					$this->load->view('index');
					$this->load->view('includes/footer');
			}
		}else{
			$this->load->view('candidate/includes/header');
			$this->load->view('candidate/includes/nav');
			$this->load->view('candidate/index');
			$this->load->view('candidate/includes/footer');
		}
		
	}
}
?>