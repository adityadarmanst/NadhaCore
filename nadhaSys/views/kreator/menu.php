 <?php
 
 
 ?>
 <script>
 $(document).ready(function(){
    var loading = "<i class='fa fa-spin fa-refresh'></i>";
    
    $('#tblBeranda').click(function(){
      $('#containerUtama').html( loading + " Memuat beranda ... ");
      $('#containerUtama').load('berandaDasar');
      $('#capsBeranda').html("Beranda");
    });
    
    $('#tblKreator').click(function(){
      $('#containerUtama').html( loading + " Memuat list ... ");
      $('#containerUtama').load('kreatorList');
      $('#capsBeranda').html("Kreator");
    });
    
    $('#tblKabarKreator').click(function(){
      $('#containerUtama').html( loading + " Memuat halaman ... ");
      $('#containerUtama').load('kabarKreator');
      $('#capsBeranda').html("Kreator Timeline");
    });
    
    $('#tblProfilSaya').click(function(){
      $('#containerUtama').html( loading + " Memuat profil ... ");
      $('#containerUtama').load('profilSaya');
      $('#capsBeranda').html("Profil");
    });
    
    $('#tblInfoGrade').click(function(){
      $('#containerUtama').html( loading + " Memuat grade ... ");
      $('#containerUtama').load('infoGrade');
      $('#capsBeranda').html("Grade");
    });

    $('#tblPesan').click(function(){
      $('#containerUtama').html( loading + " Memuat pesan ... ");
      $('#containerUtama').load('pesan');
      $('#capsBeranda').html("Pesan");
    });
    
   $('#tblKreatorRanking').click(function(){
      $('#containerUtama').html( loading + " Memuat halaman ... ");
      $('#containerUtama').load('kreatorRanking');
      $('#capsBeranda').html("Kreator Ranking");
    });
    
    $('#tblCreativeChannel').click(function(){
      $('#containerUtama').html( loading + " Memuat halaman ... ");
      $('#containerUtama').load('creativeChannel');
      $('#capsBeranda').html("Creative Channel");
    });
   
   $('#tblContentManager').click(function(){
      $('#containerUtama').html( loading + " Memuat halaman ... ");
      $('#containerUtama').load('contentManager');
      $('#capsBeranda').html("Content Manager");
    });
   
   $('#tblPublicChat').click(function(){
      $('#containerUtama').html( loading + " Memuat chat ... ");
      $('#containerUtama').load('publicChat');
      $('#capsBeranda').html("Public Chat");
   });
   
   $('#tblFaq').click(function(){
      $('#containerUtama').html( loading + " Memuat faq ... ");
      $('#containerUtama').load('faq');
      $('#capsBeranda').html("F.A.Q ( Frequently Asked Question)");
   });
   
   $('#tblKirimPertanyaan').click(function(){
      $('#containerUtama').html( loading + " Memuat halaman ... ");
      $('#containerUtama').load('kirimPertanyaan');
      $('#capsBeranda').html("Kirim Pertanyaan");
   });
 
 });
 </script>
                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                  <ul class="nav">
                    <li  class="active">
                      <a href="#" class="active">
                        <i class="fa fa-dashboard icon">
                          <b class="bg-primary"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>Creative Dasbor</span>
                      </a>
                      <ul class="nav lt">
                        <li>
                          <a href="#"  class="active" id="tblBeranda">                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Beranda</span>
                          </a>
                        </li>
                        <li >
                          <a href="#" id="tblKabarKreator">                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Kabar Kreator</span>
                          </a>
                        </li>
                        <li >
                          <a href="#" id="tblKreator">                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Kreator</span>
                          </a>
                        </li>
                        <li >
                          <a href="#" id="tblKreatorRanking" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Kreator Ranking</span>
                          </a>
                        </li>
                  
                      </ul>
                    </li>
                    <li >
                      <a href="#layout"  >
                        <i class="fa fa-user icon">
                          <b class="bg-primary"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>Profile</span>
                      </a>
                      <ul class="nav lt">
                        <li >
                          <a href="#" id='tblProfilSaya'>                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Profil Saya</span>
                          </a>
                        </li>
                        <li >
                          <a href="#" id="tblPesan">                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Pesan</span>
                          </a>
                        </li>
                        <li >
                          <a href="#" id="tblInfoGrade">                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Info Grade</span>
                          </a>
                        </li>
                        <li >
                          <a href="#" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Collection Book</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    
                     <li >
                      <a href="#" id="tblContentManager">
                        <b class="badge bg-danger pull-right">0</b>
                        <i class="fa fa-sitemap">
                          <b class="bg-primary dker"></b>
                        </i>
                        <span>Content Manager</span>
                      </a>
                    </li>
                    
                    
                    
                    <li >
                      <a href="#uikit"  >
                        <i class="fa fa-globe icon">
                          <b class="bg-primary"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>Nadha Division Site</span>
                      </a>
                      <ul class="nav lt">
                        <li >
                          <a href="#" id="tblCreativeChannel">                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Creative-Center</span>
                          </a>
                        </li>
                        <li >
                          <a href="#" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>News-Center</span>
                          </a>
                        </li>
                        <li >
                          <a href="#" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Tekno-Center</span>
                          </a>
                        </li>
                        
                      </ul>
                    </li>
<li >
                      <a href="#uikit"  >
                        <i class="fa fa-rss-square icon">
                          <b class="bg-primary"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>Creative Live</span>
                      </a>
                      <ul class="nav lt">
                        <li >
                          <a href="#" id="tblPublicChat" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Public Chat</span>
                          </a>
                        </li>
                        <li >
                        <li >
                          <a href="#" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Radio</span>
                          </a>
                        </li>
                        <li >
                          <a href="#" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Toko</span>
                          </a>
                        </li>
                      </ul>
                    </li>


                    <li >
                      <a href="#"  >
                        <b class="badge bg-danger pull-right">0</b>
                        <i class="fa fa-leaf icon">
                          <b class="bg-primary dker"></b>
                        </i>
                        <span>Kebun</span>
                      </a>
                    </li>
                    
                    
                                        <li >
                      <a href="#uikit"  >
                        <i class="fa fa-question icon">
                          <b class="bg-primary"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>Bantuan</span>
                      </a>
                      <ul class="nav lt">
                        <li >
                          <a href="#" id="tblFaq">                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>F.A.Q</span>
                          </a>
                        </li>
                        <li >
                          <a href="#" id="tblKirimPertanyaan">                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Kirim Pertanyaan</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo site_url('kreator/logout'); ?>" id="tblLogOutNavBar">                                                <i class="fa fa-angle-right"></i>
                            <span>LogOut</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    
                  </ul>
                </nav>