<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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


	public function index()
	{
		$data = array();
		$data['title'] = 'Selamat datang';
		$this->load->view('login/login',$data);
	}

	public function login() {
		$this->db->where('username',$this->input->post('username')); // -- mengambil inputan user berdasarkan 'username'
		$this->db->where('password',$this->input->post('password'));// --mengambil inputan user berdasarkan 'password'
		$u = $this->db->get('admin');// -- mengambil data table 'admin' dan menyimpan dalam 1 variabel

		if ($u->num_rows() == 1) { // -- membuat kondisi apabila num_rows ada atau tidak (1 / 0)
		$this->session->set_userdata('user','user');//--membuat userdata apabila sudah login
		redirect('admin');// -- redirect ke Controller admin


		} else { 
			$this->session->set_flashdata('info', 'username atau password salah');// -- buat flashdata dengan nama 'info' apabila username atau password salah 
			redirect('welcome');//-- redirect ke Controller Welcome
		}
	}

	public function logout() {
		$this->session->sess_destroy();//-- hancurkan session dengan sess destroy
		redirect('welcome');//-- redirect ke Controller Welcome
	}


}
