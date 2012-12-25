<?php  


class AP_Loader extends CI_Loader{

	function __construct(){
		parent::__construct();
	}

	function render_css($name = null){
		if(!is_array($name)){
			echo "<link href='".base_url()."assets/css/".$name."' rel='stylesheet' type='text/css'/>";
			return true;
		} else {
			foreach ($name as $single_name) {
				echo "<link href='".base_url()."assets/css/".$single_name."' rel='stylesheet' type='text/css'/>";	
			}
			return true;
		}
		return "";
	}

	function render_less($name = null){
		if(!is_array($name)){
			echo "<link href='".base_url()."assets/css/".$name.".less' rel='stylesheet/less' type='text/css'/>";
			echo "<script src='".base_url()."assets/js/less.js' type='text/javascript'></script>";
			return true;
		}
	}

	function render_js($name = null){
		if(!is_array($name)){
			 echo "<script src='".base_url()."assets/js/".$name."' type='text/javascript'></script>";
			 return true;
		} else {
			foreach ($name as $single_name) {
				echo "<script src='".base_url()."assets/js/".$single_name."' type='text/javascript'></script>";			
			}
			return true;
		}
		return "";
	}

	function render_image($name = null, $options = array()){

		$inline_option = '';

		if(is_array($options)){
			foreach ($options as $key => $value) {
				$inline_option .= "{$key}='{$value}' ";				
			}
		}

		if(!is_array($name)){
			$image = "<img src='".base_url()."/assets/img/{$name}' {$inline_option} />";
			echo $image;
		} else {
			$image = "<img src='' {$inline_option} />";
		}
		
		return true;

	}

}

?>