<?php
session_start();
 $this->load->view('koneksi');
 function base_link(){
echo base_url('parts/kreator/');
}
$tanggal = date("d-m-Y");
 $email = $_SESSION['emailId'];
 //cari berdasarkan ranking
 $kRank = mysql_query("SELECT * FROM tbl_exp_user ORDER BY exp DESC LIMIT 0,100;");
 $linkFoto = base_url('parts/kreator/img/kreator/');
 $linkGrade = base_url('parts/kreator/img/grade/');
?>

<script>
$(document).ready(function(){
   
   $('#tblLihatSemua').click(function(){
   
   });
   
   $('.tblNama').click(function(){
    var nama = $(this).attr("id");
    alert(nama);
   });
    
});

</script>
              <div class="row">
              <div class="col-lg-11">
              <section class="panel panel-default">
             <header class="panel-heading">List Kreator NadhaCreative (Diurutkan berdasarkan ranking) <i>Klik nama kreator untuk melihat info kreator</i></header>
             
             <table class="table table-striped b-t b-light">
             
             <tr>
             <th style="width: 10px;">No</th><th style="width: 400px;">Kreator</th><th>Grade</th><th>Quotes / Participant / Rank</th><th>Creative Center Post</th><th>Opsi</th>
             </tr>
             <?php
             $no=1;
             while($dr=mysql_fetch_array($kRank)){
                $idUserKreator = $dr['id_user'];
                //cari nama kreator dengan id
                $kProfilKreator = mysql_query("SELECT * FROM tbl_user_profile WHERE id_user='$idUserKreator';");
                $fProfilKreator = mysql_fetch_array($kProfilKreator);
                $namaLengkapK = $fProfilKreator['nama_lengkap'];
                $grade = $dr['grade'];
                //cari data participant
                //cari jumlah kutipan 
                $kCariJumlahKutipan = mysql_query("SELECT id FROM tbl_kutipan WHERE id_user='$idUserKreator';");
                $jlhKutipan = mysql_num_rows($kCariJumlahKutipan);
                //cari jumlah postingan
                $kcariJumlahPostingan = mysql_query("SELECT id FROM tbl_kreativitas WHERE id_user='$idUserKreator';");
                $jlhPostingan = mysql_num_rows($kcariJumlahPostingan);
                echo "<tr>
             <td>$no</td><td><a href='#' class='tblNama' id='$namaLengkapK'>$namaLengkapK</a></td><td>$grade</td><td><i class='fa fa-comment'></i>&nbsp;$jlhKutipan </td><td>$jlhPostingan</td><td><i class='fa fa-comments-o'></i></td>
             </tr>";
             $no++;
             }
             ?>
             </table>
             
             <div style="text-align:center;">
             <button class="btn btn-s-md btn-info" id="tblLihatSemua">Selanjutnya</button>
             </div>
             </section>
             
             </div>

             </div>
