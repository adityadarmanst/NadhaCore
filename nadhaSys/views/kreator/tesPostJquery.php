<?php
session_start();
$this->load->view('koneksi');
$kTes = mysql_query("INSERT INTO tbl_tes VALUES('','$idp');");
mysql_query($kTes);
?>