<?php
function hashpass($str) {
    return hash('sha1', $str . config_item('encryption_key'));
}

function logged_in(){
	return isset($_SESSION['system']->hr_logged)?$_SESSION['system']->hr_logged:false;
}

function randomString($length) {
	$str = "";
	$characters = array_merge(range('A','Z'), range('0','9'),range('a','z'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}

function message_dialog($tag = 'span', $type = 'normal', $msg = NULL) {
	switch ($type) {
		case 'normal':
			$class = 'alert-info';
			break;
		case 'error':
			$class = 'alert-danger';
			break;
		case 'warning':
			$class = 'alert-warning';
			break;
		case 'success':
			$class = 'alert-success';
			break;
		default:
			$class = 'alert-info';
			break;
	}
	$str = '<'.$tag.' class="alert '.$class.' alert-dismissible fade show">
		<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
		'.$msg.'</'.$tag.'>';
	return $str;
}


function do_upload($dir,$file){
		
	$CI =& get_instance();//=$this
	
	$path = './assets/public/'.$dir;
	$path_thumb = './assets/public_thumbs/'.$dir;
	
	if(! is_dir($path)){
		if(mkdir($path,0777,true)){
			chmod($path,0777);
		}
	}
	if(! is_dir($path_thumb)){
		if(mkdir($path_thumb,0777,true)){
			chmod($path_thumb,0777);
		}
	}

	$config['upload_path']          = $path;
	$config['allowed_types']        = '*';
	$config['max_size']             = 102400;
 /* $config['max_width']            = 102400;
	$config['max_height']           = 76800;*/

	$CI->load->library('upload', $config);

	if ( ! $CI->upload->do_upload($file))
	{
			//return 'error';
			return '';
	}
	else
	{
		$dl_file = $CI->upload->data();

		$name = explode('.',$dl_file['orig_name']);
		$time=floatval(microtime(true));
		$savetime = intval($time*1000);
		if($savetime<1000000000000)
		{
				$savetime=round(microtime(true)*1000);
		}

		$filename = time()+date('ymd');
		//$filename .= date('ymd');
		$filename.='_'.linkseo($name[0]).'.'.$name[1];
		$path_new = $path.'/'.$filename;
		rename($path.'/'.$dl_file['orig_name'],$path_new);
		
		//Thumbnail Image Upload - Start
		$config['image_library'] = 'gd2';
		$config['source_image'] = $path.'/'.$filename;
		$config['new_image'] = $path_thumb.'/'.$filename;
		$config['width'] = 100;
		$config['height'] = 100;

		//load resize library
		$CI->load->library('image_lib', $config);
		$CI->image_lib->resize();

		return $filename;
	}
		
}

function total_employees(){
	$total = array(
		'1'	=> '20-50',
		'2'	=> '51-100',
		'3'	=> '101-500',
		'4'	=> '501-1000',
		'5'	=> '>1000',
	);
	return $total;
}

function get_cities($id=0){
	$CI =& get_instance();
	$CI->load->model('modules/M_cities');
	if($id){
		$get = $CI->M_cities->set('id',$id)->gets();
	}else{
		$get = $CI->M_cities->set_orderby('sort','asc')->gets();
	}
	return $get;
}

function get_districts($cityid=0){
	$CI =& get_instance();
	$CI->load->model('modules/M_districts');
	$get = false;
	if($cityid){
		$get = $CI->M_districts->set('city',$cityid)->gets();
	}
	return $get;
}