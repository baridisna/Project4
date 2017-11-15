<?php 
 
class Upload extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));
	}
 
	public function index(){
		$this->load->view('cobaview', array('error' => ' ' ));
	}
 
	public function aksi_upload(){
		$config['upload_path']          = './berkas/';
		$config['allowed_types']        = 'zip|jpg|rar';
		$config['max_size']             = 100;
 
		$this->load->library('upload', $config);
 		

		if ( ! $this->upload->do_upload('berkas1')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('cobaview', $error);
		}else{
			$data['upload_data1'] = $this->upload->data();
		}

		if ( ! $this->upload->do_upload('berkas2')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('cobaview', $error);
		}else{
			$data['upload_data2'] = $this->upload->data();
		}
		
		$this->load->view('uploadsukses', $data);
	}
}
