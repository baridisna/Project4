<?php

class AdminInternal extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_users');
        $this->load->helper(array('form', 'url'));

    }

    public function index()
    {
      $this->load->view('AdminInternal/header_dedy');
      $this->load->view('AdminInternal/validasi_view');
      $this->load->view('AdminInternal/footer_dedy');
    }
}

 ?>
