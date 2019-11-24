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
}	
