<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ngaturLaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('input');
        $this->load->helper('form');
        $this->load->library('upload');
        $this->load->helper('email');
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
        $this->load->view('ngaturLaman/login');
    }
    
    public function prosesLogin()
    {
        $data['username'] = $this->input->post('txtUsername');
        $data['password'] = $this->input->post('txtPassword');

        $this->load->view('ngaturLaman/cekLogin',$data);
    }
    
    public function das()
    {
        $this->load->view('ngaturLaman/das');
    }
    
    public function berandaUtama()
    {
        $this->load->view('ngaturLaman/berandaUtama');
    }
    public function userProfile()
    {
        $this->load->view('ngaturLaman/userProfile');
    }
    
    public function ncDataPostingan()
    {
        $this->load->view('ngaturLaman/ncDataPostingan');
    }
    
    public function editBerita($idBerita)
    {
       $data['idBerita'] = $idBerita;
       $this->load->view('ngaturLaman/frmEditBerita',$data);
    }
    
    public function proEditBerita()
    {
        $data['idBerita'] = $this->input->post('idBerita');
        $data['judulBerita'] = $this->input->post('judulBerita');
        $data['deksJudul'] = $this->input->post('deksJudul');
        $data['imgMeta'] = $this->input->post('imgMeta');
        $data['urlBerita'] = $this->input->post('urlBerita');
        $data['isiBerita'] = $this->input->post('isiBerita');
        $data['keywordBerita'] = $this->input->post('keywordBerita');
        $this->load->view('ngaturLaman/proEditBerita',$data);
        redirect(site_url('ngaturLaman/ncDataPostingan'));
    }
    public function logOut()
    {
        $this->load->view('ngaturLaman/logOut');
        redirect(site_url('ngaturLaman'));
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
