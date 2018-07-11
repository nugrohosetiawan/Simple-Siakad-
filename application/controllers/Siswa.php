<?php
	class Siswa extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('siswamod');
		}
		public function index() {

			
			$this->load->view('awal');
		}
		public function siswa() {

			$data['siswa'] = $this->siswamod->ambilsiswa()->result();
			$this->load->view('siswa', $data);
		}
		public function inputsiswa(){

			$this->load->view('input_siswa');
		}

		public function tambahsiswa(){
			$data1 = array(
				'nim' => $this->input->post('nim'),
				'nama' => $this->input->post('nama'),
				'kelamin' => $this->input->post('kelamin'),
				'alamat' => $this->input->post('alamat'),
				'date_add' => date("Y:m:d H:i:s"),
				'date_update' => date("d-m-Y"),

			);

			$insert = $this->siswamod->tbhsiswa($data1);
			header ('Location:siswa');
		}

		public function hello(){
			echo "Seribu langkah, diawali dari satu langkah kecil";
		}
	}
?>