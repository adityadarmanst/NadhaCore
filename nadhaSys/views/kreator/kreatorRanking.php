<?php
session_start();
 $this->load->view('koneksi');
 function base_link(){
echo base_url('parts/kreator/');
}
$tanggal = date("d-m-Y");
 $email = $_SESSION['emailId'];
 //cari berdasarkan ranking
 $kRank = mysql_query("SELECT * FROM tbl_exp_user ORDER BY exp DESC LIMIT 0,10;");
 $linkFoto = base_url('parts/kreator/img/kreator/');
 $linkGrade = base_url('parts/kreator/img/grade/');
?>

<script>
$(document).ready(function(){
   
   $('#tblLihatSemua').click(function(){
    $('#containerUtama').html("<i class='fa fa-spin fa-refresh'></i> Memuat halaman kreator ... ");
    $('#containerUtama').load('LihatSemuaKreator');
   });
    
});

</script>
              <div class="row">
              <div class="col-lg-11">
              <section class="panel panel-default">
             <header class="panel-heading">Top 10 rank kreator NadhaCreative</header>
             <table class="table table-striped b-t b-light">
             <tr>
             <th width='4px'>No</th>
             <th width='30%'>Kreator</th>
             <th>Grade</th>
             <th>Stats</th>
             <th>Special Mark</th>
             <th>Opsi</th>
             </tr>
             
             <?php
             $no=1;
             while($dR=mysql_fetch_array($kRank)){
                $idUserKreator = $dR['id_user'];
                $expUser = $dR['exp'];
                $expJadi = number_format($expUser);
                $grade = $dR['grade'];
                $gradeCode = $dR['grade_code']."_big";
                //cari nama lengka dan id lain
                $qDataKreator = mysql_query("SELECT nama_lengkap,email FROM tbl_user_profile WHERE id_user='$idUserKreator';");
                $fDataKreator = mysql_fetch_array($qDataKreator);
                $namaKreator = $fDataKreator['nama_lengkap'];
                
                echo "<tr>
             <td>$no</td>
             <td><table>
             <tr><td><img src='$linkFoto/$idUserKreator.jpg' style='width:60px;border-radius:9px;'></td><td>$namaKreator<br/>Exp : $expJadi</td>
             </table>
             </td>
             <td><img src='$linkGrade/$gradeCode.png' style='width:60px;border-radius:9px;'></td>
             <td><i class='fa fa-comments'></i>
             <br/><i class='fa fa-eye'></i>
             <br/><i class='fa fa-smile-o'></i>
             <br/>
             </td>
             <td>-</td>
             <td><a href='#'>Lihat Profil</a>
             <br/><a href='#'>Ikuti</a>
             <br/><a href='#'>Lihat Postingan</a> 
             </td>
             </tr>";
             $no++;
             }
             
             ?>
             
             
             </table>
                <button class="btn btn-s-md btn-info" id="tblLihatSemua" style="margin: 12px;">Lihat Semuanya</button>
             </section>          
             </div>
             
            </div>