<?php

$link = new mysqli('localhost','nadhaalditha','3ncoding4sc11A@','nadhaald_nadha');
$ambilFast = $link -> query("SELECT isi FROM tbl_fastline;");

while($fFast = $ambilFast -> fetch_array()){
    
    $fastline = $fFast['isi'];
    echo "<i class='fa fa-square'></i> ".$fastline.".&nbsp; &nbsp; ";
}
?>