<?php

class AdminInternal extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_users');
        $this->load->model('Model_isna');
        $this->load->helper(array('form', 'url'));

    }

    public function index()
    {
      $data = array('pegawai' => $this->Model_isna->dataPegawai());
      $this->load->view('AdminInternal/header_dedy');
      $this->load->view('AdminInternal/validasi_view', $data);
      $this->load->view('AdminInternal/footer_dedy');
    }

    public function dashboard()
    {
      $data = array('pegawai' => $this->Model_isna->dataPegawai());
      $this->load->view('AdminInternal/header_dedy');
      $this->load->view('SuperAdmin/dashboard', $data);
      $this->load->view('AdminInternal/footer_dedy');
    }
}

 ?>
