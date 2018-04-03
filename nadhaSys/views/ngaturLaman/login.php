<?php
session_start();
$siteCss =  base_url('parts/ngaturLaman/css');
?>
<!DOCTYPE html>
<html>
<head>
<title>Administrator Page
</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<link rel="stylesheet" href="css/style.css"/>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'/>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?=$siteCss; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?=$siteCss; ?>/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?=$siteCss; ?>/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?=$siteCss; ?>/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
	<script src="<?=$siteCss; ?>/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$siteCss; ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?=$siteCss; ?>/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
</head>
<body class="login-page">
    <div class="login-box">
      <div style="text-align:center;">
      <h2>Halaman Administrator</h2>
      </div>
      <div class="login-box-body" style="border-radius:12px;">
	  <div style="color:#CC6666;padding:1px;" ><a></a>
	  </div>
      <script>
	  $(document).ready(function(){
		  $('#tblMasuk').click(function(){
		     var username = $('#txttxtUsername').val();
             var password = $('#txtPassword').val();
             
             if(username==""){
                $('#txtUsername').focus();
             }else if(password==""){
                $('#txtPassword').focus();
             }else{
                $('#frmLogin').submit();
             }
             
		  });
	  });
	  </script>
        <p class="login-box-msg">Login dengan username &amp; password</p>
        <form action="<?php echo site_url('ngaturLaman/prosesLogin'); ?>" method="post" id="frmLogin">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" id="txtUsername" name="txtUsername"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" id="txtPassword" name="txtPassword"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"/> Ingat saya!
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="button" class="btn btn-primary btn-block btn-flat" id="tblMasuk">Masuk</button>
            </div><!-- /.col -->
          </div>
        </form>
		
        <div class="social-auth-links text-center">
         
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
</body>
</html>