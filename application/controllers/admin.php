<?php
class admin extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    $this->load->model('model_users');
    $this->load->helper(array('form', 'url'));
  }

  public function index()
  {
    $hehe  = $this->model_users->rata2construct();
    $unit=$this->session->userdata('admin_username');
  $this->load->view('header2');  
  $this->load->view('admin/corporate');
  $this->load->view('footer');
  //  $this->load->view('chart');


  }


  //Bagian Edit Forms ---------start-------------
  public function edit_kuesioner()
  {
     $id_pertanyaan = $this->uri->segment(3);
    $judul          = "KUESIONER";
    $data = array(
            // 'LA' => 'Leadership Age'
            // 'IE' => 'Innovation Element';
            'judul'  => $judul,
            'pertanyaan' => $this->model_users->tb_kuesioner()->result(),
            'dd_construct' => $this->model_users->dd_construct(),
            'construct_selected' => $this->input->post('construct') ? $this->input->post('construct') : '', // untuk edit ganti '' menjadi data dari database misalnya $row->provinsi
            'product' => $this->model_users->product($id_pertanyaan)->row_array(),
        );
    // print_r($data['dd_construct']);
    // $data['judul']  = $judul;
    // $data['pertanyaan'] = $this->model_users->tb_kuesioner()->result();
    $this->load->view('header2');
    $this->load->view('editform/editform_kue',$data);
    $this->load->view('footer');
     // $id_pertanyaan = $this->uri->segment(3);
     //    $data['product'] = $this->model_users->product($id_pertanyaan)->row_array();
  }


  public function edit_presentation()
  {
    $judul          = "PRESENTATION";
     $data = array(
            // 'LA' => 'Leadership Age'
            // 'IE' => 'Innovation Element';
            'judul'  => $judul,
            'pertanyaan' => $this->model_users->tb_presentation()->result(),
            'dd_construct' => $this->model_users->dd_construct(),
            'construct_selected' => $this->input->post('construct') ? $this->input->post('construct') : '', // untuk edit ganti '' menjadi data dari database misalnya $row->provinsi
        );
    $this->load->view('header2');
    $this->load->view('editform/editform_pre',$data);
    $this->load->view('footer');
  }

  public function edit_fgd()
  {
    $judul          = "FOKUS GROUP DISCUSSION";
     $data = array(
            // 'LA' => 'Leadership Age'
            // 'IE' => 'Innovation Element';
            'judul'  => $judul,
            'pertanyaan' => $this->model_users->tb_fgd()->result(),
            'dd_construct' => $this->model_users->dd_construct(),
            'construct_selected' => $this->input->post('construct') ? $this->input->post('construct') : '', // untuk edit ganti '' menjadi data dari database misalnya $row->provinsi
        );
    $this->load->view('header2');
    $this->load->view('editform/editform_fgd2',$data);
    $this->load->view('footer');
  }

  public function edit_interview()
  {
    $judul          = "INTERVIEW";
     $data = array(
            // 'LA' => 'Leadership Age'
            // 'IE' => 'Innovation Element';
            'judul'  => $judul,
            'pertanyaan' => $this->model_users->tb_interview()->result(),
            'dd_construct' => $this->model_users->dd_construct(),
            'construct_selected' => $this->input->post('construct') ? $this->input->post('construct') : '', // untuk edit ganti '' menjadi data dari database misalnya $row->provinsi
        );
    $this->load->view('header2');
    $this->load->view('editform/editform_inter',$data);
    $this->load->view('footer');
  }

  public function edit_observation()
  {
    $judul          = "OBSERVATION";
    $data = array(
            // 'LA' => 'Leadership Age'
            // 'IE' => 'Innovation Element';
            'judul'  => $judul,
            'pertanyaan' => $this->model_users->tb_observation()->result(),
            'dd_construct' => $this->model_users->dd_construct(),
            'construct_selected' => $this->input->post('construct') ? $this->input->post('construct') : '', // untuk edit ganti '' menjadi data dari database misalnya $row->provinsi
        );
    $this->load->view('header2');
    $this->load->view('editform/editform_obs',$data);
    $this->load->view('footer');
  }

  	public function kuesioner()
	{
		$this->load->view('header2.php');
		$this->load->view('kuesioner.php');
		$this->load->view('footer.php');
	}
	
	 	public function fgd()
	{
		$this->load->view('header2.php');
		$this->load->view('fgd.php');
		$this->load->view('footer.php');
	}
	
	 	public function presentation()
	{
		$this->load->view('header2.php');
		$this->load->view('presentation.php');
		$this->load->view('footer.php');
	}
	
	 	public function interview()
	{
		$this->load->view('header2.php');
		$this->load->view('interview.php');
		$this->load->view('footer.php');
	}
	
	 	public function observation()
	{
		$this->load->view('header2.php');
		$this->load->view('observation.php');
		$this->load->view('footer.php');
	}

	public function import_kuesioner(){
		$this->load->view('import_php/import_kuesioner');
	}
	
		public function import_fgd(){
		$this->load->view('import_php/import_fgd');
	}
	
		public function import_interview(){
		$this->load->view('import_php/import_interview');
	}
	
		public function import_presentation(){
		$this->load->view('import_php/import_presentation');
	}
	
		public function import_observation(){
		$this->load->view('import_php/import_observation');
	}
	
	public function sukses(){
		$this->load->view('import_php/sukses');
	}
	
	public function kuesioner_form(){
	$this->load->view('import_php/kuesioner');
	}
	public function fgd_form(){
		$this->load->view('import_php/fgd');
	}
	public function interview_form(){
		$this->load->view('import_php/interview');
	}
	public function observation_form(){
		$this->load->view('import_php/observasi');
	}
	public function presentation_form(){
		$this->load->view('import_php/presentasi');
		
	}
