<?php
session_start();
$this->load->view('koneksi');
$bersihkanTagHtml = addslashes($isiBerita);
$bersihkanUrl = trim($urlBerita);
$bersihkanImgMeta = trim($imgMeta);
$kEditBerita = mysql_query("UPDATE tbl_nc_berita SET judul='$judulBerita', isi='$bersihkanTagHtml', url='$bersihkanUrl', img_meta='$bersihkanImgMeta', deks_judul='$deksJudul', keyword='$keywordBerita' WHERE id_berita='$idBerita';");
mysql_query($kEditBerita);
?>
