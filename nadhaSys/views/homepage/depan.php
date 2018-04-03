<?php
session_start();
$link = new mysqli('localhost','nadhaalditha','3ncoding4sc11A@','nadhaald_nadha');

$ipAddress = $_SERVER['REMOTE_ADDR'];

//user agent
$gadget = $_SERVER['HTTP_USER_AGENT'];
//tanggal & waktu
$tanggal = date("d-m-Y");
$waktu = date("h:i:s");
//kueri sisip data visitor 
$kSisipVisitor = $link -> query("INSERT INTO tbl_visitor VALUES('','$ipAddress','$tanggal','$waktu','Homepage','$gadget');");

//cari jumlah visitor 
$kJumlahVisitor = $link -> query("SELECT id FROM tbl_visitor;");
$jumlahVis = $kJumlahVisitor -> num_rows;
$jumlahVis = $jumlahVis + 1923312;
$jumlahVis = number_format($jumlahVis);
function base_link(){
echo base_url('parts/kreator/');
}

?>
<!DOCTYPE html>
<html lang="en" class=" ">
<head>
  <meta charset="utf-8" />
  <title>Nadha - Homepage</title>
  <meta name="description" content="NadhaCreative homepage. Halaman utama NadhaCreative, ini adalah portal utama NadhaCreative, meliputi menu untuk melakukan registrasi, login ke dalam sistem NadhaCreative, dll." />
  <meta name="author" content="NadhaCreative IT Developer" />
  <meta name="keywords" content="NadhaCreative,Nadha Creative,NadhaCreative HomePa                                               ge, Halaman utama nadhacreative"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="<?php echo base_link(); ?>/acc/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_link(); ?>/acc/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_link(); ?>/acc/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_link(); ?>/acc/css/landing.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_link(); ?>/acc/css/app.css" type="text/css" />
	<link rel="shortcut icon" href="<?php echo base_link(); ?>/acc/favicon.ico" type="image/png">
	
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="">
  	
  <!-- header -->
  <header id="header" class="navbar navbar-fixed-top bg-white box-shadow b-b b-light"  data-spy="affix" data-offset-top="1">
    <div class="container">
      <div class="navbar-header">        
        <a href="#" class="navbar-brand"><!-- alamat gambar --><span class="text-muted">NadhaCreative</span></a>
        <button class="btn btn-link visible-xs" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active">
            <a href="#!">Home</a>
          </li>
          <li>
            <a href="#!" target="new">Creative</a>
          </li>
          <li>
            <a href="#!" target="new">News</a>
          </li>
          <li>
            <a href="#!" target="new">Education</a>
          </li>
					<li>
            <a href="#!" target="new">API</a>
          </li>
          <li>
            <a href="#!">About</a>
          </li>
          <li>
            <div class="m-t-sm"> <a href="<?php echo site_url('kreator'); ?>" class="btn btn-sm btn-info m-l"><strong>Sign In</strong></a></div>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <!-- / header -->
	<section id="content">
	  <div class="bg-info dk">
      <div class="text-center wrapper">
        <div class="m-t-xl m-b-xl">
          <div class="text-uc h1 font-bold inline">
            <div class="pull-left m-r-sm text-white">Nadha <span class="font-thin text-muted">is</span></div>
            <div class="carousel slide carousel-fade inline auto aside text-left pull-left pull-none-xs" data-interval="2000">
                <div class="carousel-inner">
                  <div class="item active">
                    Easier
                  </div>
                  <div class="item">
                    Faster
                  </div>
                  <div class="item">
                    Fresh
                  </div>
                </div>
            </div>
          </div>
          <div class="h4 text-muted m-t-sm">New social media for Author, informan, &amp; kreator.</div>
        </div>
        <p class="text-center m-b-xl">
          <a href="#!" class="btn btn-lg btn-dark m-sm">Join</a>
          <a href="#!" target="_blank" class="btn btn-lg btn-warning b-white bg-empty m-sm">How it work</a>
        </p>
      </div>
      <div class="padder">
        <div class="hbox">
          <aside class="col-md-3 v-bottom text-right">
            <div class="hidden-sm hidden-xs">
              <section class="panel bg-dark inline m-b-n-lg m-r-n-lg aside-sm no-border device phone animated fadeInLeftBig">
                <header class="panel-heading text-center">
                  <i class="fa fa-minus fa-2x m-b-n-xs block"></i>
                </header>
                <div>
                  <div class="m-l-xs m-r-xs">
                    <img src="<?php echo base_link(); ?>/acc/images/phone-2.png" class="img-full" />
                  </div>
                </div>
              </section>
            </div>
          </aside>
          <aside class="col-sm-10 col-md-6">
            <section class="panel bg-dark m-b-n-lg no-border device animated fadeInUp">
              <header class="panel-heading text-left">
                <i class="fa fa-circle fa-fw"></i>
                <i class="fa fa-circle fa-fw"></i>
                <i class="fa fa-circle fa-fw"></i>
              </header>
              <img src="<?php echo base_link(); ?>/acc/images/main2.jpg" class="img-full" />
            </section>
          </aside>
          <aside class="col-md-3 v-bottom">
            <div class="hidden-sm hidden-xs">
              <section class="panel bg-light m-b-n-lg m-l-n-lg aside no-border device phone animated fadeInRightBig">
                <header class="panel-heading text-center">
                  <i class="fa fa-minus fa-2x text-white m-b-n-xs block"></i>
                </header>
                <div class="">
                  <div class="m-l-xs m-r-xs">
                    <img src="<?php echo base_link(); ?>/acc/images/phone-1.png" class="img-full" />
                  </div>
                </div>
              </section>
            </div>
          </aside>
        </div>
      </div>
      <div class="dker pos-rlt">
        <div class="container wrapper">
          <div class="m-t-lg m-b-lg text-center">
                        
          </div>
        </div>
      </div>
    </div>
    <div id="about">
      <div class="container">
        <div class="m-t-xl m-b-xl text-center wrapper">
          <h3>Lihat!! Dengar!! Publish!! </h3>
          <p class="text-muted">Ingin menulis atau mempublikasikan sesuatu? Bingung bagaimana cara ataupun medianya? .... ^_^ .. <b>NadhaCreative</b>, tempat yang pas buat kamu.</p>
        </div>
        <div class="row m-t-xl m-b-xl text-center">
          <div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
            <p class="h3 m-b-lg">
              <i class="fa fa-lightbulb-o fa-3x text-info"></i>
            </p>
            <div class="">
              <h4 class="m-t-none">Submit Ide?</h4>
              <p class="text-muted m-t-lg"></p>
            </div>
          </div>
          <div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="600">
            <p class="h3 m-b-lg">
              <i class="fa fa-signal fa-3x text-info"></i>
            </p>
            <div class="">
              <h4 class="m-t-none">Lihat Statistik</h4>
              <p class="text-muted m-t-lg"></p>
            </div>
          </div>
          <div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="900">
            <p class="h3 m-b-lg">
              <i class="fa fa-rocket fa-3x text-info"></i>
            </p>
            <div class="">
              <h4 class="m-t-none">Miliki Komunitas</h4>
              <p class="text-muted m-t-lg"></p>
            </div>
          </div>
        </div>
        <div class="m-t-xl m-b-xl text-center wrapper">
          <p class="h5">Menjadi pemberi informasi yang baik, siapa saja, dimana saja.  
            <span class="text-info">NadhaCreative</span>, 
            <span class="text-info">NadhaNews</span>, 
            <span class="text-info">NadhaTekno</span>
          </p>
        </div>
      </div>
    </div>
    <div id="responsive" class="bg-dark">
      <div class="text-center">
        <div class="container">
          <div class="m-t-xl m-b-xl wrapper">
            <h3 class="text-white">Let's Submit your report</h3>
           
          </div>
          <div class="row m-t-xl m-b-xl">
            <div class="col-sm-4 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
              <p class="text-center h2 m-b-lg m-t-lg">
                <span class="fa-stack fa-2x">
                  <!--<i class="fa fa-circle fa-stack-2x text-dark"></i>
                  <i class="fa fa-comment-o fa-stack-1x text-muted"></i>
								-->
                </span>
              </p>
              <p></p>
            </div>
            <div class="col-sm-4 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="600">
              <p class="text-center h1 m-b-lg">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x text-dark"></i>
                  <i class="fa fa-rss-square fa-stack-1x text-muted"></i>
                </span>
              </p>
              <p><i>"Jangan buang waktu untuk hal hal yang seperti itu.."</i></p>
            </div>
            <div class="col-sm-4 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="900">
              <p class="text-center h2 m-b-lg m-t-lg">
                <span class="fa-stack fa-2x">
									<!--
									
                  <i class="fa fa-circle fa-stack-2x text-dark"></i>
                  <i class="fa fa-code-fork fa-stack-1x text-muted text-md"></i>
								-->
                </span>
              </p>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <div id="newsletter" class="bg-white clearfix wrapper-lg">
      <div class="container text-center m-t-xl m-b-xl" data-ride="animated" data-animation="fadeIn">        
        <h2>Lets Join</h2>
        <p id="statTautanEmail">Masukkan email dan dapatkan tautan ke link pendaftaran</p>
        <div class="form-inline m-t-xl m-b-xl">
          <div class="form-group">
            <input class="form-control input-lg" id="txtInputEmailBawah" placeholder="Your email" data-ride="animated" data-animation="fadeInLeftBig" data-delay="300"/>
          </div>
          <button type="submit" class="btn btn-default btn-lg" data-ride="animated" id="btnJoinBawah" data-animation="fadeInRightBig" data-delay="600">Join</button>
        </div>
      </div>
    </div>
	</section>
  
  <!-- footer -->
  <footer id="footer">
    <div class="bg-info text-center">
      <div class="container wrapper">
				
        <div class="m-t-xl m-b">
					<h2>
						<b><?=$jumlahVis; ?></b> Hits Halaman.
					</h2> 
          Sudah punya akun?
          <a href="<?php echo site_url('kreator'); ?>" target="_blank" class="btn btn-lg btn-dark b-white bg-empty m-sm">Login</a>
        </div>
      </div>
      <i class="fa fa-caret-down fa-4x text-info m-b-n-lg block"></i>
    </div>
    <div class="bg-dark dker wrapper">
      <div class="container text-center m-t-lg">
        <div class="row m-t-xl m-b-xl">
          <div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
            <i class="fa fa-gear fa-3x icon-muted"></i>
            <h5 class="text-uc m-b m-t-lg">NadhaSocial</h5>
            <p class="text-sm">social.nadha.net<br/>
              
             </p>
          </div>
          <div class="col-sm-4" data-ride="animated" data-animation="fadeInUp" data-delay="600">
            <i class="fa fa-envelope-o fa-3x icon-muted"></i>
            <h5 class="text-uc m-b m-t-lg">Mail Us</h5>
            <p class="text-sm"><a href="mailto:info@nadhacreative.com">info@nadha.net</a></p>
          </div>
          <div class="col-sm-4" data-ride="animated" data-animation="fadeInRight" data-delay="900">
            <i class="fa fa-globe fa-3x icon-muted"></i>
            <h5 class="text-uc m-b m-t-lg">Join Us</h5>
            <p class="text-sm">Send your resume to <br/><a href="mailto:karir@nadhacreative.com">alditha.forum@gmail.com</a></p>
          </div>
        </div>
        <div class="m-t-xl m-b-xl">
          <p>
            <a href="#" class="btn btn-icon btn-rounded btn-facebook bg-empty m-sm"><i class="fa fa-facebook"></i></a>
            <a href="#" class="btn btn-icon btn-rounded btn-twitter bg-empty m-sm"><i class="fa fa-twitter"></i></a>
            <a href="#" class="btn btn-icon btn-rounded btn-gplus bg-empty m-sm"><i class="fa fa-google-plus"></i></a>
          </p>
          <p>
            <a href="#content" data-jump="true" class="btn btn-icon btn-rounded btn-dark b-dark bg-empty m-sm text-muted"><i class="fa fa-angle-up"></i></a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->  <script src="<?php echo base_link(); ?>/acc/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_link(); ?>/acc/js/bootstrap.js"></script>
  <!-- App -->
  <script src="<?php echo base_link(); ?>/acc/js/app.js"></script> 
  <script src="<?php echo base_link(); ?>/acc/js/slimscroll/jquery.slimscroll.min.js"></script>
  
  <script src="<?php echo base_link(); ?>/acc/js/appear/jquery.appear.js"></script>
  <script src="<?php echo base_link(); ?>/acc/js/scroll/smoothscroll.js"></script>
  <script src="<?php echo base_link(); ?>/acc/js/landing.js"></script>
  <script src="<?php echo base_link(); ?>/acc/js/app.plugin.js"></script>
	<script src="<?php echo base_link(); ?>/acc/js/nadhaHome.js"></script>
</body>
</html>