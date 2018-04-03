<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends CI_Controller {

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
     
     /* fungsi controller untuk memanggil halaman depan */
	public function index()
	{
		$this->load->view('homepage/depan');
	}
	
	public function contact()
	{
		$this->load->view('homepage/contact');
	}
	
	public function how()
	{
		echo "Sistem Sibuk!";
	}
	
	public function sendLinkDaftar()
	{
		$data['emailReq'] = $this->input->post('emailReq');
	$this->load->view('homepage/sendLinkDaftar',$data);	
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */