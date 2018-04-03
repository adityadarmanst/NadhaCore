<?php
session_start();
$this->load->view('koneksi');
//cari data pesan
$kPesan = mysql_query("SELECT * FROM tbl_pesan WHERE id_pesan='$idPesan';");
$fPesan = mysql_fetch_array($kPesan);
$isiPesan = $fPesan['isi'];
$dari = $fPesan['dari'];
?>

<div class="row" style="padding: 12px;">


<section class="panel panel-default">
                    <header class="panel-heading font-bold"><h4>Pesan dari <?=$dari; ?></h4></header>
                    <div class="panel-body">
                      <h5><?=$isiPesan; ?></h5>
                      <hr />
                      <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i> Kembali</button>
                      <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i> Hapus</button>
                        </div>
                        
                      </form>
                    </div>
                  </section>


</div>