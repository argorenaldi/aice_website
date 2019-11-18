<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

	public function __construct()
	{
		parent::__construct();
		#load model "Aice_model"
		#load library form validation
		$this->load->model('Aice_model');
		$this->load->library('form_validation');
	}

	public function contact_us()
	{
		$this->load->view('template/navbar');
		$this->load->view('contact_us/contact_us');
		$this->load->view('template/footer');

	
	
	}

	public function bereseller()
	{
		$this->load->view('template/navbar');
		$this->load->view('bereseller/bereseller');
		$this->load->view('template/footer');

	
	
	}
	


	public function tambah()
	{

		//from library form_validation, set rules for nama, email,nohp,pesan = required
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('nohp', 'nohp', 'required|numeric');
		$this->form_validation->set_rules('pesan', 'pesan', 'required');


		//conditon in form_validation, if user input form = false, then load page "tambah" again
		if ($this->form_validation->run() == false) {
			$this->load->view('template/navbar', $data);
			$this->load->view('contact_us/contact_us');
			$this->load->view('template/footer');
		}
		//if success {
		//call method "kirimLaporan" in Aice_model
		//use flashdata to to show alert "added success"
		//back to controller mahasiswa }
		else {
			$this->Aice_model->kirimLaporan();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('home/contact_us');
		}
	}

	public function tambahseller()
	{

		//from library form_validation, set rules for nama, email,nohp,pesan = required
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('no_hp', 'no_hp', 'required|numeric');
		$this->form_validation->set_rules('nama_provinsi', 'nama_provinsi', 'required');
		$this->form_validation->set_rules('nama_kota', 'nama_kota', 'required');
		$this->form_validation->set_rules('nama_kecamatan', 'nama_kecamatan', 'required');
		$this->form_validation->set_rules('kode_pos', 'kode_pos', 'required|numeric');


		//conditon in form_validation, if user input form = false, then load page "tambah" again
		if ($this->form_validation->run() == false) {
			$this->load->view('template/navbar', $data);
			$this->load->view('bereseller/bereseller');
			$this->load->view('template/footer');
		}
		//if success {
		//call method "kirimLaporan" in Aice_model
		//use flashdata to to show alert "ditambahkan ="
		//back to controller mahasiswa }
		else {
			$this->Aice_model->kirimDataSeller();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('home/bereseller');
		}
	}



}
