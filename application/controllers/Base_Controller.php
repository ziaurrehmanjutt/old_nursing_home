<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}
	public function render_view($page,$data=[],$jsFile = '',$jsData = [], $headerData = [],$footerData  = [])
	{
		$this->load->view('include/header.php');
		$this->load->view($page,$data);
		if($jsFile)
		$this->load->view($jsFile);
		$this->load->view('include/footer.php');
	}
}
