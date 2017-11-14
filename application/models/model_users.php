<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_users extends CI_Model
{
	public function login($username,$password)
	{
		$query = $this->db->get_where('tb_admin', array('username' => $username,'password' => $password));
		return $query->result();
	}

	public function cek_unit($unit)
	{
		$query = $this->db->get_where('tb_pegawai', array('unit' => $unit));
		return $query->result();
		//$query = $this->db->query("SELECT * FROM tb_pegawai WHERE unit='$unit'");
		//return $query->result();
	}

	public function cek_pegawai($nopeg)
	{
		$query = $this->db->get_where('tb_pegawai', array('nopeg' => $nopeg));
		return $query->result();
	}


	public function cek_admin($admin, $pass)
	{
		$query = $this->db->get_where('tb_admin', array('username' => $admin, 'password' => $pass));
		return $query->result();
		//$query = $this->db->query("SELECT * FROM tb_pegawai WHERE unit='$unit'");
		//return $query->result();
	}

	public function cek_asessor($admin, $pass)
	{
		$query = $this->db->get_where('tb_admin', array('username' => $admin, 'password' => $pass));
		return $query->result();
		//$query = $this->db->query("SELECT * FROM tb_pegawai WHERE unit='$unit'");
		//return $query->result();
	}

	public function id_pertanyaan()
	{
		//$this->db->order_by('status_kuesioner', 'ASC')
		$hasil = $this->db->query("SELECT id_pertanyaan FROM tb_pertanyaan");
		//$query = $this->db->get('kuisioner');
		if($hasil->num_rows() > 0){
			return $hasil->result()	;
		} else{
			return "kosong";
		}
	}

	public function list_pertanyaan1()
	{
		//$this->db->order_by('status_kuesioner', 'ASC')
		$hasil = $this->db->query("SELECT id_pertanyaan, deskripsi, dasar_perhitungan, poin FROM tb_pertanyaan WHERE id_dimensi=1");
		//$query = $this->db->get('kuisioner');
		if($hasil->num_rows() > 0){
			return $hasil->result()	;
		} else{
			return "kosong";
		}
	}

	public function list_pertanyaan2()
	{
		//$this->db->order_by('status_kuesioner', 'ASC')
		$hasil = $this->db->query("SELECT id_pertanyaan, deskripsi, dasar_perhitungan, poin FROM tb_pertanyaan WHERE id_dimensi=2");
		//$query = $this->db->get('kuisioner');
		if($hasil->num_rows() > 0){
			return $hasil->result()	;
		} else{
			return "kosong";
		}
	}

	public function list_pertanyaan3()
	{
		//$this->db->order_by('status_kuesioner', 'ASC')
		$hasil = $this->db->query("SELECT id_pertanyaan, deskripsi, dasar_perhitungan, poin FROM tb_pertanyaan WHERE id_dimensi=3");
		//$query = $this->db->get('kuisioner');
		if($hasil->num_rows() > 0){
			return $hasil->result()	;
		} else{
			return "kosong";
		}
	}

	public function list_pertanyaan4()
	{
		//$this->db->order_by('status_kuesioner', 'ASC')
		$hasil = $this->db->query("SELECT id_pertanyaan, deskripsi, dasar_perhitungan, poin FROM tb_pertanyaan WHERE id_dimensi=4");
		//$query = $this->db->get('kuisioner');
		if($hasil->num_rows() > 0){
			return $hasil->result()	;
		} else{
			return "kosong";
		}
	}

	public function list_dimensi()
	{
		$hasil = $this->db->query("SELECT var_dimensi FROM dimensi");
		//$query = $this->db->get('kuisioner');
		if($hasil->num_rows() > 0){
			return $hasil->result()	;
		} else{
			return "kosong";
		}
	}

	public function count_dimensi()
	{
		$hasil = $this->db->query("SELECT count(id_dimensi) FROM dimensi");
		//$query = $this->db->get('kuisioner');
		if($hasil->num_rows() > 0){
			return $hasil->result()	;
		} else{
			return "kosong";
		}
	}

	public function simpan($hasil,$q, $id)
	{
		$j=0;
		$a=1;
		//$print_r($hasil);
		do {
	# code...
	//	$valTangibles = $yeah['2']->id_kuesioner;
			$data = array(
					'nopeg' 		     => $this->session->userdata('nopeg'),
					//$this->session->userdata('nopeg'),
					'id_pertanyaan'     => $id[$j]->id_pertanyaan,
					//$id_kuesioner[$i]->id_kuesioner,
					'frekuensi' 	=> $hasil[$id[$j]->id_pertanyaan]
			);

			echo "<br>";
			$this->db->insert('hasil_nilai',$data);
			$a++;
			$j++;
			empty($data);
		}
		while ($a <= $q);
		//print_r($data);
     	//Query insert into
	}
			

}
