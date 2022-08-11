<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Import extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Import_Model');
	}
	public function index()
	{
		if (isset($_POST['upload'])) {
			//Logic to read csv
			$f_name = 'csv';
			$f_name_2 = $_FILES[$f_name]['name'];
			$f_size  =  $_FILES[$f_name]['size'];
			$f_tmp   =  $_FILES[$f_name]['tmp_name'];

			$uploadPath = 'assets/csv/' . $f_name_2;
			move_uploaded_file($f_tmp, $uploadPath);

			ini_set('auto_detect_line_endings', TRUE);
			$handle = fopen($uploadPath, 'r');
			echo "<pre>";
			$i = 0;
			$allData = [];
			while (($data = fgetcsv($handle)) !== FALSE) {
				if ($data[5] < 30000 || $data[5] > 40000) {
					continue;
				}
				$insert = array(
					'federal_provider_number' => $data[0],
					'provider_name' => $data[1],
					'provider_address' => $data[2],
					'provider_city' => $data[3],
					'provider_zip' => $data[5],
					'provider_country' => $data[8],
					'overall_ratting' => $data[24],
					'health_inspection' => $data[26],
					'qm_ratting' => $data[28],
					'staffing_ratting' => $data[34],
				);
				$allData[] = $insert;
			}
			ini_set('auto_detect_line_endings', FALSE);

			print_r($allData);
			$this->Import_Model->insert($allData);
			die;

			//all_provider_data

		}
		$this->load->view('import/1.php');
	}
}
