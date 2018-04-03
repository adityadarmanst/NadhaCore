<?php
session_start();
$link = new mysqli('localhost','nadhaalditha','3ncoding4sc11A@','nadhaald_nadha');

$siteCss =  base_url('parts/ngaturLaman/css');
//cari total kreator 

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>Dasboard Utama - Halaman Administrator</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'/>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?=$siteCss; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?=$siteCss; ?>/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?=$siteCss; ?>/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
<!-- jQuery 2.1.3 -->
    <script src="<?=$siteCss; ?>/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$siteCss; ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$siteCss; ?>/plugins/slimScroll/jquery.slimScroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$siteCss; ?>/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$siteCss; ?>/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=$siteCss; ?>/dist/js/demo.js" type="text/javascript"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="../../https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="../../https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="skin-blue layout-top-nav">
    <div class="wrapper">
      
      <header class="main-header">               
        <nav class="navbar navbar-static-top">
          <div class="container-fluid">
          <div class="navbar-header">
            <a href="#" class="navbar-brand"><b>Nadha</b>Administrator</a>
            
          </div>
<script>
$(document).ready(function(){

var loading = "<i class='fa fa-refresh fa-spin'></i>";
$('#conUtama').html(loading + " Memuat ...");
$('#conUtama').load('berandaUtama');

$('#tblDataProfil').click(function(){
    $('#conUtama').html(loading + " Memuat ...");
    $('#capMenu').html("Data Profil Kreator");
    $('#conUtama').load('userProfile');
});

$('#tblNcDataPostingan').click(function(){
   $('#conUtama').html(loading + " Memuat ...");
   $('#capMenu').html("Data Postingan");
   $('#conUtama').load('ncDataPostingan'); 
});

$('#tblBuatArtikelBaru').click(function(){
   alert("Aw"); 
});

});
</script>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#" id="tb_beranda">Beranda Utama<span class="sr-only">(current)</span></a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">CreativeCenter<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#" id="tb_pra">Data Postingan</a></li>
                  <li><a href="#" id="tb_wedding">Kontribusi Penulis</a></li>
                  <li><a href="#" id="tb_wedding">Statistik</a></li>
                  </ul>
              </li>
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">NewsCenter<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#" id="tblNcDataPostingan">Data Postingan</a></li>
                  <li><a href="#" id="tb_wedding">Kontribusi Penulis</a></li>
                  <li><a href="#" id="">Pengaturan Kategori</a></li>
                  <li><a href="#" id="tb_wedding">Statistik</a></li>
                  </ul>
              </li>
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Kreator<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#" id="tblDataProfil">Data Profil</a></li>
                  <li><a href="#" id="tb_wedding">Data Registrasi Awal</a></li>
                  <li><a href="#" id="tb_wedding">Data Login</a></li>
                  </ul>
              </li>
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pengelola Artikel<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#" id="tblDataProfil">Artikel Masuk</a></li>
                  <li><a href="#" id="tb_wedding">Data Seleksi</a></li>
                  <li><a href="#" id="tb_wedding">Data Semua Artikel</a></li>
                  <li><a href="#" id="tblBuatArtikelBaru">Buat Artikel Baru</a></li>
                  </ul>
              </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrator<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Manajemen Admin</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php echo site_url('ngaturLaman/logOut'); ?>">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Content Header (Page header) -->
          <section class="content-header" id="con_pag">
            <h1 id="capMenu">
              Beranda
              
            </h1><small>Administrator page</small>
          </section>
<br/>
         <div class="box box-solid box-info">
        <div class="box-header">
          <h3 class="box-title">Form Utama</h3>
        </div><!-- /.box-header -->
        <div class="box-body" id="conUtama">
        
          </div><!-- /.box-body -->
      </div>
	  
	  
	  
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="pull-right hidden-xs">
            <b>Version</b> 2.0 (Design &amp; Template By AdminLte)
          </div>
          Administrator - <strong>Copyright &copy; 2016 <a href="#">NadhaCreative</a></strong>
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->

    
  </body>
</html>
