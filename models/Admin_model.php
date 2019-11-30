<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	//--Dibuat oleh Argo dwi renaldi NIM : 1303174098
	public function getAllKomplain()
	{
		$data = $this->db->get('contactus');
		return $data->result_array();
	}

	public function getAllSeller()
	{
		$data = $this->db->get('bereseller');
		return $data->result_array();
	}
	public function hapusDataLaporan($id)
	{
		//use query builder to delete data based on id 
		$this->db->where('id', $id);
		return $this->db->delete('contactus');

	}
	public function hapusDataSeller($id)
	{
		//use query builder to delete data based on id 
		$this->db->where('id', $id);
		return $this->db->delete('bereseller');

	}
	public function hapusCareers($id)
	{
		//use query builder to delete data based on id 
		$this->db->where('id', $id);
		return $this->db->delete('careers');

	}
	 function simpan_berita($jdl,$berita,$gambar){
        $hsl=$this->db->query("INSERT INTO news (berita_judul,berita_isi,berita_image) VALUES ('$jdl','$berita','$gambar')");
        return $hsl;
    }
     function simpan_product($nama,$deskripsi,$image){
        $hsl=$this->db->query("INSERT INTO produk (nama,deskripsi,image_produk) VALUES ('$nama','$deskripsi','$image')");
        return $hsl;
    }
 
    function get_berita_by_kode($kode){
        $hsl=$this->db->query("SELECT * FROM news WHERE berita_id='$kode'");
        return $hsl;
    }

 
    function get_all_berita(){
        $hsl=$this->db->query("SELECT * FROM news ORDER BY berita_id DESC");
        return $hsl;
    }
    function get_all_product(){
        $hsl=$this->db->query("SELECT * FROM produk ORDER BY id DESC");
        return $hsl;
    }
    public function getAllNews()
	{
		$data = $this->db->get('news');
		return $data->result_array();
	}
	public function getAllProduct()
	{
		$data = $this->db->get('produk');
		return $data->result_array();
	}
	public function getAllCareers()
	{
		$data = $this->db->get('careers');
		return $data->result_array();
	}


	public function getNewsByKode($kode)
	{
		//get data mahasiswa based on id 
		$this->db->where('berita_id', $kode);
		return $this->db->get('news')->row_array();

	}
	public function getProductById($id)
	{
		//get data mahasiswa based on id 
		$this->db->where('id', $id);
		return $this->db->get('produk')->row_array();

	}
	public function getCareersById($id)
	{
		//get data mahasiswa based on id 
		$this->db->where('id', $id);
		return $this->db->get('careers')->row_array();

	}
    public function hapusBerita($kode)
	{
		$this->db->where('berita_id', $kode);
		return $this->db->delete('news');

	}
	 public function hapusProduct($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('produk');

	}
	public function ubahDataBerita($kode,$jdl,$berita,$gambar)
	{
		$data = [
			"berita_judul" => $jdl,
			"berita_isi" => $berita,
			"berita_image" => $gambar,
		];

		$this->db->where('berita_id', $kode);
		return $this->db->update('news', $data);
		

	}
	public function ubahDataProduct($id,$nama,$deskripsi,$image)
	{
		$data = [
			"nama" => $nama,
			"deskripsi" => $deskripsi,
			"image_produk" => $image,
		];

		$this->db->where('id', $id);
		return $this->db->update('produk', $data);
		

	}
	public function ubahDataCareers($id,$position,$deskripsi,$contact)
	{
		$data = [
			"position" => $position,
			"deskripsi" => $deskripsi,
			"contact" => $contact,
		];

		$this->db->where('id', $id);
		return $this->db->update('careers', $data);
		

	}
	public function tambah_careers()
	{
		$data = [
			"position" => $this->input->post('posisi', true),
			"deskripsi" => $this->input->post('deskripsi', true),
			"contact" => $this->input->post('contact', true),
			];
			return $this->db->insert('careers', $data);
		

	}


}	
