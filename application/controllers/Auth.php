<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_users');
		$this->data['site_name'] = $this->config->item('projectName');
		$this->lang->load('auth',$this->config->item('language'));
	}
	public function index(){
		if(isset($_POST['formSubmit'])){
			$user = $this->input->post('user');
			$password = $this->input->post('password');
			$get = $this->M_users->sets(array('email'=>$user,'password'=>hashpass($password)))->sets_or(array('username'=>$user,'password'=>hashpass($password)))->get();
			if($get){
				$token = randomString(30);
				$session = array(
					'id'		=>	$get->id,
					'username'	=>	$get->username,
					'email'		=>	$get->email,
					'hr_logged'	=>	true,
					'group_id'	=>	$get->group_id,
					'token'		=>	$token
				);
				$_SESSION['system']	= (object)$session;
				$_SESSION['filemanager']['allowed'] = true;
				return redirect(site_url());
			}else{
				$this->data['msg'] = $this->lang->line('msgFail');
			}
		}
		$this->load->view('auth/home',$this->data);
	}

	public function logout(){
		unset($_SESSION['system']);
		$_SESSION['filemanager']['allowed'] = false;
		return redirect(site_url());
	}
}