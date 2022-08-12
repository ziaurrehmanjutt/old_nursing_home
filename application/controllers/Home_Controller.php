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
	public function details()
	{
		if(isset($_POST['submit_row'])){
			// echo "<pre>";
			// print_r($_POST);
			// die;
			$allPoints  = [];
			if(isset($_POST['Pressure_Ulcers'])){
				$z = array(
					"name" => "Pressure Ulcers",
					"low" => 12500,
					"high" => 10000000,
				);
				$allPoints[] = $z;
			}

			if(isset($_POST['Sexual_Assault'])){
				$z = array(
					"name" => "Sexual Assault",
					"low" => 50000,
					"high" => 600000,
				);
				$allPoints[] = $z;
			}

			if(isset($_POST['Medication_Errors'])){
				$z = array(
					"name" => "Medication Errors",
					"low" => 25000,
					"high" => 500000,
				);
				$allPoints[] = $z;
			}

			if(isset($_POST['Premature_Death'])){
				$z = array(
					"name" => "Premature Death",
					"low" => 25000,
					"high" => 500000,
				);
				$allPoints[] = $z;
			}

			$id = $_POST['current_id'];
			$data['data'] = $this->Home_Model->get_detail($id);
			$data['points'] = $allPoints;
			$this->render_view('pages/home/detail_view.php',$data);
		}else{
			redirect('/');
		}
	}
	public function about_us() 
	{
		$this->render_view('pages/about/about.php');
	}


	//
	public function contact_us()
	{
		$this->render_view('pages/about/contact.php');
	}
	public function terms()
	{
		$this->render_view('pages/about/terms.php');
	}

	public function ajax_detail($id)
	{
		$data['data'] = $this->Home_Model->get_detail($id);
		echo $this->load->view('pages/home/show_model.php',$data,TRUE);
		// $this->render_view('pages/about/terms.php');
	} 
}
