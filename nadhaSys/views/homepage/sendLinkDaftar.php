<?php
session_start();
$link = new mysqli('localhost','nadhaalditha','3ncoding4sc11A@','nadhaald_nadha');

//tes kueri sisip
$kSisipReq = $link -> query("INSERT INTO tbl_request_link_daftar VALUES('','122551223123','$emailReq','y');");

?>