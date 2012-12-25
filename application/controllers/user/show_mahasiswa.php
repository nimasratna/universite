<?php  

/*
	Controller Show Mahasiswa
	digunakan user yang telah login untuk melihat mahasiswa lain.
*/
class Show_Mahasiswa extends AP_Controller{

	/*
		pada landing page ini pengguna dapat mencari mahasiswa berdasarkan nim. pada view disuguhkan search bar.
	*/
	function index(){
		
		$this->setContent('mahasiswa/multi');

	}

	/*
		fungsi ini digunakan untuk melihat data mahasiswa yang lain sebagai preview.
		- ada informasi prestasi
		- ada informasi data pribadi 
			(nama lengkap, nim, jurusan, fakultas, tahun masuk, dan prestasi yang pernah diraih)
	*/
	function nim($ids = null){
		
		$this->setContent('mahasiswa/single');
	}

	function search($search_string){
		echo 'searching :'.$search_string;
	}

}

?>