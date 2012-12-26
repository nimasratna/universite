<?php  

/*
	AP_Controller

	Controller ini digunakan sebagai perpanjangan dan modifikasi 
	dari kelas core CI_Controller. Tujuan penggunaan class ini adalah 
	pendefinisian mandiri beberapa variabel terkait dengan view dan model.
*/
class AP_Controller extends CI_Controller{

	public $data;
	public $sub_data;
	public $template;
	public $assets_path;

	public function __construct(){
		// define superclass 
		parent::__construct();
		$this->assets_path = base_url().'assets/';
	}

	function getHeader($data = null){
		$this->data['header'] = $this->load->view('template/header');
	}

	function getFooter($data = null){
		$this->data['footer'] = $this->load->view('template/footer');
	}

	function setContent($dest = 'welcome', $data_content = null, $data_header = null, $data_footer = null){
		if($data_header==1 and $data_footer==1){
			$this->load->view('template/header-empty');			
			$this->load->view($dest, $data_content);
			$this->load->view('template/footer-empty');			
		} else {
			$this->getHeader($data_header);
			$this->load->view($dest, $data_content);
			$this->getFooter($data_footer);
		}
	}

}

class Secure_Controller extends AP_Controller{

	function __construct()
    {
        parent::__construct();
 
        //$this->load->library('session');
        $this->load->helper('cookie');
        //$this->load->helper('url');
        //var_dump($this->session->userdata('username')); die();
 
        if(!$this->session->userdata('username')){
            return redirect('auth', 'refresh');
        }
    }

}

?>