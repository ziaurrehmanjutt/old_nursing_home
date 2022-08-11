<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require "Base_Controller.php";
// use Base_Controller;
class Home_Controller extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_Model');
	}
	public function index()
	{
		$data['isSearch'] = false;
		if(isset($_GET['search'])){
			$zip = isset($_GET['zip']) && $_GET['zip'] ? $_GET['zip'] : '';
			$text = isset($_GET['text']) && $_GET['text'] ? $_GET['text'] : '';
			if($zip || $text){
				$data['isSearch'] = true;
				$data['data'] = $this->Home_Model->search_data($text,$zip);
			}
		}
		$this->render_view('pages/home/home.php',$data,'pages/home/home_js');
	}
	public function about_us()
	{
		$this->render_view('pages/about/about.php');
	}
	public function contact_us()
	{
		$this->render_view('pages/about/contact.php');
	}
	public function terms()
	{
		$this->render_view('pages/about/terms.php');
	}
}
