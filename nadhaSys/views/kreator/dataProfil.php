<?php
$email = $_SESSION['emailId'];
$link = new mysqli('localhost','nadhaalditha','3ncoding4sc11A@','nadhaald_nadha');

 //cari nama lengkap dari email
 $kCProfil = $link -> query("SELECT * FROM tbl_user_profile WHERE email='$email';");
 $fProfil = $kCProfil -> fetch_array();
 $namaLengkap = $fProfil['nama_lengkap'];
 $idUser = $fProfil['id_user'];
 $bioUser = $fProfil['bio'];
 $alamat = $fProfil['alamat'];
 $twitter = $fProfil['tw'];
 $instagram = $fProfil['ig'];
 $tgl_lhr = $fProfil['tanggal_lahir'];
 $bln_lhr = $fProfil['bulan_lahir_h'];
 $thn_lhr = $fProfil['tahun_lahir'];
 $tanggal_lahir = $tgl_lhr." ".$bln_lhr." ".$thn_lhr;
 $jk = $fProfil['jk'];
 $instansi = $fProfil['instansi'];
 $hp = $fProfil['no_hp'];
 //cari tanggal registrasi
 $kTglRegis = $link -> query("SELECT tanggal FROM tbl_registrasi WHERE email='$email';");
 $fTglRegis = $kTglRegis -> fetch_array();
 $tglRegis = $fTglRegis['tanggal'];
?>
<div class="row">
  Nama Lengkap : <br />
                        <b><?=$namaLengkap; ?></b></p>
                        <p>
                        Tanggal Lahir : <br />
                        <b><?=$tanggal_lahir; ?></b></p>
                        <p>
                        Jenis Kelamin : <br />
                        <b><?=$jk; ?></b></p>
                        <p>
                        Alamat : <br />
                        <b><?=$alamat; ?></b></p>
                        <p>
                        Instansi : <br />
                        <b><?=$instansi; ?></b></p>
                        <p>
                        Tanggal Bergabung : <br />
                        <b><?=$tglRegis; ?></b></p>
                        <hr />
                        <h5>Info Kontak</h5>
                        <p>
                        Email : <b><?=$email; ?></b><br />
                        <b></b></p>
                        <p>
                        Handphone : <b><?=$hp; ?></b><br />
                        <b></b>
</div>

                        
                        