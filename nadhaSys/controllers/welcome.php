<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function __construct()
{
parent::__construct();
$this->load->helper('url');
$this->load->library('input');
$this->load->helper('form');

}
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home-page');
	}

	public function depan(){
		$this->load->view('depan');
	}

	public function halaman_1(){
		$this->load->view('hal-1');
	}
	
	public function halaman_2($nama){
		$data['nama']= $nama;
		$this->load->view('hal-2',$data);
	}

	public function form_1(){
		$this->load->view('form_1');
	}

	public function pro_form1(){
		$kata = $this->input->post('txt_1');
		$data['kata'] = $kata;
		$this->load->view('hasil_form_1',$data);
	}

	public function form_2(){
		$this->load->view('form_2');
	}

	public function pro_database(){
		$username = $this->input->post('txt_username');
		$password = $this->input->post('txt_password');
		$data['username'] = $username;
		$data['password'] = $password;
		$this->load->view('pro_database',$data);
	}

	public function hapus($id){
		$data['id'] = $id;
		$this->load->view('frm_hapus',$data);
	}

	public function edit($id){
		$data['id'] = $id;
		$this->load->view('update',$data);
	}

	public function pro_edit(){
		$data['id_u'] = $this->input->post('txt_id');
		$data['username'] = $this->input->post('txt_username');
		$data['password'] = $this->input->post('txt_password');
		$this->load->view('pro_edit',$data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */