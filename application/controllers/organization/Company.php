<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends OBI_Controller {
	public function __construct(){
		parent::__construct();
		$this->lang->load('company',$_SESSION['language']);
		$this->load->model('M_company');
		$this->act = isset($_GET['act'])?$_GET['act']:false;
		$this->primary = isset($_GET['id'])?$_GET['id']:false;
		$this->token = isset($_GET['token'])?$_GET['token']:false;
		if($this->primary){
			if($this->token != $this->data['system']->token){
				return redirect(site_url('organization/company'));
			}
			$this->get = $this->M_company->get_by_key($this->primary);
		}
		$this->data['cities'] = get_cities();
		$this->data['total_employees'] = total_employees();
	}

	public function index(){
		switch($this->act){
			case 'upd':
				$this->edit();
				break;
			case 'view':
				$this->view();
				break;
			
			default:
				$this->home();
				break;
		}
	}
	private function home(){
		$this->data['obj'] = $this->M_company->gets();
		$this->data['hrview'] = 'organization/company/home';
		$this->load->view('_main_page',$this->data);
	}

	private function edit(){
		$this->data['obj'] = $this->get?$this->get->data():false;
		$this->data['total_employees'] = total_employees();
		$this->data['districts'] = $this->get?get_districts($this->data['obj']->cities):false;
		$this->data['hrview'] = 'organization/company/upd';
		$this->load->view('_main_page',$this->data);
	}

	private function view(){
		$this->data['hrview'] = 'organization/company/view';
		$this->load->view('_main_page',$this->data);
	}
}