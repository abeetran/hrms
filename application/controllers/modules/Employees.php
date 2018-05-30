<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends OBI_Controller {
	public function __construct(){
		parent::__construct();
		$this->lang->load('employees',$_SESSION['language']);
		$this->load->model('M_users');
		$this->act = isset($_GET['act'])?$_GET['act']:false;
		$this->primary = isset($_GET['id'])?$_GET['id']:false;
		$this->token = isset($_GET['token'])?$_GET['token']:false;
	}

	public function index(){
		switch($this->act){
			case 'upd':
				$this->edit();
				break;
			default:
				$this->home();
				break;
		}
	}

	private function home(){
		$this->data['obj'] = $this->M_users->sets(array('locked'=>0,'id !='=>1))->gets();
		$this->data['hrview'] = 'modules/employees/home';
		$this->load->view('_main_page',$this->data);
	}

	private function save(){

	}

	private function edit(){

	}

	private function delete(){

	}
}