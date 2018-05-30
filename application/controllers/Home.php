<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends OBI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->data['hrview'] = 'main/home';
		$this->load->view('_main_page',$this->data);
	}

	public function setlanguage($lang){
		$_SESSION['language'] = $lang;
		var_dump($_SESSION['language']);
		return redirect($_SERVER['HTTP_REFERER']);
	}
}