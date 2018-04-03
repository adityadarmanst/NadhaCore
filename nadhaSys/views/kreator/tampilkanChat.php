<?php
$this->load->view('koneksi');
 $email = $_SESSION['emailId'];
 $kueriChat = mysql_query("SELECT id_user,tanggal,waktu,nama,chat FROM tbl_chat ORDER BY id DESC LIMIT 0,9;");
 $linkFoto = base_url('parts/kreator/img/kreator/');
 
 $kCariId = mysql_query("SELECT id_user FROM tbl_user WHERE email='$email';");
 $fcariId = mysql_fetch_array($kCariId);
 $idSelf = $fcariId['id_user'];
 
                      while($dchat=mysql_fetch_array($kueriChat)){
                        $isi = $dchat['chat'];
                        $idUserKreator = $dchat['id_user'];
                        $nama = $dchat['nama'];
                        $waktu = $dchat['waktu'];
                        $tanggal = $dchat['tanggal'];
                        
                        if($idUserKreator==$idSelf){
                            $dirChat = "left";
                            $wr = "panel b-light text-sm m-b-none";
                        }else{
                            $dirChat = "right";
                            $wr = "panel bg bg-success text-sm m-b-none";
                        }
                        
                        echo "<article id='chat-id-1' class='chat-item $dirChat'>
                        <a href='#' class='pull-$dirChat thumb-sm avatar'><img src='$linkFoto/$idUserKreator.jpg' class='img-circle'/></a>
                        <section class='chat-body'>                      
                          <div class='$wr'>
                            <div class='panel-body'>
                              <span class='arrow $dirChat'></span>
                              <p class='m-b-none'> $isi</p>
                            </div>
                          </div>
                          <small class='text-muted'> <b>$nama</b> $tanggal - $waktu</small>
                        </section>
                      </article>   ";
                        
                        
                      }
                      
                      ?>