public function corporate(){
  $this->load->view('header2');
  $this->load->view('admin/corporate');
  $this->load->view('footer');
  
  }

public function jktdc(){
  $this->load->view('header2');
  $this->load->view('admin/dashboard_jktdc');
  $this->load->view('footer');

}
public function jktde(){
  $this->load->view('header2');
	$this->load->view('admin/dashboard_jktde');
  $this->load->view('footer');

}
public function jktdf(){
  $this->load->view('header2');
	$this->load->view('admin/dashboard_jktdf');
  $this->load->view('footer');

}
public function jktdg(){
  $this->load->view('header2');
	$this->load->view('admin/dashboard_jktdg');
  $this->load->view('footer');

}
public function jktdi(){
  $this->load->view('header2');
	$this->load->view('admin/dashboard_jktdi');
  $this->load->view('footer');

}
public function jktdn(){
  $this->load->view('header2');
	$this->load->view('admin/dashboard_jktdn');
  $this->load->view('footer');

}
public function jktdo(){
  $this->load->view('header2');
	$this->load->view('admin/dashboard_jktdo');
  $this->load->view('footer');

}
public function jktdr(){
  $this->load->view('header2');
	$this->load->view('admin/dashboard_jktdr');
  $this->load->view('footer');

}
public function jktdz(){
  $this->load->view('header2');
	$this->load->view('admin/dashboard_jktdz');
  $this->load->view('footer');

}
public function jktgi(){
  $this->load->view('header2');
	$this->load->view('admin/dashboard_jktgi');
  $this->load->view('footer');
  
}

public function jktcd(){
  $this->load->view('header2');
	$this->load->view('admin/dashboard_jktcd');
  $this->load->view('footer');

}

public function jktnh(){
  $this->load->view('header2');
	$this->load->view('admin/dashboard_jktnh');
  $this->load->view('footer');

}

public function sinam(){
  $this->load->view('header2');
	$this->load->view('admin/dashboard_SINAM');
  $this->load->view('footer');

}

public function sydam(){

	$this->load->view('admin/dashboard_SYDAM');


}

public function tyoam(){

	$this->load->view('admin/dashboard_TYOAM');


}

public function shaam(){

	$this->load->view('admin/dashboard_SHAAM');


}


public function mesam(){
	$this->load->view('admin/dashboard_MESAM');


}

public function subam(){
	$this->load->view('admin/dashboard_SUBAM');


}

public function jktam(){
	$this->load->view('admin/dashboard_JKTAM');


}

public function upgam(){
	$this->load->view('admin/dashboard_UPGAM');


}

public function mesdm(){

	$this->load->view('admin/dashboard_MESDM');


}

public function bthdm(){

	$this->load->view('admin/dashboard_BTHDM');


}

public function btjdm(){

	$this->load->view('admin/dashboard_BTJDM');


}

public function tkgdm(){
	$this->load->view('admin/dashboard_TKGDM');


}

public function plmdm(){

	$this->load->view('admin/dashboard_PLMDM');


}
}
?>
