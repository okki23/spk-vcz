<?php
date_default_timezone_set("Asia/Jakarta");

defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
class Dashboard extends CI_Controller {
  
	public function __construct(){

		parent::__construct();

	}
	
	public function index(){

		$data['konten'] = 'dashboard/dashboard_view';
		$this->load->view('template_view',$data);

	}
	 
}
