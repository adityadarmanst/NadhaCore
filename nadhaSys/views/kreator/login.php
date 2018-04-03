<?php
session_start();

function base_link(){
echo base_url('parts/kreator/');
}

$link = new mysqli('localhost','nadhaalditha','3ncoding4sc11A@','nadhaald_nadha');

$ipAddress = $_SERVER['REMOTE_ADDR'];

//user agent
$gadget = $_SERVER['HTTP_USER_AGENT'];
//tanggal & waktu
$tanggal = date("d-m-Y");
$waktu = date("h:i:s");
//kueri sisip data visitor 
$kSisipVisitor = $link -> query("INSERT INTO tbl_visitor VALUES('','$ipAddress','$tanggal','$waktu','Login Page','$gadget');");

?>
<!DOCTYPE html>
<html lang="en" class="bg-info">
<head>
  <meta charset="utf-8" />
  <title>NadhaCreative | Login </title>
  <meta name="description" content="NadhaCreative Login Page. Halaman login untuk kreator NadhaCreative. Untuk masuk ke halaman ini membutuhkan email dan password yang ditelah didapatkan ketika melakukan pendaftaran" />
  <meta name="author" content="NadhaCreative IT Developer" />
  <meta name="keywords" content="NadhaCreative,Nadha Creative,NadhaCreative HomePage, Halaman utama nadhacreative"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="<?php echo base_link(); ?>/acc/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_link(); ?>/acc/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_link(); ?>/acc/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_link(); ?>/acc/css/app.css" type="text/css" />
    <script src="<?php echo base_link(); ?>/acc/js/jquery.min.js" type="text/javascript"></script>
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
  
  <script>
  $(document).ready(function(){
    
    $('#tblMasuk').click(function(){
       var email = $('#txtEmail').val();
       var password = $('#txtPassword').val();
        
      if(email==""){
          $('#txtEmail').focus();
        }else if(password==""){
          $('#txtPassword').focus();
        }else{
          $('#conStatusLogin').html('<i class="fa fa-spin fa-refresh"></i> Memeriksa ...');     
        
        $.post('kreator/cekLogin',{'email':email,'password':password}).done(function(data){$('#conStatusLogin').html(data);});    
       
        }
    });
    
  });
  </script>
</head>
<body class="">
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
      <a class="navbar-brand block" href="<?php echo site_url(); ?>"><h2>NadhaCreative</h2></a>
      <section class="panel panel-default bg-white m-t-lg">
        <header class="panel-heading text-center">
          <strong>Login</strong>
        </header>
        <form action="<?php echo site_url('kreator/cekLogin'); ?>" class="panel-body wrapper-lg">
          <div class="form-group">
            <label class="control-label">Email</label>
            <input type="email" placeholder="Email" class="form-control input-lg" id="txtEmail"/>
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input type="password" id="txtPassword" placeholder="Password" class="form-control input-lg"/>
          </div>
          
          <div id="conStatusLogin">

               </div>
                  
          <a href="<?php echo site_url('kreator/forgotPassword'); ?>" class="pull-right m-t-xs"><small>Kesulitan masuk?</small></a>
          <button type="button" class="btn btn-info" id="tblMasuk">Sign in</button>
          <div class="line line-dashed"></div>
          <a href="#" class="btn btn-facebook btn-block m-b-sm"><i class="fa fa-facebook pull-left"></i>Sign in with Facebook</a>
          <a href="#" class="btn btn-twitter btn-block"><i class="fa fa-twitter pull-left"></i>Sign in with Twitter</a>
          <div class="line line-dashed"></div>
          <p class="text-muted text-center"><small>Do not have an account?</small></p>
          <a href="<?php echo site_url('kreator/register'); ?>" class="btn btn-default btn-block">Create an account</a>
        </form>
        <div style="text-align:center;margin-bottom:20px;">
          <a href="#" title="DMCA.com Protection Status" class="dmca-badge"> 
          <img src="//images.dmca.com/Badges/DMCA_logo-grn-btn120w.png?ID=3f0a1f3e-8944-459c-9deb-ed7dae8fd93b" alt="DMCA.com Protection Status"></a> 
        <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
        </div>
        
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <small>Login Page<br>NadhaCreative &copy; 2016</small>
       
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