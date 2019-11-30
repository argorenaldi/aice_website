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
//-- Dibuat oleh Argo dwi renaldi NIM :1303174098
	public function __construct()
	{
		parent::__construct();
		#load model "Aice_model"
		#load library form validation
		$this->load->model('Aice_model');
		$this->load->model('Admin_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
	
		$this->load->view('template/index');
		

	
	
	}
	public function home(){
    	 $x['data']=$this->Admin_model->get_all_berita();
        $this->load->view('template/navbar_home');
        $this->load->view('home/home' , $x);
        $this->load->view('template/footer');
    }

    public function about()
	{
		$this->load->view('template/navbar_about');
		$this->load->view('about/about');
		$this->load->view('template/footer');
	}
	
	 public function news(){
        $x['data']=$this->Admin_model->get_all_berita();
        $this->load->view('template/navbar_news');
        $this->load->view('news/news',$x);
        $this->load->view('template/footer');
    }
 
   public function view(){
        $kode=$this->uri->segment(3);
        $x['data']=$this->Admin_model->get_berita_by_kode($kode);
        $this->load->view('template/navbar');
        $this->load->view('news/news_view',$x);
        $this->load->view('template/footer');
    }

    	public function product()
	{
		$x['data']=$this->Admin_model->get_all_product();
		$this->load->view('template/navbar_product');
		$this->load->view('product/product',$x);
		$this->load->view('template/footer');
	
	}

	 public function gallery()
	{
		$this->load->view('template/navbar_gallery');
		$this->load->view('gallery/gallery');
		$this->load->view('template/footer');
	
	}


	public function contact_us()
	{
		$this->load->view('template/navbar_contactus');
		$this->load->view('contact_us/contact_us');
		$this->load->view('template/footer');

	
	
	}

	public function bereseller()
	{
		$this->load->view('template/navbar_bereseller');
		$this->load->view('bereseller/bereseller');
		$this->load->view('template/footer');

	
	
	}
	public function login()
	{
		
		$this->load->view('login/login');
		
	
	}

	public function careers()
	{
		$data = array();
		$data['list'] = $this->Admin_model->getAllCareers();
		$this->load->view('template/navbar');
		$this->load->view('careers/careers', $data);
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