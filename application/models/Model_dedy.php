<?php
class Model_dedy extends CI_Model{


  public function dd_direktorat()	{

  		$hasil = $this->db->query("SELECT distinct direktorat from tb_pegawai");

  		$dd['']='Please select direktorat';
      if($hasil->num_rows()>0){
        foreach ($hasil->result() as $row) {
          $dd[$row->direktorat] = $row->direktorat;
          # code...
        }
      }
      return $dd;
}



}
 ?>
