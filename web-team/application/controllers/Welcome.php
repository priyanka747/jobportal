<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$data['page']="Dashboard";
		$this->load->view('includes/header');
		$this->load->view('includes/nav',$data);
		$this->load->view('index');
		$this->load->view('includes/footer');
	}
	public function addJobOffer()
	{
		
		$data['page']="JO";
		$this->load->view('includes/header');
		$this->load->view('includes/nav',$data);
		$this->load->view('add-joboffer');
		$this->load->view('includes/footer');
	}
	public function viewCandidates()
	{
		
		$data['page']="VCS";
		$this->load->view('includes/header');
		$this->load->view('includes/nav',$data);
		$this->load->view('view-candidates');
		$this->load->view('includes/footer-view');
	}
	public function viewJobOffers()
	{
		
		$data['page']="JO";
		$this->load->view('includes/header');
		$this->load->view('includes/nav',$data);
		$this->load->view('view-job-offers');
		$this->load->view('includes/footer-view');
	}
	public function viewApplications()
	{
		
		$data['page']="VAS";
		$this->load->view('includes/header');
		$this->load->view('includes/nav',$data);
		$this->load->view('view-applications');
		$this->load->view('includes/footer-view');
	}
	public function edit()
	{
		$data['page']="JO";
		$this->load->view('includes/header');
		$this->load->view('includes/nav',$data);
		$this->load->view('edit-candidate');
		$this->load->view('includes/footer');
	}
}
