<?php 
session_start();
$this->load->view('koneksi');
$emailKreator = $_SESSION['emailId'];

#hapus log login

session_destroy();
?>