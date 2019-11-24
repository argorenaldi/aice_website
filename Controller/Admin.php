<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	//-- Dibuat oleh Argo dwi renaldi NIM :1303174098
	function __construct(){
		parent::__construct();
		if($this->session->userdata('user') == NULL){//-- buat kondisi apabila userdata (session) = tidak ada/NULL, maka
		redirect('welcome');//-- redirect ke Controller Welcome
	}
		$this->load->model('admin_model');
	}
	public function index()
	{
		$data = array();
		$data['title'] = 'Daftar Pesan';
		$data['list'] = $this->admin_model->getAllKomplain();
		$this->load->view('template/navbaradminlistpesan');
		$this->load->view('admin/admin_pesan',$data);
	}
	public function bereseller()
	{
		$data = array();
		$data['title'] = 'Daftar Request Seller';
		$data['list'] = $this->admin_model->getAllSeller();
		$this->load->view('template/navbaradminrequestseller');
		$this->load->view('admin/admin_bereseller',$data);
	}
	public function hapus($id)
	{
		//call method hapusDataLaporan with parameter id from admin_model
		//use flashdata show alert "dihapus"
		//back to controller admin
		$this->admin_model->hapusDataLaporan($id);
		$this->session->set_flashdata('flash', 'data dihapus');
		redirect('admin');
	}
	public function hapusSeller($id)
	{
		//call method hapusDataLaporan with parameter id from admin_model
		//use flashdata show alert "dihapus"
		//back to controller admin
		$this->admin_model->hapusDataSeller($id);
		$this->session->set_flashdata('flash', 'data dihapus');
		redirect('admin/bereseller');
	}
}