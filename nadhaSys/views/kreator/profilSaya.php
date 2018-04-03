<?php
session_start();
$link = new mysqli('localhost','nadhaalditha','3ncoding4sc11A@','nadhaald_nadha');
if(!ISSET($_SESSION['emailId'])){
header("location:../kreator");
}else{
$email = $_SESSION['emailId'];
}

 $this->load->view('koneksi');
 function base_link(){
echo base_url('parts/kreator/');
}
$tanggal = date("d-m-Y");

 $kCProfil = $link -> query("SELECT * FROM tbl_user_profile WHERE email='$email';");
 $fProfil = $kCProfil -> fetch_array();
 $namaLengkap = $fProfil['nama_lengkap'];
 $idUser = $fProfil['id_user'];
 $bioUser = $fProfil['bio'];
 $alamat = $fProfil['alamat'];
 $twitter = $fProfil['tw'];
 $instagram = $fProfil['ig'];
 //cari followers
 $kCFollowers = $link -> query("SELECT id FROM tbl_followers WHERE id_following='$idUser';");
 $jFollowers = mysqli_num_rows($kCFollowers);
 //tampil kutipan 
 
 //cari grade
 $kGrade = $link -> query("SELECT * FROM tbl_exp_user WHERE id_user='$idUser';");
 $fGrade = $kGrade -> fetch_array();
 //cari limit kutipan
 $kLimitKutipan = $link -> query("SELECT id FROM tbl_kutipan WHERE id_user='$idUser' AND tanggal='$tanggal';");
 $jlhLimit = $kLimitKutipan -> fetch_array();
 
 if($jlhLimit==0){
    $plLimit = "Tulis kutipan hari ini ..";
    $stTextArea = "";
 }else{
    $plLimit = "Kutipan hari ini telah di buat ..";
    $stTextArea = "disabled='disabled'";
 }
 $syh = "/";
?>

<script type="text/javascript">

$(document).ready(function(){
   var loading = "<i class='fa fa-spin fa-refresh'></i>";
   $('#conKarakter').keyup(function() {
		var len = this.value.length;
			if (len >= 200) {
				this.value = this.value.substring(0, 200);
			}
		$('#karakterLeft').text(200 - len);
		});
   
   $("#tblInfoGrade").click(function(){
    
    $('#containerUtama').html( loading + " Memuat info grade ... ");
      $('#containerUtama').load('infoGrade');
      $('#capsBeranda').html("Grade");
   });
   
   $('#tblEditProfil').click(function(){
    $('#conDataProfil').html("<i class='fa fa-spin fa-refresh'></i> Memuat .. ");
    $('#conDataProfil').load('formEditProfil');
    $(this).hide();
    });
   
   $("#tblPostKutipan").click(function(){
    var isiKutipan = $('#conKarakter').val();
        
    if(isiKutipan==""){
        $('#conKarakter').css("border","red 3px solid");
    }else{
        $('#conKarakter').css("border","white 0px solid");
        $('#conReloadKutipan').html("<i class='fa fa-spin fa-refresh'></i> Memuat kutipan ...");
        $('#conTigaKutipan').load('proInputKutipan',{'isiKutipan':isiKutipan});
        $('#conKarakter').val("");
        $('#tblPostKutipan').attr("disabled","disabled");
        $('#conKarakter').attr("disabled","disabled");
        $('#conSisaKarakter').html("Kutipan dikirim, menunggu approve ..");
    }
    });
    
    $('#tblLihatKutipan').click(function(){
			console.log('Tombol lihat kutipan di klik...');
		});
    
});

</script>
              <div class="row">
              
             <div class="col-lg-4">
                  <section class="panel panel-default">
                  
                 <div class="wrapper">
                        <div class="thumb-lg" style="text-align:center;width:100%;">
                          
                            <img src="<?php echo base_url('parts/kreator/img/kreator/'); ?><?=$syh.$idUser; ?>.jpg" class="img-circle" class="thumb-lg" style="width:200px;"/>
                         
                        </div>
                        <div style="text-align:center;">
                        <div class="h3 m-t-xs m-b-xs"><?=$namaLengkap; ?></div>
                            <small class="text-muted"><i class="fa fa-map-marker"></i> <?=$alamat; ?></small></div>
                        <div class="panel wrapper panel-success">
                          <div class="row">
                            <div class="col-xs-4">
                              <a href="#">
                                <span class="m-b-xs h4 block">245</span>
                                <small class="text-muted">Post</small>
                              </a>
                            </div>
                            <div class="col-xs-4">
                              <a href="#">
                                <span class="m-b-xs h4 block"><?=$jFollowers; ?></span>
                                <small class="text-muted">Followers</small>
                              </a>
                            </div>
                            <div class="col-xs-4">
                              <a href="#">
                                <span class="m-b-xs h4 block">2,035</span>
                                <small class="text-muted">Participant</small>
                              </a>
                            </div>
                          </div>
                        </div>
                        
                        <div>
                          <small class="text-uc text-xs text-muted">Email</small>
                          <p><?=$email; ?></p>
                          <small class="text-uc text-xs text-muted">Bio</small>
                          <p><?=$bioUser; ?></p>
                          
                          <small class="text-uc text-xs text-muted">connection</small>
                          <p class="m-t-sm">
                            <i class="fa fa-twitter"></i> <?=$twitter; ?>&nbsp;&nbsp;
                            <i class="fa fa-instagram"></i> <?=$instagram; ?>
                          </p>

