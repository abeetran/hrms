<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OBI_Controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$_SESSION['language'] = isset($_SESSION['language'])?$_SESSION['language']:$this->config->item('language');
		$_SESSION['filemanager']['allowed'] = $this->config->item('filemanger');
		$_SESSION['filemanager']['img'] = base_url('assets/images/not-found.jpg');
		$this->data['site_name'] = $this->config->item('projectName');
		$this->data['uri'] = $this->uri->segment(1);
		$exception_uris = array('login','auth/logout');

		if (in_array(uri_string(), $exception_uris) == FALSE) {
			if (logged_in() == FALSE) {
				return redirect('login');
			}
		}
		$this->data['system'] = $_SESSION['system'];
		$this->lang->load('sys',$_SESSION['language']);
		$this->data['langimg'] = array(
			'vi'	=>	base_url('assets/images/vi.svg'),
			'en'	=>	base_url('assets/images/en.png')
		);
	}
}