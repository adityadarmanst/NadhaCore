<?php
session_start();

function base_link(){
echo base_url('parts/kreator/');
}

$this->load->view('koneksi');
?>
<!DOCTYPE html>
<html lang="en" class="bg-primary">
<head>
  <meta charset="utf-8" />
  <title>NadhaCreative | Registrasi </title>
  <meta name="description" content="NadhaCreative Registration Page. Halaman untuk melakukan pendaftaran di NadhaCreative." />
  <meta name="author" content="NadhaCreative IT Developer" />
  <meta name="keywords" content="NadhaCreative,Nadha Creative,NadhaCreative HomePage, Halaman utama nadhacreative"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="<?php echo base_link(); ?>/acc/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_link(); ?>/acc/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_link(); ?>/acc/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_link(); ?>/acc/css/font.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_link(); ?>/acc/css/app.css" type="text/css" />
    <script src="<?php echo base_link(); ?>/acc/js/jquery.min.js"></script>
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
  
  <script>
  $(document).ready(function(){
   
   $('#tblRegister').click(function(){
    var email = $('#txtEmail').val();
    var hp = $('#txtHp').val();
    $('#conStatusDaftar').html("Sedang memproses pendaftaran ... ");
    //alert("Maaf, pendaftaran di Nadha untuk sementara di tutup.");
    
    
   });
    
  });
  </script>
</head>
<body class="">
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
      <a class="navbar-brand block" href="<?php echo site_url(); ?>"><h2>NadhaCreative</h2></a>
      <section class="panel panel-default bg-white m-t-lg" id="divRegistrasi">
        <header class="panel-heading text-center">
          <strong id="capHeader">Registrasi</strong>
        </header>
        <div id="conStatusDaftar">
            
          </div>
        <form action="#" class="panel-body wrapper-lg" id="frmRegistrasi">
          <div class="form-group">
            <label class="control-label">Email</label>
            <input type="email" placeholder="Email" class="form-control input-lg" id="txtEmail"/>
          </div>
          <div class="form-group">
            <label class="control-label">No. Handphone</label>
            <input type="text" id="txtHp" placeholder="Nomor handphone" class="form-control input-lg"/>
          </div>
          
          <a href="<?php echo site_url('kreator'); ?>" class="pull-right m-t-xs"><small>Sign In?</small></a>
          <button type="button" class="btn btn-primary" id="tblRegister">Registrasi</button>
          <div class="line line-dashed"></div>
         Form registrasi ini digunakan untuk mendapatkan kode registrasi. 
          <div class="line line-dashed"></div>
          
        </form>
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <small>Register Page<br/>NadhaCreative &copy; 2016</small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
  
  <!-- Bootstrap -->
  <script src="<?php echo base_link(); ?>/acc/js/bootstrap.js"></script>
  <!-- App -->
  <script src="<?php echo base_link(); ?>/acc/js/app.js"></script> 
  <script src="<?php echo base_link(); ?>/acc/js/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="<?php echo base_link(); ?>/acc/js/app.plugin.js"></script>
</body>
</html>