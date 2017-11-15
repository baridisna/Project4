<?php

class User extends CI_Controller {

	public function __construct(){
	    parent::__construct();
	    $this->load->model('Model_users');
	    $this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data = array
				(
					'id_pertanyaan' => $this->Model_users->id_pertanyaan(),
					//'hasilNilai' => $this->Model_users->hasilNilai(),
					'pertanyaan1' => $this->Model_users->list_pertanyaan1(),
				 	'pertanyaan2' => $this->Model_users->list_pertanyaan2(),
				 	'pertanyaan3' => $this->Model_users->list_pertanyaan3(),
				 	'pertanyaan4' => $this->Model_users->list_pertanyaan4(),
				 	'dimensi' => $this->Model_users->list_dimensi()
				);
		$this->load->view('user/userHeader');
		$this->load->view('user/view_user', $data);
		$this->load->view('user/userFooter');
	}

	public function profil()
	{
		$this->load->view('user/userHeader');
		$this->load->view('user/profil');
	}

	public function input_nilai(){
      $unit=$this->session->userdata('nopeg');
      //$data['varconstruct'] = $this->Model_users->type_construct();
      $id  = $this->Model_users->id_pertanyaan();
      $hasil = $this->input->post();
      $q=count($hasil);
      $this->Model_users->simpan($hasil, $q, $id);
      $this->load->view('user/submitted');
    }

}