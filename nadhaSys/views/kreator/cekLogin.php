<?php
session_start();

function base_link(){
echo base_url('parts/kreator/');
}

$link = new mysqli('localhost','nadhaalditha','3ncoding4sc11A@','nadhaald_nadha');

$pass = md5($password);
//buat sesi id
$bahanSesi = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
$acakSesi = str_shuffle($bahanSesi);
$sesiId = substr($acakSesi,0,20);
//periksa login 
$kPeriksaUser = $link -> query("SELECT id,f_login FROM tbl_user WHERE email='$email' AND kata_sandi='$pass';");
$jumlahUser = mysqli_num_rows($kPeriksaUser);

if($jumlahUser==0){
    echo "<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert'>�</button>
                    <i class='fa fa-ok-sign'></i><strong>Maaf!</strong> Email/password yang kamu masukkan salah!.
                  </div>";
}else{
    //cari info user yang melakukan login pertama kali setelah pendaftaran
    $fLogin = $kPeriksaUser -> fetch_array();
    $fLoginUser = $fLogin['f_login'];
    
    if($fLoginUser=="y"){
        $_SESSION['emailId'] = $email;
        $_SESSION['fLogin'] = "y";
        echo "<html><head><script type='text/javascript'>window.location='kreator/fLogin.cgi';</script></head></html>";
    }else{
        $_SESSION['emailId'] = $email;
        $_SESSION['fLogin'] = "n";
        echo "<html><head><script type='text/javascript'>window.location='kreator/beranda.cgi?sessionId=$sesiId';</script></head></html>";
}

}

?>