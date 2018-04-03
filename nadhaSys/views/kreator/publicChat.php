 <?php
 session_start();
 $this->load->view('koneksi');


 //cari id user lewat email
 
 ?>
 
 <script>
 
 $('#document').ready(function(){
    
    $('#conPanduan').hide();
    
    $('#tblTampilPanduan').click(function(){
       $('#conPanduan').show();
    });
    
    
    $('#tblKirimPesan').click(function(){
      var isi = $('#txtPesan').val();
      if(isi==""){
        $('#txtPesan').focus();
      }else{
        alert("Terdeteksi");
        //$.post('kreator/prosesPublicChat',{'email':email,'password':password}).done(function(data){$('#conStatusLogin').html(data);}); 
      }
    });
    
 });
 
 </script>

 
 <section class="panel panel-default">
                    <header class="panel-heading">Public Chat</header>
                    <section class="chat-list panel-body">
                        <button class="btn btn-default btn-xs" id="tblTampilPanduan">Baca ketentuan/panduan chat</button>
                        <div id="conPanduan">
                        <?php
                        $this->load->view('kreator/panduanPublicChat');
                        ?>
                        </div>
                      <hr />
                      <?php
                      $this->load->view('kreator/tampilkanChat');
                      ?>
                      
                      
                    </section>
                    <footer class="panel-footer">
                      <!-- chat form -->
                      <article class="chat-item" id="chat-form">
                        <a class="pull-left thumb-sm avatar">
                        <?php
                        $email = $_SESSION['emailId'];
                        $kCariId = mysql_query("SELECT id_user FROM tbl_user WHERE email='$email';");
 $fcariId = mysql_fetch_array($kCariId);
 $idSelf = $fcariId['id_user'];
  $linkFoto = base_url('parts/kreator/img/kreator/');
                        ?>
                        
                        <img src="<?php echo "$linkFoto/$idSelf.jpg"; ?>" class="img-circle"/></a>
                        <section class="chat-body">
                          <form action="#" class="m-b-none">
                            <div class="input-group">
                              <input class="form-control" placeholder="Ketikkan pesan" type="text" id="txtPesan"/>
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="button" id="tblKirimPesan">Kirim</button>
                              </span>
                            </div>
                          </form>
                        </section>
                      </article>
                    </footer>
                  </section>
 
