 <?php
 session_start();
 $link = new mysqli('localhost','nadhaalditha','3ncoding4sc11A@','nadhaald_nadha');
 $email = $_SESSION['emailId'];
 $picIdPenulis = base_url('parts/kreator/img/kreator/');
 //cari nama lengkap dari email
 $kCProfil = $link -> query("SELECT * FROM tbl_user_profile WHERE email='$email';");
 $fProfil = $kCProfil -> fetch_array();
 $namaLengkap = $fProfil['nama_lengkap'];
 $idUser = $fProfil['id_user'];
 $bioUser = $fProfil['bio'];
 //cari jumlah kutipan
 $kCariKutipan = $link -> query("SELECT id FROM tbl_kutipan WHERE email='$email';");
 $jKutipan = $kCariKutipan -> num_rows;
 //cari jumlah followers
  $kCFollowers = $link -> query("SELECT id FROM tbl_followers WHERE id_following='$idUser';");
  $jFollowers = $kCFollowers  -> num_rows;
 //cari jumlah participant
 $kCParti = $link -> query("SELECT id FROM tbl_participant WHERE id_kreator='$idUser';");
 $jParti = $kCParti -> num_rows;
 //kueri ambil user baru daftar
 $kUserRecent = $link -> query("SELECT id_user,nama_lengkap,email,bio FROM tbl_user_profile ORDER BY id DESC limit 0,4;");
 //cari kutipan
 $kKutipan = $link -> query("SELECT id_user,isi FROM tbl_kutipan WHERE approve='y' ORDER BY id DESC limit 0,3;"); 
$sKr = "/";
 ?>
 <script>
 $(document).ready(function(){
    $('#tblLihatKutipan').click(function(){
       $('#capsBeranda').html("Kutipan"); 
    });
 });
 </script>

