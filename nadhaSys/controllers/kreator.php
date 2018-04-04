0<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class kreator extends CI_Controller
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
    
  
    public function index()
    {
        $this->load->view('kreator/login');
    }
    
    public funtion getDataTable()
    {
        $this->load->view('kreator/login');
    }
    
    public function register()
    {
        $this->load->view('kreator/register');
    }
    
    public function cekRegistrasiAwal()
    {
        $data['email'] = $this->input->post('email');
        $data['hp'] = $this->input->post('hp');
        
        if(valid_email($data['email'])){
            //masuk ke pemeriksaan email dan password
            $this->load->view('kreator/cekRegistrasiAwal',$data);
        }else{
            echo "<span style='color:red;'>Format email salah, silahkan masukkan kembali !!!</span><hr>";
        }
        
    }
    
    public function cekLogin()
    {
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
        
        if(valid_email($data['email'])){
            //masuk ke pemeriksaan email dan password
            $this->load->view('kreator/cekLogin',$data);
        }else{
            echo "<span style='color:red;'>Format email salah !!!</span><hr>";
        }
    }
    
    public function forgotPassword()
    {
        $this->load->view('kreator/forgotPassword');
    }
    
    public function redirectLogin()
    {
     $data['email'] = $this->input->post('email');
     $data['kataSandi'] = $this->input->post('kataSandi');
     $this->load->view('kreator/periksaLogin',$data);
    }
    
    public function ant()
    {
        $data['idAunt'] = $this->input->post('txtKode');
        $this->load->view('kreator/periksaAuntentifikasi',$data);
    }
    
    public function dasbor()
    {
        $this->load->view('kreator/dasbor');
    }
    
    public function kabarKreator()
    {
        $this->load->view('kreator/kabarKreator');
    }
    public function kreatorList()
    {
        $this->load->view('kreator/kreatorList');
    }
    
    public function kreatorRanking()
    {
        $this->load->view('kreator/kreatorRanking');
    }
    
    public function beranda()
    {
        $this->load->view('kreator/beranda');
    }
    
    public function berandaDasar()
    {
        $this->load->view('kreator/berandaDasar');
    }
    
    public function profilSaya()
    {
        $this->load->view('kreator/profilSaya');
    }
    
    public function pesan()
    {
        $this->load->view('kreator/pesan');
    }
    
    public function bacaPesan()
    {
        $data['idPesan'] = $this->input->post('idPesan');
        $this->load->view('kreator/bacaPesan',$data);
    }
    
    public function dataProfil()
    {
        $data['emailSesi'] = $this->input->post('email');
         $this->load->view('kreator/dataProfil',$data);
    }
    
    public function formEditProfil()
    {
        $this->load->view('kreator/formEditProfil');
    }
    
    public function proEditProfil()
    {
        $data['email'] = $this->input->post('email');
        $data['namaLengkap'] = $this->input->post('namaLengkap');
        $data['tanggalLahir'] = $this->input->post('tanggalLahir');
        $data['jk'] = $this->input->post('jk');
        $data['alamat'] = $this->input->post('alamat');
        $data['instansi'] = $this->input->post('instansi');
        $data['hp'] = $this->input->post('hp');
        $data['blog'] = $this->input->post('blog');
        $this->load->view('kreator/proEditProfil',$data);
        //$this->load->view('kreator/tesPostJquery',$data);
    }
    
    public function tigaKutipan()
    {
        $this->load->view('kreator/tigaKutipan');
    }
    
    public function proInputKutipan()
    {
        $data['isiKutipan'] = $this->input->post('isiKutipan');
        $this->load->view('kreator/proInputKutipan',$data);
        
    }
    
    public function infoGrade()
    {
        $this->load->view('kreator/infoGrade');
    }
    
    public function lihatSemuaKreator()
    {
        $data['namaAdmin'] = "Aditya Darma Nasution";
        $this->load->view('kreator/lihatSemuaKreator',$data);
    }
    
    public function creativeChannel()
    {
        $this->load->view('kreator/creativeChannel');
    }
    
    public function contentManager()
    {
        $this->load->view('kreator/contentManager');
    }
  
    public function publicChat()
    {
       $this->load->view('kreator/publicChat');
    }
    
    public function prosesPublicChat()
    {
        $this->load->view('kreator/prosesPublicChat');
    }
    
    public function panduanPublicChat()
    {
        $this->load->view('kreator/panduanPublicChat');
    }
    
    public function faq()
    {
        $this->load->view('kreator/faq');
    }
    
    public function kirimPertanyaan()
    {
        $this->load->view('kreator/kirimPertanyaan');
    }
    
    public function logout()
    {
        $this->load->view('kreator/logout');
        redirect(site_url('kreator'));
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
