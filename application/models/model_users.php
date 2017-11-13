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

	public function id_kuesioner()
	{
		//$this->db->order_by('status_kuesioner', 'ASC')
		$hasil = $this->db->query("SELECT id_kuesioner FROM tb_pertanyaan WHERE id_metode = 'kue' ORDER BY id_kuesioner");
		//$query = $this->db->get('kuisioner');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}


	public function list_kuesioner()
	{
		//$this->db->order_by('status_kuesioner', 'ASC')
		$hasil = $this->db->query("SELECT pertanyaan FROM tb_pertanyaan WHERE id_metode='kue' ");
		//$query = $this->db->get('kuisioner');
		if($hasil->num_rows() > 0){
			return $hasil->result()	;
		} else{
			return "kosong";
		}
	}

	public function id_fgd()
	{
		//$this->db->order_by('status_kuesioner', 'ASC')
		$hasil = $this->db->query("SELECT id_kuesioner FROM tb_pertanyaan WHERE id_metode = 'fgd' ORDER BY id_kuesioner");
		//$query = $this->db->get('kuisioner');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}


	public function list_fgd()
	{
		//$this->db->order_by('status_kuesioner', 'ASC')
		$hasil = $this->db->query("SELECT pertanyaan FROM tb_pertanyaan WHERE id_metode='fgd' ");
		//$query = $this->db->get('kuisioner');
		if($hasil->num_rows() > 0){
			return $hasil->result()	;
		} else{
			return "kosong";
		}
	}

	public function id_presentation()
	{
		//$this->db->order_by('status_kuesioner', 'ASC')
		$hasil = $this->db->query("SELECT id_kuesioner FROM tb_pertanyaan WHERE id_metode = 'pre' ORDER BY id_kuesioner");
		//$query = $this->db->get('kuisioner');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}


	public function list_presentation()
	{
		//$this->db->order_by('status_kuesioner', 'ASC')
		$hasil = $this->db->query("SELECT pertanyaan FROM tb_pertanyaan WHERE id_metode='pre' ");
		//$query = $this->db->get('kuisioner');
		if($hasil->num_rows() > 0){
			return $hasil->result()	;
		} else{
			return "kosong";
		}
	}

	public function id_interview()
	{
		//$this->db->order_by('status_kuesioner', 'ASC')
		$hasil = $this->db->query("SELECT id_kuesioner FROM tb_pertanyaan WHERE id_metode = 'inter' ORDER BY id_kuesioner");
		//$query = $this->db->get('kuisioner');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}


	public function list_interview()
	{
		//$this->db->order_by('status_kuesioner', 'ASC')
		$hasil = $this->db->query("SELECT pertanyaan FROM tb_pertanyaan WHERE id_metode='inter' ");
		//$query = $this->db->get('kuisioner');
		if($hasil->num_rows() > 0){
			return $hasil->result()	;
		} else{
			return "kosong";
		}
	}

	public function id_observation()
	{
		//$this->db->order_by('status_kuesioner', 'ASC')
		$hasil = $this->db->query("SELECT id_kuesioner FROM tb_pertanyaan WHERE id_metode = 'obs' ORDER BY id_kuesioner");
		//$query = $this->db->get('kuisioner');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}


	public function list_observation()
	{
		//$this->db->order_by('status_kuesioner', 'ASC')
		$hasil = $this->db->query("SELECT pertanyaan FROM tb_pertanyaan WHERE id_metode='obs' ");
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
		do {
	# code...
	//	$valTangibles = $yeah['2']->id_kuesioner;
			$data = array(
					'nopeg' 		     => $this->session->userdata('nopeg'),
					//$this->session->userdata('nopeg'),
					'id_kuesioner'     => $id[$j]->id_kuesioner,
					//$id_kuesioner[$i]->id_kuesioner,
					'hasil_nilai_result' 	=> $hasil[$id[$j]->id_kuesioner]
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







	//menampilkan id_kuesioner, pertanyaan, construct setiap metode <-----------------------------------------------
		function tb_kuesioner(){
	        // ambil data barang dari tabel barang
	        $pertanyaan = $this->db->query("SELECT tb_pertanyaan.id_construct, tb_pertanyaan.id_kuesioner, tb_pertanyaan.pertanyaan, construct.varconstruct FROM tb_pertanyaan LEFT JOIN construct ON tb_pertanyaan.id_construct=construct.id_construct WHERE id_metode='kue' ");
	        return $pertanyaan;
	    	}

	    function tb_presentation(){
	        // ambil data barang dari tabel barang
	        $pertanyaan = $this->db->query("SELECT tb_pertanyaan.id_kuesioner, tb_pertanyaan.pertanyaan, construct.varconstruct FROM tb_pertanyaan LEFT JOIN construct ON tb_pertanyaan.id_construct=construct.id_construct WHERE id_metode='pre' ");
	        return $pertanyaan;
	    	}

	    function tb_fgd(){
	        // ambil data barang dari tabel barang
	        $pertanyaan = $this->db->query("SELECT tb_pertanyaan.id_kuesioner, tb_pertanyaan.pertanyaan, construct.varconstruct FROM tb_pertanyaan LEFT JOIN construct ON tb_pertanyaan.id_construct=construct.id_construct WHERE id_metode='fgd' ");
	        return $pertanyaan;
	    	}

	    function tb_interview(){
	        // ambil data barang dari tabel barang
	        $pertanyaan = $this->db->query("SELECT tb_pertanyaan.id_kuesioner, tb_pertanyaan.pertanyaan, construct.varconstruct FROM tb_pertanyaan LEFT JOIN construct ON tb_pertanyaan.id_construct=construct.id_construct WHERE id_metode='inter' ");
	        return $pertanyaan;
	    	}

 		function tb_observation(){
	        // ambil data barang dari tabel barang
	        $pertanyaan = $this->db->query("SELECT tb_pertanyaan.id_kuesioner, tb_pertanyaan.pertanyaan, construct.varconstruct FROM tb_pertanyaan LEFT JOIN construct ON tb_pertanyaan.id_construct=construct.id_construct WHERE id_metode='obs' ");
	        return $pertanyaan;
	    	}

	    //memanggil id tiap row pertanyaan di tb_pertanyaan
    	function product($id_pertanyaan){
        	return $this->db->get_where('tb_pertanyaan',array('id_kuesioner'=>$id_pertanyaan));
    	}
	//menampilkan id_kuesioner, pertanyaan, construct setiap metode ----------------------------------------------->


    	//menampilkan id_construct dan var_construct
    	function dd_construct(){
	        $result = $this->db->query("SELECT * FROM construct");

	        // bikin array
	        // please select berikut ini merupakan tambahan saja agar saat pertama
	        // diload akan ditampilkan text please select.
	        $dd[''] = 'Please Select';
	        if ($result->num_rows() > 0) {
	            foreach ($result->result() as $row) {
	            // tentukan value (sebelah kiri) dan labelnya (sebelah kanan)
	                $dd[$row->id_construct] = $row->varconstruct;
	            }
	        }
	        return $dd;
	    }

			

	}
