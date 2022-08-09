<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require "Base_Controller.php";
// use Base_Controller;
class Injuries_Controller extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function injuries()
	{
		$this->render_view('pages/injuries/injuries.php');
	}
	public function negligence()
	{
		$this->render_view('pages/injuries/negligence.php');
	}
	public function slips_falls()
	{
		$this->render_view('pages/injuries/slips-falls.php');
	}
	public function pressure_ulcers()
	{
		$this->render_view('pages/injuries/pressure-ulcers.php');
	}
	public function elopement()
	{
		$this->render_view('pages/injuries/elopement.php');
	}
	public function sexual_assault()
	{
		$this->render_view('pages/injuries/sexual_assault.php');
	}
	public function fractures()
	{
		$this->render_view('pages/injuries/fractures.php');
	}
	public function medication_errors()
	{
		$this->render_view('pages/injuries/medication_errors.php');
	}
	public function weight_loss_malnutrition()
	{
		$this->render_view('pages/injuries/weight_loss_malnutrition.php');
	}
	public function premature_death()
	{
		$this->render_view('pages/injuries/premature_death.php');
	}
	public function neglect()
	{
		$this->render_view('pages/injuries/neglect.php');
	}
	public function bed_rail_entrapment()
	{
		$this->render_view('pages/injuries/bed_rail_entrapment.php');
	}
	public function choking()
	{
		$this->render_view('pages/injuries/choking.php');
	}
	public function covid_19()
	{
		$this->render_view('pages/injuries/covid_19.php');
	}
	public function other()
	{
		$this->render_view('pages/injuries/other.php');
	}
	
}
