<?php
	Class Siswamod extends CI_Model {  //name of the model class that you want to give, class must inherit the CodeIgniter’s CI_Model class, nama kelas dan file harus sama

		public function __construct(){
			parent::__construct();
		}

		public function ambil(){
			return $this->db->get('siswa');
		}

	}

?>