<?php
session_start();
$this->load->view('koneksi');
function base_link(){
echo base_url('parts/kreator/');
}
$alamatIp = $_SERVER['REMOTE_ADDR'];
$tanggal = date('Y/m/d');
//periksa jumlah email terdaftar
$kPeriksaEmail = mysql_query("SELECT id FROM tbl_registrasi WHERE email='$email';");
$jumlahEmail = mysql_num_rows($kPeriksaEmail);
$kPeriksaHp = mysql_query("SELECT id FROM tbl_registrasi WHERE no_hp='$hp';");
$jumlahHp = mysql_num_rows($kPeriksaHp);

if($jumlahEmail=="1" or $jumlahHp=="1"){
    //pembuatan kode untuk registrasi
    $alamatWeb = site_url('/kreator/register');
    $pesan = "Maaf, sistem kami mendeteksi email/nomor handphone yang kamu masukkan telah digunakan sebelumnya. Silahkan masukkan email/nomor handphone yang lain. Reload halaman <a href='$alamatWeb'>Disini</a>";
}else{
    $bahanAngka = "1234567898718263912391937131631672361230867";
    $acak1 = str_shuffle($bahanAngka);
    $acak2 = str_shuffle($bahanAngka);
    $acak3 = str_shuffle($bahanAngka);
    $acak4 = str_shuffle($bahanAngka);
    $cl1 = substr($acak1,4,4);
    $cl2 = substr($acak2,6,4);
    $cl3 = substr($acak3,2,4);
    $cl4 = substr($acak4,8,4);
    $kode = $cl1."-".$cl2."-".$cl3."-".$cl4;
    $subjek = "Informasi Registrasi NadhaCreative";
    $headerEm = "From: verifikator@nadhacreative.com\r\nContent-Type: text/html; charset=UTF-8\r\n";
    $kSisip = mysql_query("INSERT INTO tbl_registrasi_awal VALUES('','$email','$hp','$alamatIp','$tanggal','$kode');");
    $pesanEmail = "Kamu telah melakukan pendaftaran awal di NadhaCreative, ikuti tautan berikut untuk melanjutkan proses pendaftaran. Klik <a href='http://goo.gl/forms/xzXBUb2n2H'>Form Pendaftaran</a> berikut. <br/> Kode pendaftaran kamu : <b>$kode</b>";
    mysql_query($kSisip);
    $pesan = "Selamat, pendaftaran berhasil dilakukan. Periksa email kamu untuk mendapatkan link pendaftaran selanjutnya.";
    mail($email,$subjek,$pesanEmail,$headerEm);
}

?>
<script src="<?php echo base_link(); ?>/acc/js/jquery.min.js"></script>
<script>
$(document).ready(function(){
   $('#capHeader').text("Status Registrasi");
   $('#frmRegistrasi').hide();
    
});
</script>
<div style="padding: 8px;" id="divBerhasil">
<?=$pesan; ?>
</div>

