<?php
session_start();
$link = new mysqli('localhost','nadhaalditha','3ncoding4sc11A@','nadhaald_nadha');
//cari jumlah kreator
$kJumlahKreator = $link -> query("SELECT id FROM tbl_user_profile;");
$jumlahKreator = mysqli_num_rows($kJumlahKreator);
//cari jumlah sesi login
$kJumlahSesiLogin = $link -> query("SELECT id FROM tbl_log_login;");
$jumlahSesiLogin = mysqli_num_rows($kJumlahSesiLogin);
//cari jumlah visitor
$kJumlahVisitor = $link -> query("SELECT id FROM tbl_visitor;");
$jumlahVisitor = mysqli_num_rows($kJumlahVisitor);
?>

<p>
Jumlah kreator aktif : <?=$jumlahKreator; ?><br />

Jumlah sesi login : <?=$jumlahSesiLogin; ?><br/>
Jumlah Visitor Halaman : <?=$jumlahVisitor; ?>
</p>
