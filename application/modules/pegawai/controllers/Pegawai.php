<?php
date_default_timezone_set("Asia/Jakarta");

defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
class Pegawai extends CI_Controller {
  
	public function __construct(){

		parent::__construct();

	}
	
	public function index(){
		// $date = '27-Jun-80';
		// $conv = date('Y-m-d',strtotime($date));
		// echo $conv;
		// die();
		// $te = "jkas dsafd";
		// echo ucwords($te);
		// die();
		$this->load->view('pegawai/pegawai_view.php');

	}
	
	public function export(){

		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', 'Hello World !');
		$writer = new Xlsx($spreadsheet);
		$filename = 'name-of-the-generated-file';
		
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"');
		header('Cache-Control: max-age=0');
		$writer->save('php://output'); // download file

	}
	
	

	public function import(){

		$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		
		if(isset($_FILES['upload_file']['name']) && in_array($_FILES['upload_file']['type'], $file_mimes)) {
		$arr_file = explode('.', $_FILES['upload_file']['name']);
		
		$extension = end($arr_file);
			if('csv' == $extension){
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
			} else {
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			}
		$spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
		$sheetData = $spreadsheet->getActiveSheet()->toArray();
		$agama = '';
		$pendidikan = '';
		$jabatan = '';
		$jenkel = ''; 
		$marital = '';
		$status_kerja = ''; 
			for($i = 1;$i < count($sheetData);$i++)
			{
				if($sheetData[$i][5] == "PRIA"){
					$jenkel = "P";
				}else{
					$jenkel = "W";
				}

				$cekagama = $this->db->where('agama',ucwords(strtolower($sheetData[$i]['6'])))->get('agama');
				if($cekagama->num_rows() < 1){
					$agama = '';
				}else{
					$getagama = $cekagama->row();
					$agama = $getagama->id;
				}

				$cekpendidikan = $this->db->where('pendidikan',$sheetData[$i]['13'])->get('pendidikan');
				if($cekpendidikan->num_rows() < 1){
					$pendidikan = '';
				}else{
					$getpdd = $cekpendidikan->row();
					$pendidikan = $getpdd->id;
				}

				$cekjabatan =  $this->db->where('jabatan',ucwords(strtolower($sheetData[$i]['14'])))->get('jabatan');
				if($cekjabatan->num_rows() < 1){
					$jabatan = '';
				}else{
					$getjbt = $cekjabatan->row();
					$jabatan = $getjbt->id;
				}

				$cekmaritalstatus =  $this->db->where('status',ucwords(strtolower($sheetData[$i]['23'])))->get('pegawai_marital_status');
				if($cekmaritalstatus->num_rows() < 1){
					$marital = '';
				}else{
					$getmarital = $cekmaritalstatus->row();
					$marital = $getmarital->id;
				}
				 
				$cekstatuskerja = $this->db->where('status_kerja',ucwords(strtolower($sheetData[$i]['7'])))->get('pegawai_status_kerja');
				if($cekstatuskerja->num_rows() < 1){
					$status_kerja = '';
				}else{
					$getstatuskerja = $cekstatuskerja->row();
					$status_kerja = $getstatuskerja->id;
				}
				
				$replaced = [" ",".","-","'"];
				
				// echo $sheetData[$i]['0']. ' - '. ucwords(strtolower($sheetData[$i]['1'])).' - '.$sheetData[$i]['2'].' - '
				// .$sheetData[$i]['3'].' - '.$sheetData[$i][4].' - '.$jenkel.' - '.$cekagama->id.' - '.$cekstatuskerja->id.' - '
				// .$sheetData[$i][8].' - '.$sheetData[$i][9].' - '.$sheetData[$i][10].' - '
				// .str_replace($replaced,"",$sheetData[$i][11]).' - '.str_replace($replaced,"",$sheetData[$i][12]).' - '
				// .$pendidikan.' - '.$jabatan.' - '.$sheetData[$i][15].' - '.$sheetData[$i][16].' - '.$sheetData[$i][17].' - '
				// .$sheetData[$i][18].' - '.$sheetData[$i][19].' - '.$sheetData[$i][20].' - '.$sheetData[$i][21].' - '
				// .$sheetData[$i][22].' - '.$marital.' - '.$sheetData[$i]['25'].' - '.$sheetData[$i]['26'].' - '
				// .$sheetData[$i]['27'].' - '.$sheetData[$i]['28'].' - '.$sheetData[$i]['30'].' - '.$sheetData[$i]['31'].' - '
				// .$sheetData[$i]['32'].' - '.$sheetData[$i]['33'].' - '.$sheetData[$i]['34'].' - '.$sheetData[$i]['35'].' - '
				// .$sheetData[$i]['36'].' - '.$sheetData[$i]['37'].' - '.$sheetData[$i]['38'].' - '.$sheetData[$i]['39'].' - '
				// .$sheetData[$i]['40'].' - '.$sheetData[$i]['41'].' - '.$sheetData[$i]['42'].' - '.$sheetData[$i]['43'].' - '
				// .$sheetData[$i]['44'].' - '.$sheetData[$i]['45'].' - '.$sheetData[$i]['46'].' - '.$sheetData[$i]['47'].' - '
				// .$sheetData[$i]['48'].' - '.$sheetData[$i]['49'].' - '.$sheetData[$i]['50']."<br>";
				 
				 
				$this->db->query("insert into pegawai (nik,
				nama,
				alamat,
				tempat_lahir,
				tanggal_lahir,
				jenis_kelamin,
				id_agama,
				id_status_kerja,
				mulai_kerja,
				masa_kerja_tahun,
				masa_kerja_bulan,
				telp,
				telp_keluarga,
				id_pendidikan,
				id_jabatan,
				golongan,
				prs,
				photo,
				ktp,
				dokumen,
				awal_kontrak,
				akhir_kontrak,
				lokasi_kerja,
				id_marital_status,
				nama_keluarga
			 ) values ('".$sheetData[$i][0]."',
				'".ucwords(strtolower($sheetData[$i]['1']))."',
				'".$sheetData[$i][2]."',
				'".$sheetData[$i][3]."',
				'".$sheetData[$i][4]."',
				'".$jenkel."',
				'".$agama."',
				'".$status_kerja."',
				'".$sheetData[$i][8]."',
				'".$sheetData[$i][9]."',
				'".$sheetData[$i][10]."',
				'".str_replace($replaced,"",$sheetData[$i][11])."',
				'".str_replace($replaced,"",$sheetData[$i][12])."', 
				'".$pendidikan."',
				'".$jabatan."',
				'".$sheetData[$i][15]."',
				'".$sheetData[$i][16]."',
				'".$sheetData[$i][17]."',
				'".$sheetData[$i][18]."',
				'".$sheetData[$i][19]."',
				'".$sheetData[$i][20]."',
				'".$sheetData[$i][21]."',
				'".$sheetData[$i][22]."',
				'".$marital."' 
				'".$sheetData[$i][25]."',  
				)");
			
			} 
	 
		} 

	}
}
