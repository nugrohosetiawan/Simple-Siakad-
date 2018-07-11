<?php
	Class Siswamod extends CI_Model {  //name of the model class that you want to give, class must inherit the CodeIgniter’s CI_Model class, nama kelas dan file harus sama
		var $table = 'siswa';

		public function __construct(){
			parent::__construct();
		}

		public function ambilsiswa(){
			return $this->db->get('siswa');
		}

		public function tbhsiswa($data1){

			$this->db->insert($this->table,$data1);
			return $this->db->insert_id();
		}

	}

?>