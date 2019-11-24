<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aice_model extends CI_model
{

//--Dibuat oleh Argo dwi renaldi NIM : 1303174098
	public function kirimLaporan()
	{

		//buat array untuk menyimpan nama,nim,email dan jurusan.
		$data = [
			"id_kategori" => $this->input->post('id_kategori', true),
			"nama" => $this->input->post('nama', true),
			"email" => $this->input->post('email', true),
			"nohp" => $this->input->post('nohp', true),
			"pesan" => $this->input->post('pesan', true),
		];
		return $this->db->insert('contactus', $data);
		//use query builder to insert $data in table "contactus"

	}
	public function kirimDataSeller()
	{

		//buat array untuk menyimpan nama,nim,email dan jurusan.
		$data = [
			"nama" => $this->input->post('nama', true),
			"email" => $this->input->post('email', true),
			"alamat" => $this->input->post('alamat', true),
			"no_hp" => $this->input->post('no_hp', true),
			"nama_provinsi" => $this->input->post('nama_provinsi', true),
			"nama_kota" => $this->input->post('nama_kota', true),
			"nama_kecamatan" => $this->input->post('nama_kecamatan', true),
			"kode_pos" => $this->input->post('kode_pos', true),
		
		];
		return $this->db->insert('bereseller', $data);
		//use query builder to insert $data in table "contactus"

	}
}

?>