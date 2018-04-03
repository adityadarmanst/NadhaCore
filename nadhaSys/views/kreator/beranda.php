<?php
session_start();
$link = new mysqli('localhost','nadhaalditha','3ncoding4sc11A@','nadhaald_nadha');

if(!ISSET($_SESSION['emailId'])){
header("location:../kreator");
}else{
$email = $_SESSION['emailId'];
}

function base_link(){
echo base_url('parts/kreator/');
}

 //cari nama lengkap dari email
 $kCProfil = $link -> query("SELECT * FROM tbl_user_profile WHERE email='$email';");
 $fProfil = $kCProfil -> fetch_array();
 $namaLengkap = $fProfil['nama_lengkap'];
 $idUser = $fProfil['id_user'];
 $namaDepanBahan = explode(" ",$namaLengkap);
 $namaDepan = $namaDepanBahan['0'];
?>
<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>Nadha - Beranda</title>
  <meta name="description" content="NadhaCreative adalah website yang yang mengumpulkan para pemilik kreativitas untuk menyalurkan bakat yang dimiliki" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="<?php echo base_link(); ?>/acc/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_link(); ?>/acc/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_link(); ?>/acc/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_link(); ?>/acc/css/app.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_link(); ?>/acc/js/bootstrap.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#containerUtama').html("<i class='fa fa-spin fa-refresh'></i> Memuat beranda ... ");
      $('#containerUtama').load('berandaDasar');
  });
  </script>
  <!-- App -->
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="">
  <section class="vbox">
    <header class="bg-primary dk header navbar navbar-fixed-top-xs">
      <div class="navbar-header aside-md">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="fa fa-bars"></i>
        </a>
        <a href="#" class="navbar-brand" data-toggle="fullscreen"><img src="<?php echo base_link(); ?>/acc/images/logo.png" class="m-r-sm"/>NadhaCreative</a>

      </div>
      <ul class="nav navbar-nav hidden-xs">
        <li class="dropdown">
          <section class="dropdown-menu aside-xl on animated fadeInLeft no-borders lt">
            <div class="wrapper lter m-t-n-xs">
              <a href="#" class="thumb pull-left m-r">
                <img src="#" class="img-circle"/>
              </a>
              
            </div>
            <div class="row m-l-none m-r-none m-b-n-xs text-center">

              </div>
            </div>
          </section>
        </li>
        <li>
          <div class="m-t m-l">
            
          </div>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
        <li class="hidden-xs">
          <a href="#" class="dropdown-toggle dk">
            <i class="fa fa-bell"></i>
            <span class="badge badge-sm up bg-danger m-l-n-sm">6</span>
          </a>
          
        </li>
        <li class="dropdown hidden-xs">
          <a href="#" class="dropdown-toggle dker" data-toggle="dropdown"><i class="fa fa-fw fa-search"></i></a>
          <section class="dropdown-menu aside-xl animated fadeInUp">
            <section class="panel bg-white">

            </section>
          </section>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="thumb-sm avatar pull-left">
              <img src="<?php echo base_link(); ?>/img/kreator/<?=$idUser; ?>.jpg"/>
            </span>
            <?=$email; ?> <b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">
            <span class="arrow top"></span>
            <li>
              <a href="#">Settings</a>
            </li>
            <li>
              <a href="#">Profile</a>
            </li>
            <li>
              <a href="#">
                <span class="badge bg-danger pull-right">3</span>
                Notifications
              </a>
            </li>
            <li>
              <a href="#">Help</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="<?php echo site_url('kreator/logout'); ?>">Logout</a>
            </li>
          </ul>
        </li>
      </ul>      
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-dark lter aside-md hidden-print hidden-xs" id="nav">          
          <section class="vbox">

            <section class="w-f scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                <?php
                $this->load->view('kreator/menu');
                ?>

                <!-- / nav -->
              </div>
            </section>
            
            <footer class="footer lt hidden-xs b-t b-dark">
              <div id="chat" class="dropup">
                
              </div>
              
              <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon">
                <i class="fa fa-angle-left text"></i>
                <i class="fa fa-angle-right text-active"></i>
              </a>
              <div class="btn-group hidden-nav-xs">
                <button type="button" title="Profil" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#chat"><i class="fa fa-user"></i></button>
                <button type="button" title="LogOut" class="btn btn-icon btn-sm btn-dark"><a href="<?php echo site_url('kreator/logout'); ?>"><i class="fa fa-power-off"></i></a></button>
              </div>
            </footer>
          </section>
        </aside>
        <!-- /.aside -->
        <section id="content">
          <section class="vbox">          
            <section class="scrollable padder">
              <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <marquee direction='left'>
                <?php
                $this->load->view('kreator/fastline');
                ?>
                </marquee>
              </ul>
              <div class="m-b-md">
                <h3 class="m-b-none" id="capsBeranda">Beranda</h3>
                <small>NadhaCreative</small>
              </div>
              
              <div id="containerUtama">
             
              </div>
              
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open" data-target="#nav,html"></a>
        </section>
        <aside class="bg-light lter b-l aside-md hide" id="notes">
          <div class="wrapper">Notification</div>
        </aside>
      </section>
    </section>
  </section>
  
  <script src="<?php echo base_link(); ?>/acc/js/app.js"></script> 
  <script src="<?php echo base_link(); ?>/acc/js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_link(); ?>/acc/js/charts/easypiechart/jquery.easy-pie-chart.js"></script>

  <script src="<?php echo base_link(); ?>/acc/js/charts/sparkline/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_link(); ?>/acc/js/charts/flot/jquery.flot.min.js"></script>
  <script src="<?php echo base_link(); ?>/acc/js/charts/flot/jquery.flot.tooltip.min.js"></script>
  <script src="<?php echo base_link(); ?>/acc/js/charts/flot/jquery.flot.resize.js"></script>
  <script src="<?php echo base_link(); ?>/acc/js/charts/flot/jquery.flot.grow.js"></script>
  <script src="<?php echo base_link(); ?>/acc/js/charts/flot/demo.js"></script>
  <script src="<?php echo base_link(); ?>/acc/js/fuelux/fuelux.js"></script>
  <script src="<?php echo base_link(); ?>/acc/js/sortable/jquery.sortable.js"></script>
  <script src="<?php echo base_link(); ?>/acc/js/app.plugin.js"></script>
  
</body>
</html>