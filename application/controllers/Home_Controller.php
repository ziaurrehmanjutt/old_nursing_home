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
		$data['textSearch'] = '';
		$data['zipSearch'] = '';
		$data['page'] = 1;
		if(isset($_GET['search'])){
			$zip = isset($_GET['zip']) && $_GET['zip'] ? $_GET['zip'] : '';
			$text = isset($_GET['text']) && $_GET['text'] ? $_GET['text'] : '';
			$page = isset($_GET['page']) && $_GET['page'] ? $_GET['page'] : 1;

			$data['textSearch'] = $text;
			$data['zipSearch'] = $zip;

			$data['page'] = $page;
			if($zip || $text){
				$data['isSearch'] = true;
				$data['data'] = $this->Home_Model->search_data($text,$zip,$page);
				$data['count'] = $this->Home_Model->get_total_count($text,$zip);
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
			if(isset($_POST['Negligence'])){
				$z = array(
					"name" => "Negligence",
					"low" => 125000 ,
					"high" => 10000000 ,
				);
				$allPoints[] = $z;
			}
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
					"low" => 65000,
					"high" => 1250000,
				);
				$allPoints[] = $z;
			}

			if(isset($_POST['Bed_Rail_Entrapment'])){
				$z = array(
					"name" => "Bed Rail Entrapment",
					"low" => 12500,
					"high" => 45000,
				);
				$allPoints[] = $z;
			}

			if(isset($_POST['Covid_19'])){
				$z = array(
					"name" => "Covid-19",
					"low" => 0,
					"high" => 0,
				);
				$allPoints[] = $z;
			}
			if(isset($_POST['Slips_Falls'])){
				$z = array(
					"name" => "Slips & Falls",
					"low" => 150000,
					"high" => 10000000,
				);
				$allPoints[] = $z;
			}
			if(isset($_POST['Elopements'])){
				$z = array(
					"name" => "Elopements",
					"low" => 125000,
					"high" => 550000,
				);
				$allPoints[] = $z;
			}
			if(isset($_POST['Fractures'])){
				$z = array(
					"name" => "Fractures",
					"low" =>  95000,
					"high" => 950000,
				);
				$allPoints[] = $z;
			}
			if(isset($_POST['Weight_Malnutrition'])){
				$z = array(
					"name" => "Weight Loss or Malnutrition",
					"low" =>  35000,
					"high" => 250000,
				);
				$allPoints[] = $z;
			}
			if(isset($_POST['Neglect'])){
				$z = array(
					"name" => "Neglect",
					"low" =>  150000,
					"high" => 1000000,
				);
				$allPoints[] = $z;
			}
			if(isset($_POST['Choking'])){
				$z = array(
					"name" => "Neglect",
					"low" =>  50000,
					"high" => 40000,
				);
				$allPoints[] = $z;
			}

			if(isset($_POST['Other'])){
				$z = array(
					"name" => "Other",
					"low" =>  0,
					"high" => 0,
				);
				$allPoints[] = $z;
			}

			$id = $_POST['current_id'];

			$data['data'] = $this->Home_Model->get_detail($id);
			//mail($allPoints,$data['data']); admin@nursinghomesuit.com 
			$this->sendEmail($allPoints,$data['data']);
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
		$data['emailSend']  = false;
	    //mail_send
	    if(isset($_POST['mail_send'])){
			$data['emailSend']  = true;
	        $detail  = new stdClass;
	        $detail->provider_name = "From Contatc Us Page";
	         $detail->provider_address = "";
	        $this->sendEmail([],$detail);
	    }
		$this->render_view('pages/about/contact.php',$data);
	}
	public function terms()
	{
		$this->render_view('pages/about/terms.php');
	}

	public function ajax_detail($id)
	{
		$data['data'] = $this->Home_Model->get_detail($id);
		$data['vaccination'] = $this->Home_Model->get_vaccination($id);
		echo $this->load->view('pages/home/show_model.php',$data,TRUE);
		// $this->render_view('pages/about/terms.php');
	} 

	public function ajax_search() 
	{
			$zip = isset($_GET['zip']) && $_GET['zip'] ? $_GET['zip'] : '';
			$text = isset($_GET['text']) && $_GET['text'] ? $_GET['text'] : '';
			$page = isset($_GET['page']) && $_GET['page'] ? $_GET['page'] : 1;

			$data['textSearch'] = $text;
			$data['zipSearch'] = $zip;
			$data['page'] = $page;

			$data['isSearch'] = true;
			$data['data'] = $this->Home_Model->search_data($text,$zip,$page);
			$data['count'] = $this->Home_Model->get_total_count($text,$zip);
			echo $this->load->view('pages/home/ajax_search_result.php',$data,TRUE);

	}

	public function sendEmail($injuries,$detail){

		// echo "<pre>";
		// print_r($data);
		// die;
		$data['data'] = $_POST;
		$data['detail'] = $detail;
		$data['injuries'] = $injuries;
		$message =  $this->load->view('pages/template/email.php',$data,true);

		$config['charset'] = 'utf-8';
		$config['mailtype'] = 'html';
		$this->load->library('email', $config);

		// echo $message;
		// die;
		$senMail = "irfanrashidkhan@gmail.com";
        $this->email->set_mailtype("html");
		$this->email->from('admin@nursinghomesuit.com', 'Nursing Home Data');
		$this->email->to('admin@nursinghomesuit.com');
		$this->email->reply_to($_POST['contact_email']);
		$this->email->cc($senMail);


		$this->email->subject('Order Detail Subject');
		$this->email->message($message);
		if ($this->email->send()) {
		$this->session->set_flashdata('email_sent', 'SUCCESS');
		} else {
		$this->session->set_flashdata('email_sent', 'ERROR');
		}
	} 
} 
