<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require "Base_Controller.php";
// use Base_Controller;
class Home_Controller extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->render_view('pages/home/home.php');
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
