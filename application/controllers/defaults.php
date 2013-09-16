<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class defaults extends CI_Controller {
 public function __construct()
 {
 	parent::__construct();
 	//Do your magic here
 		$this->load->view('header');

 }
	public function index()
	{
	$this->load->view('home');
		$this->load->view('footer');
	}
	public function contact()
	{
		$this->load->view('contact');
		$this->load->view('footer');
	}

}

/* End of file Index.php */
/* Location: ./application/controllers/Index.php */
?>