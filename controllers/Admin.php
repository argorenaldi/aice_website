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
		$this->load->library('upload');
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
	public function news()
	{
		$data = array();
		$data['title'] = 'Daftar Postingan Berita';
		$data['list'] = $this->admin_model->getAllNews();
		$this->load->view('template/navbaradminlistberita');
		$this->load->view('admin/admin_listberita',$data);
	}
	public function product()
	{
		$data = array();
		$data['title'] = 'Daftar Produk';
		$data['list'] = $this->admin_model->getAllProduct();
		$this->load->view('template/navbaradminlistproduct');
		$this->load->view('admin/admin_listproduct',$data);
	}
	public function careers()
	{
		$data = array();
		$data['title'] = 'Daftar Careers';
		$data['list'] = $this->admin_model->getAllCareers();
		$this->load->view('template/navbaradminlistcareers');
		$this->load->view('admin/admin_listcareers',$data);
	}

	public function postberita()
	{
		$this->load->view('template/navbaradminberita');
		$this->load->view('admin/admin_post_berita');
	}
	public function hapusBerita($kode)
	{
		
		$this->admin_model->hapusBerita($kode);
		$this->session->set_flashdata('flash', 'data dihapus');
		redirect('admin/news');
	}
	public function hapusProduct($id)
	{
		
		$this->admin_model->hapusProduct($id);
		$this->session->set_flashdata('flash', 'data dihapus');
		redirect('admin/product');
	}
	public function hapusCareers($id)
	{
		
		$this->admin_model->hapusCareers($id);
		$this->session->set_flashdata('flash', 'data dihapus');
		redirect('admin/careers');
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
	public function simpan_post(){
        $config['upload_path'] = './assets/images_news/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images_news/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 710;
                $config['height']= 420;
                $config['new_image']= './assets/images_news/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];
                $jdl=$this->input->post('judul');
                $berita=$this->input->post('berita');
 
                $this->admin_model->simpan_berita($jdl,$berita,$gambar);
                redirect('admin/news');
        }else{
            redirect('home/news');
        }
                      
        }else{
            redirect('home/news');
        }
                 
    }
    public function updateBeritaview($kode)
	{

		$data['judul'] = 'Form update berita';
		$data['news'] = $this->admin_model->getNewsByKode($kode);
		
		$this->load->view('template/navbaradminubahberita', $data);
		$this->load->view('admin/admin_updateBerita', $data);

		
		}
		 
		public function updateBerita($kode)
	{
		$config['upload_path'] = './assets/images_news/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images_news/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 710;
                $config['height']= 420;
                $config['new_image']= './assets/images_news/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];
                $jdl=$this->input->post('judul');
                $berita=$this->input->post('berita');
 
                $this->admin_model->ubahDataBerita($kode,$jdl,$berita,$gambar);
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/news');
        }else{

       
		echo "<script type='text/javascript'>alert('Update gagal.');</script>";
		}
                      
        }else{

            echo "<script type='text/javascript'>alert('Update gagal.');</script>";
              }
                 
    }

    public function updateProduct($id)
	{
		$config['upload_path'] = './assets/images_produk/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        if(!empty($_FILES['fotoproduk']['name'])){
            if ($this->upload->do_upload('fotoproduk')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images_produk/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 710;
                $config['height']= 420;
                $config['new_image']= './assets/images_produk/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $image=$gbr['file_name'];
                $nama=$this->input->post('nama');
                $deskripsi=$this->input->post('deskproduk');
 
                $this->admin_model->ubahDataProduct($id,$nama,$deskripsi,$image);
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/product');
        }else{

       
		echo "<script type='text/javascript'>alert('Update gagal.');</script>";
		}
                      
        }else{

            echo "<script type='text/javascript'>alert('Update gagal.');</script>";
              }
                 
    }

    public function updateProductview($id)
	{

		$data['judul'] = 'Form update product';
		$data['produk'] = $this->admin_model->getProductById($id);
		
		$this->load->view('template/navbaradminubahberita', $data);
		$this->load->view('admin/admin_updateProduct', $data);

		
		}


    public function inputan_product()
	{
		$this->load->view('template/navbaradminproduct');
		$this->load->view('admin/admin_product');
	}
    public function tambah_product()
	{

		$config['upload_path'] = './assets/images_produk/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        if(!empty($_FILES['fotoproduk']['name'])){
            if ($this->upload->do_upload('fotoproduk')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images_produk/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 710;
                $config['height']= 420;
                $config['new_image']= './assets/images_produk/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $image=$gbr['file_name'];
                $nama=$this->input->post('nama');
                $deskripsi=$this->input->post('deskproduk');
 
                $this->admin_model->simpan_product($nama,$deskripsi,$image);
                redirect('home/product');
        }else{
            echo "<script type='text/javascript'>alert('Tambah Gagal.');</script>";
        }
                      
        }else{
            echo "<script type='text/javascript'>alert('Tambah Gagal.');</script>";
        }
                 
    }
     public function inputan_careers()
	{
		$this->load->view('template/navbaradmincareers');
		$this->load->view('admin/admin_careers');
	}
	public function tambah_careers()
	{
		$this->admin_model->tambah_careers();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/careers');
	}
	public function updateCareersview($id)
	{

		$data['judul'] = 'Form update careers';
		$data['careers'] = $this->admin_model->getCareersById($id);
		
		$this->load->view('template/navbaradminubahcareers', $data);
		$this->load->view('admin/admin_updateCareers', $data);

		
		}
		 public function updateCareers($id)
	{
                $position=$this->input->post('posisi');
                $deskripsi=$this->input->post('deskripsi');
                $contact=$this->input->post('contact');
               $update = $this->admin_model->ubahDataCareers($id,$position,$deskripsi,$contact);
 
             if ($update) {
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/careers');
                
        }else{
			echo "<script type='text/javascript'>alert('Update gagal.');</script>";
		}
                      
        
                 
    }

}