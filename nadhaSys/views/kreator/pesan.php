<?php
session_start();
$this->load->view('koneksi');
$email = $_SESSION['emailId'];
$linkFoto = base_url('parts/kreator/img/kreator/');
//cari id user lewat email
$kCariId = mysql_query("SELECT id_user FROM tbl_user WHERE email='$email';");
$fcariId = mysql_fetch_array($kCariId);
$idUser = $fcariId['id_user'];
//cari kueri list email
$kEmail = mysql_query("SELECT * FROM tbl_pesan WHERE kepada='$idUser' ORDER BY id DESC LIMIT 0,10;");
?>

<script>
$(document).ready(function(){
   var loading = "<i class='fa fa-spin fa-refresh'></i>";
   
   $('.tblBaca').click(function(){
    var idPesan = $(this).attr("id");
    $('#containerUtama').html( loading + " Memuat pesan ... ");
    $('#containerUtama').load('bacaPesan',{idPesan:idPesan});
   });
    
});
</script>

<section class="panel panel-success portlet-item">
                <header class="panel-heading">
                  Kotak Pesan
                </header>
                <ul class="list-group alt">
                
                <?php
                while($dPesan=mysql_fetch_array($kEmail)){
                    $dari = $dPesan['dari'];
                    $idPesan = $dPesan['id_pesan'];
                    $tanggal = $dPesan['tanggal'];
                    $judul = $dPesan['judul'];
                    $isi = $dPesan['isi'];
                    $baca = $dPesan['baca'];
                    $pesanSingkat = substr($isi,0,30);
                    
                    if($baca=='y'){
                        $sTombol = "info";
                    }else{
                        $sTombol = "success";
                    }
                    
                    echo "  <li class='list-group-item'>
                    <div class='media'>
                      <span class='pull-left thumb-sm'><img src='$linkFoto/admin_img.jpg' alt='John said' class='img-circle'/></span>
                      <div class='pull-right text-$sTombol m-t-sm'>
                        <i class='fa fa-circle'></i>
                      </div>
                      <div class='media-body'>
                        <div><a href='#' id='$idPesan' class='tblBaca'>$dari</a></div>
                        <small class='text-muted'>$pesanSingkat .. ($tanggal)</small>
                      </div>
                    </div>
                  </li>
                  ";
                }
                
                ?>
                
                
                  
                </ul>
              </section>