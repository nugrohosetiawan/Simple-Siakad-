<?php
	class Siswa extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->database();
			$this->load->model('siswamod');
		}
		public function index() {

			
			$this->load->view('awal');
		}
		public function siswa() {

			$data['siswa'] = $this->siswamod->ambil()->result();
			$this->load->view('siswa', $data);
		}

		public function hello(){
			echo "Seribu langkah, diawali dari satu langkah kecil";
		}
	}
?>