<?php 
//cari jumlah tulisan
$kJumlahTulisan = $link -> query("SELECT id FROM tbl_nc_berita;");
$jumlahTulisan = $kJumlahTulisan -> num_rows;
//cari jumlah bintang
$kJumlahBintang = $link -> query("SELECT id FROM tbl_bintang;");
$jumlahBintang = $kJumlahBintang -> num_rows;
?>
 <section class="panel panel-default">
                <div class="row m-l-none m-r-none bg-light lter">
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-info"></i>
                      <i class="fa fa-male fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear" href="#">
                      <span class="h3 block m-t-xs"><strong><?=$jumlahTulisan; ?></strong></span>
                      <small class="text-muted text-uc">Tulisan</small>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-warning"></i>
                      <i class="fa fa-star fa-stack-1x text-white"></i>
                      
                    </span>
                    <a class="clear" href="#">
                      <span class="h3 block m-t-xs"><strong id="bugs"><?=$jumlahBintang; ?></strong></span>
                      <small class="text-muted text-uc">Bintang</small>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light">                     
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-danger"></i>
                      <i class="fa fa-smile-o fa-stack-1x text-white"></i>
                      
                    </span>
                    <a class="clear" href="#">
                      <span class="h3 block m-t-xs"><strong id="firers">359</strong></span>
                      <small class="text-muted text-uc">Respect Point</small>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x icon-muted"></i>
                      <i class="fa fa-clock-o fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear" href="#">
                      <span class="h3 block m-t-xs"><strong>67 %</strong></span>
                      <small class="text-muted text-uc">Participant</small>
                    </a>
                  </div>
                </div>
              </section>
              
              <div class="row">
              
             <div class="col-lg-4">
                  <section class="panel panel-default">
                  <header class="panel-heading">
                  Profile
                </header>
                    <div class="panel-body">
                      <div class="clearfix text-center m-t">
                        <div class="inline">
                          <div class="easypiechart easyPieChart" data-percent="75" data-line-width="5" data-scale-color="false" data-size="130" data-line-cap="butt" style="height: 130px; line-height: 130px;">
                            <div class="thumb-lg">
                              <img src="<?php echo base_url('parts/kreator/img/kreator/'); ?><?=$sKr.$idUser; ?>.jpg" class="img-circle"/>
                            </div>
                          <canvas width="130" height="130"></canvas></div>
                          <div class="h4 m-t m-b-xs"><?=$namaLengkap; ?></div>
                          <small class="text-muted m-b">"<i><?=$bioUser; ?></i>"</small>
                        </div>                      
                      </div>
                    </div>
                    <footer class="panel-footer bg-primary text-center">
                      <div class="row pull-out">
                        <div class="col-xs-4">
                          <div class="padder-v">
                            <span class="m-b-xs h3 block text-white"><?=$jKutipan; ?></span>
                            <small class="text-muted">Post</small>
                          </div>
                        </div>
                        <div class="col-xs-4 dk">
                          <div class="padder-v">
                            <span class="m-b-xs h3 block text-white"><?=$jFollowers; ?></span>
                            <small class="text-muted">Followers</small>
                          </div>
                        </div>
                        <div class="col-xs-4">
                          <div class="padder-v">
                            <span class="m-b-xs h3 block text-white"><?=$jParti; ?></span>
                            <small class="text-muted">Participant</small>
                          </div>
                        </div>
                      </div>
                    </footer>
                  </section>
                  </div>

                  <div class="col-lg-4">
                  <section class="panel panel-default portlet-item">
                <header class="panel-heading">
                  Kutipan
                </header>
                <?php
                $link_pic = base_url('parts/kreator/img/kreator/');
                while($dFKutipan = $kKutipan -> fetch_array()){
                    $idUserKutipan = $dFKutipan['id_user'];
                    $isiUserKutipan = $dFKutipan['isi'];
                    //cari nama lengkap 
                    $kNamaLengkapKutipan = $link -> query("SELECT nama_lengkap FROM tbl_user_profile WHERE id_user='$idUserKutipan';");
                    $fNamaLengkap = $kNamaLengkapKutipan -> fetch_array();
                    $namaLengkapKutipan = $fNamaLengkap['nama_lengkap'];
                    
                    echo "                  <div class=\"panel-body\">
                          <a href=\"#\" class=\"thumb pull-right m-l\"></a>
                          <div class=\"clear\">
                          
                            <a href=\"#\" class=\"text-info\">@ $namaLengkapKutipan<i class=\"icon-twitter\"></i></a><br />
                            
                            <small class=\"block text-muted\">$isiUserKutipan</small>
                           </div>
                        </div>";
                    
                }
                ?>
                  
                  <div style="padding:8px;">
                    <a href="#" class="btn btn-xs btn-success m-t-xs" id="tblLihatKutipan">Lihat </a>
                  </div>
                  </section>
                  </div>
                  
                      <div class="col-lg-4">
                  <section class="panel panel-default portlet-item">
                <header class="panel-heading">
                  Mereka yang baru di NadhaCreative
                </header>
                <ul class="list-group alt">
                  
                  <?php
                  $link_pic = base_url('parts/kreator/img/kreator/');
                  while($dRecent = $kUserRecent -> fetch_array()){
                    $namaLengkapRec = $dRecent['nama_lengkap'];
                    $idUserRec = $dRecent['id_user'];
                    $bioRec = $dRecent['bio'];
                    
                    echo "<li class=\"list-group-item\">
                    <div class=\"media\">
                      <span class=\"pull-left thumb avatar b-3x m-r\"><img src=\"$link_pic/$idUserRec.jpg\" alt=\"$namaLengkapRec\" class=\"img-circle\"/></span>
                      <div class=\"pull-right text-warning m-t-sm\">
                        <i class=\"fa fa-circle\"></i>
                      </div>
                      <div class=\"media-body\">
                        <div><a href=\"#\">$namaLengkapRec</a></div>
                        <small class=\"text-muted\">$bioRec</small>
                      </div>
                    </div>
                  </li>";
                  }
                  ?>
                  </ul>
      
              </section>
                  </div>
                </div>
      </div>
              
              <div class="row">
              <div class="col-lg-4">
             <section class="panel panel-default portlet-item">
                <header class="panel-heading">
                  <ul class="nav nav-pills pull-right">
                    <li>
                      <a href="#" class="panel-toggle text-muted"><i class="fa fa-caret-down text-active"></i><i class="fa fa-caret-up text"></i></a>
                    </li>
                  </ul>
                  News Center                    
                </header>
                <section class="panel-body">
                  <?php
                  
                  $qCreativeNc = $link -> query("SELECT id_berita,tanggal,judul,id_penulis,isi,img_meta FROM tbl_nc_berita WHERE kode_divisi='NC' LIMIT 0,3;");
                  while($feCreativeNc = $qCreativeNc -> fetch_array()){
                    $judul = $feCreativeNc['judul'];
                    $tanggal = $feCreativeNc['tanggal'];
                    $imgMeta = $feCreativeNc['img_meta'];
                    $idPenulis = $feCreativeNc['id_penulis'];
                    $isiLengkap = $feCreativeNc['isi'];
                    $isiDeks = substr($isiLengkap,0,100);
                    //cari nama id penulis
                    echo " <article class=\"media\">
                    <div class=\"pull-left\">
                      <span class=\"thumb-sm avatar pull-left\">
              <img src=\"$picIdPenulis/$idPenulis.jpg\"/>
            </span>
                    </div>
                    <div class=\"media-body\">                        
                      <a href=\"#\" class=\"h4\">$judul</a>
                      <small class=\"block m-t-xs\">$isiDeks ...</small>
                      <em class=\"text-xs\">Posted on <span class=\"text-danger\">$tanggal</span></em>
                    </div>
                  </article>";
                    
                  }
                  ?>             
                </section>
              </section>
              </div>
              
              <div class="col-lg-4">
             <section class="panel panel-default portlet-item">
                <header class="panel-heading">
                  <ul class="nav nav-pills pull-right">
                    <li>
                      <a href="#" class="panel-toggle text-muted"><i class="fa fa-caret-down text-active"></i><i class="fa fa-caret-up text"></i></a>
                    </li>
                  </ul>
                  Creative Center                   
                </header>
                <section class="panel-body">
                  <?php
                  
                  $qCreativeCc = $link -> query("SELECT id_berita,tanggal,judul,id_penulis,isi,img_meta FROM tbl_nc_berita WHERE kode_divisi='CC' LIMIT 0,3;");
                  while($feCreativeCc = $qCreativeCc -> fetch_array()){
                    $judul = $feCreativeCc['judul'];
                    $tanggal = $feCreativeCc['tanggal'];
                    $imgMeta = $feCreativeCc['img_meta'];
                    $idPenulis = $feCreativeCc['id_penulis'];
                    $isiLengkap = $feCreativeCc['isi'];
                    $isiDeks = substr($isiLengkap,0,100);
                    //cari nama id penulis
                    echo " <article class=\"media\">
                    <div class=\"pull-left\">
                      <span class=\"thumb-sm avatar pull-left\">
              <img src=\"$picIdPenulis/$idPenulis.jpg\"/>
            </span>
                    </div>
                    <div class=\"media-body\">                        
                      <a href=\"#\" class=\"h4\">$judul</a>
                      <small class=\"block m-t-xs\">$isiDeks ...</small>
                      <em class=\"text-xs\">Posted on <span class=\"text-danger\">$tanggal</span></em>
                    </div>
                  </article>";
                    
                  }
                  ?>             
                  
                </section>
              </section>
              </div>
              
              <div class="col-lg-4">
             <section class="panel panel-default portlet-item">
                <header class="panel-heading">
                  <ul class="nav nav-pills pull-right">
                    <li>
                      <a href="#" class="panel-toggle text-muted"><i class="fa fa-caret-down text-active"></i><i class="fa fa-caret-up text"></i></a>
                    </li>
                  </ul>
                  Tekno Center                   
                </header>
                <section class="panel-body">
                  <article class="media">
                    <div class="pull-left">
                      <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-wordpress fa-stack-1x text-white"></i>
                      </span>
                    </div>
                    <div class="media-body">                        
                      <a href="#" class="h4">Bootstrap 3: What you need to know</a>
                      <small class="block m-t-xs">Sleek, intuitive, and powerful mobile-first front-end framework for faster and easier web development.</small>
                      <em class="text-xs">Posted on <span class="text-danger">Feb 23, 2013</span></em>
                    </div>
                  </article>
                  
                  <article class="media">
                    <div class="pull-left">
                      <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-flickr fa-stack-1x text-white"></i>
                      </span>
                    </div>
                    <div class="media-body">                        
                      <a href="#" class="h4">Bootstrap 3: What you need to know</a>
                      <small class="block m-t-xs">Sleek, intuitive, and powerful mobile-first front-end framework for faster and easier web development.</small>
                      <em class="text-xs">Posted on <span class="text-danger">Feb 23, 2013</span></em>
                    </div>
                  </article>
                  
                  <article class="media">
                    <div class="pull-left">
                      <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-soundcloud fa-stack-1x text-white"></i>
                      </span>
                    </div>
                    <div class="media-body">                        
                      <a href="#" class="h4">Bootstrap 3: What you need to know</a>
                      <small class="block m-t-xs">Sleek, intuitive, and powerful mobile-first front-end framework for faster and easier web development.</small>
                      <em class="text-xs">Posted on <span class="text-danger">Feb 23, 2013</span></em>
                    </div>
                  </article>
                  
                </section>
              </section>
              </div>
              
              </div>
              
              
              