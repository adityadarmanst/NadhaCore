<?php
session_start();
$link = new mysqli('localhost','nadhaalditha','3ncoding4sc11A@','nadhaald_nadha');
$sGab = $email.$namaLengkap.$tanggalLahir.$alamat.$jk.$instansi.$hp.$blog;
$tglPecah = explode('-',$tanggalLahir);
$thn = $tglPecah['0'];
$bln = $tglPecah['1'];
$tgl = $tglPecah['2'];

if($bln=="01"){
    $blnH = "Januari";
}elseif($bln=="02"){
    $blnH = "Februari";
}elseif($bln=="03"){
    $blnH = "Maret";    
}elseif($bln=="04"){
    $blnH = "April";    
}elseif($bln=="05"){
    $blnH = "Mei";    
}elseif($bln=="06"){
    $blnH = "Juni";    
}elseif($bln=="07"){
    $blnH = "Juli";    
}elseif($bln=="08"){
    $blnH = "Agustus";    
}elseif($bln=="09"){
    $blnH = "September";    
}elseif($bln=="10"){
    $blnH = "Oktober";    
}elseif($bln=="11"){
    $blnH = "November";    
}elseif($bln=="12"){
    $blnH = "Desember";    
}

$kSimpanProfil = $link -> query("UPDATE tbl_user_profile SET nama_lengkap='$namaLengkap',tanggal_lahir='$tgl',bulan_lahir='$bln',bulan_lahir_h='$blnH',tahun_lahir='$thn',jk='$jk',alamat='$alamat',no_hp='$hp',instansi='$instansi',blog='$blog' WHERE email='$email';");

//$kSisip = mysql_query("INSERT INTO tbl_tes VALUES('122','$blnH');");
//mysql_query($kSisip);

?>