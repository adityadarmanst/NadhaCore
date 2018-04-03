<?php
session_start();
$email = $_SESSION['emailId'];
$link = new mysqli('localhost','nadhaalditha','3ncoding4sc11A@','nadhaald_nadha');
//cari id user lewat email 
$kIdUser = $link -> query("SELECT id_user FROM tbl_user WHERE email='$email';");
$fIdUser = $kIdUser -> fetch_array();
$idUser = $fIdUser['id_user'];
$tanggal = date("d-m-Y");
$waktu = date("H:m:s");
//perintah untuk menyaring teks
$teksBatas = substr($isiKutipan,0,200);
$clearKutipSatu = str_replace("'","",$teksBatas);
$clearKutipDua = str_replace('"','',$clearKutipSatu);
$htmlClear = htmlentities($clearKutipDua);
//pembuatan id kutipan
$idBahanAcak = "qwertyuiopasdfghjklzxcvbnm1234567890QWERTYUIOPASDFGHJKLZXCVBNM";
$idBahanAcak2 = str_shuffle($idBahanAcak);
$idKutipan = substr($idBahanAcak2,2,20);
//perintah kirim ke database
$kSimpan = $link -> query("INSERT INTO tbl_kutipan VALUES('','$idKutipan','$email','$idUser','$htmlClear','$tanggal','$waktu','p');");

?>



<div id="conTigaKutipan">



                          <div id="conReloadKutipan" style="text-align:center;"></div>
                          
                          <ul class="list-group">
                          
                          <?php
                          $this->load->view('kreator/tigaKutipan');
                          ?>

                            
                          </ul>
                          </div>