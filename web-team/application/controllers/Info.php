<?php
class Info extends CI_Controller 
{
	
	function faq()
	{
	
		$this->load->view('candidate/includes/header');
		$this->load->view('candidate/includes/nav');
		$this->load->view('candidate/faq');
		$this->load->view('candidate/includes/footer');
	}
    
    
	function contact()
	{
        $this->load->view('candidate/includes/header');
		$this->load->view('candidate/includes/nav');
		$this->load->view('candidate/contact');
		$this->load->view('candidate/includes/footer');
	}
	function pricing()
	{
        $this->load->view('candidate/includes/header');
		$this->load->view('candidate/includes/nav');
		$this->load->view('candidate/pricing');
		$this->load->view('candidate/includes/footer');
	}
			
}
?>