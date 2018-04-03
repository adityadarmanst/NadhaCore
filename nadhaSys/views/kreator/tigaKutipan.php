<?php
$link = new mysqli('localhost','nadhaalditha','3ncoding4sc11A@','nadhaald_nadha');
$email = $_SESSION['emailId'];
$kTampilKutipan = $link -> query("SELECT * FROM tbl_kutipan WHERE email='$email' AND approve='y' ORDER BY id DESC LIMIT 0,3;");
while($dk = $kTampilKutipan -> fetch_array()){
                            $isi = $dk['isi'];
                            $tanggal = $dk['tanggal'];
                            $idKutipan = $dk['id_kutipan'];
                            //cari jumlah smile
                            $kJSmile = $link -> query("SELECT id FROM tbl_smile WHERE id_kutipan='$idKutipan';");
                            $jSmile = mysqli_num_rows($kJSmile);
                            
                            echo "                            <li class=\"list-group-item\">
                                <p>$isi</p>
                                <small class=\"block text-muted\"><i class=\"fa fa-clock-o\"></i> $tanggal &nbsp; <i class='fa fa-smile-o'> $jSmile</i></small> 
                            </li>";
                          }
                          
?>