<div class="line"></div>
<?php
//pengolahan grade
$gradeUser = $fGrade['grade_code'];
$namaGrade = $fGrade['grade'];
$expStart = $fGrade['exp_start'];
$expUser = $fGrade['exp'];
$expCest = $fGrade['exp_cest'];
$expRest = $expUser - $expStart;
$expNest = $expCest - $expStart;
$expPec = ( $expRest * 100) / $expNest;
$expBar = substr($expPec,0,4);
?>
<div style="text-align:center;"><h4><b>Grade</b></h4>
                          <p class="m-t-sm" style="text-align:center;">
                            <img src="<?php echo base_url('parts/kreator/img/grade/')."/$gradeUser"."_big.png"; ?>" style="width:200px;height:180px;" />
                          </p>
                          <div  class='progress progress-striped  active m-t-sm'>
                          <div class="progress-bar progress-bar-info " style="width:<?=$expBar; ?>%"></div>
                          </div>
                          <b><?=$namaGrade; ?> (S)</b>
                          <br />
                          <b><?=$expUser; ?> / <?=$expCest; ?> (<?=$expBar; ?> %)</b>
                          </div>
                          <br />
                          <div style="text-align:center;">
                          <button class="btn btn-s-md btn-primary" id="tblInfoGrade">Info Grade</button>
                               </div>                   </div>
                      </div>
                  
                  
                  </section>
                  </div>
                  
                  <div class="col-lg-4">
                  <section class="panel panel-default">
                  <div class="wrapper">
                        <h4>Profil Lengkap</h4>
                        <div id="conDataProfil">
                       <?php
													//$link = new mysqli('localhost','nadhaalditha','3ncoding4sc11A@','nadhaald_nadha');

 //cari nama lengkap dari email
 $kCProfil = $link -> query("SELECT * FROM tbl_user_profile WHERE email='$email';");
 $fProfil = $kCProfil -> fetch_array();
 $namaLengkap = $fProfil['nama_lengkap'];
 $idUser = $fProfil['id_user'];
 $bioUser = $fProfil['bio'];
 $alamat = $fProfil['alamat'];
 $twitter = $fProfil['tw'];
 $instagram = $fProfil['ig'];
 $tgl_lhr = $fProfil['tanggal_lahir'];
 $bln_lhr = $fProfil['bulan_lahir_h'];
 $thn_lhr = $fProfil['tahun_lahir'];
 $tanggal_lahir = $tgl_lhr." ".$bln_lhr." ".$thn_lhr;
 $jk = $fProfil['jk'];
 $instansi = $fProfil['instansi'];
 $hp = $fProfil['no_hp'];
 //cari tanggal registrasi
 $kTglRegis = $link -> query("SELECT tanggal FROM tbl_registrasi WHERE email='$email';");
 $fTglRegis = $kTglRegis -> fetch_array();
 $tglRegis = $fTglRegis['tanggal'];
                        //$this->load->view('kreator/dataProfil');
                        ?>
													
													 Nama Lengkap : <br />
                        <b><?=$namaLengkap; ?></b></p>
                        <p>
                        Tanggal Lahir : <br />
                        <b><?=$tanggal_lahir; ?></b></p>
                        <p>
                        Jenis Kelamin : <br />
                        <b><?=$jk; ?></b></p>
                        <p>
                        Alamat : <br />
                        <b><?=$alamat; ?></b></p>
                        <p>
                        Instansi : <br />
                        <b><?=$instansi; ?></b></p>
                        <p>
                        Tanggal Bergabung : <br />
                        <b><?=$tglRegis; ?></b></p>
                        <hr />
                        <h5>Info Kontak</h5>
                        <p>
                        Email : <b><?=$email; ?></b><br />
                        <b></b></p>
                        <p>
                        Handphone : <b><?=$hp; ?></b><br />
                        <b></b>
                        </div>
                        <div style="text-align:center;">
                        <input type="button" class="btn btn-s-md btn-primary" id="tblEditProfil" value="Edit"/>
                      </div>

                      </div>
                      
                  </section>
                  </div>
                  
                                    <div class="col-lg-4">
                  <section class="panel panel-default">
                  <div class="wrapper">
                        <section class="panel panel-default">
                          <form>
                            <textarea class="form-control no-border" rows="3" placeholder="<?=$plLimit; ?>" style="resize:none;" id="conKarakter" <?=$stTextArea; ?> ></textarea>
                          </form>
                          <footer class="panel-footer bg-light lter">
                            <button class="btn btn-info pull-right btn-sm" id="tblPostKutipan" <?=$stTextArea; ?>>Post</button>
                            <ul class="nav nav-pills nav-sm" id="conSisaKarakter">
                             Sisa karakter : <span id="karakterLeft">200</span>
                            </ul>
                          </footer>
                        </section>
                        <section class="panel panel-default">
                          <h4 class="font-thin padder">Kutipan</h4>
                          <div id="conTigaKutipan">
                          <div id="conReloadKutipan" style="text-align:center;"></div>
                          <ul class="list-group">
                         
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
                                <small class=\"block text-muted\"><i class=\"fa fa-clock-o\"></i> $tanggal &nbsp; <i class=' fa fa-smile-o'> $jSmile</i></small> 
                            </li>";
                          }
                          
                          ?>

                            
                          </ul>
                          </div>
                          <div style="text-align:center;margin-top: 12px;margin-bottom:12px;" ><button class="btn btn-s-md btn-primary" id="tblLihatKutipan">Lihat Kutipan</button></div>
                        </section>
                        
                      </div>
                  </section>
                  </div>
                  
                  
                  </div>