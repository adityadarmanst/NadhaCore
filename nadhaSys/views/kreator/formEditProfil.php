<?php
session_start();
$link = new mysqli('localhost','nadhaalditha','3ncoding4sc11A@','nadhaald_nadha');
$email = $_SESSION['emailId'];
 //cari nama lengkap dari email
 $kCProfil = $link -> query("SELECT * FROM tbl_user_profile WHERE email='$email';");
 $fProfil = $kCProfil -> fetch_array();
 $namaLengkap = $fProfil['nama_lengkap'];
 $idUser = $fProfil['id_user'];
 $bioUser = $fProfil['bio'];
 $alamat = $fProfil['alamat'];
 $twitter = $fProfil['tw'];
 $instagram = $fProfil['ig'];
 $tgl_lhr = $fProfil['tanggal_lahir'];
 $bln_lhr = $fProfil['bulan_lahir'];
 $thn_lhr = $fProfil['tahun_lahir'];
 $tanggal_lahir = $thn_lhr."-".$bln_lhr."-".$tgl_lhr;
 $jk = $fProfil['jk'];
 $instansi = $fProfil['instansi'];
 $hp = $fProfil['no_hp'];
 $blog = $fProfil['blog'];
 if($jk=="Laki-Laki"){
    $stJkLK = "selected='yes'";
    $stJkPr = "";
 }else{
    $stJkLK = "";
    $stJkPr = "selected='yes'";
 }
 
?>

<script>

$(document).ready(function(){
    $('#conPeringatan').hide();
    $('#conNotifSimpan').hide();
    $('#txtNamaLengkap').click(function(){
       $('#conPeringatan').hide(); 
    });
   $('#txtTanggalLahir').click(function(){
       $('#conPeringatan').hide(); 
    });
   $('#txtAlamat').click(function(){
       $('#conPeringatan').hide(); 
    });
   $('#txtInstansi').click(function(){
       $('#conPeringatan').hide(); 
    });
    $('#txtHp').click(function(){
       $('#conPeringatan').hide(); 
    });
    $('#txtBlog').click(function(){
       $('#conPeringatan').hide(); 
    });
   $('#tblSimpanProfil').click(function(){
    var namaLengkap = $('#txtNamaLengkap').val();
    var tanggalLahir = $('#txtTanggalLahir').val();
    var jk = $('#txtJk').val();
    var alamat = $('#txtAlamat').val();
    var instansi = $('#txtInstansi').val();
    var hp = $('#txtHp').val();
    var blog = $('#txtBlog').val();
    var email = "<?=$email; ?>";
    
    if(namaLengkap==""){
        $('#conPeringatan').show();
        $('#conPeringatan').html("Periksa field yang kosong !!");
    }else if(tanggalLahir==""){
        $('#conPeringatan').show();
        $('#conPeringatan').html("Ada kesalahan pengisian field !!");
    }else if(alamat==""){
        $('#conPeringatan').show();
        $('#conPeringatan').html("Periksa field yang kosong !!");
    }else if(instansi==""){
        $('#conPeringatan').show();
        $('#conPeringatan').html("Periksa field yang kosong");
    }else if(hp==""){
        $('#conPeringatan').show();
        $('#conPeringatan').html("Periksa field yang kosong !!");
    }else if(blog==""){
        $('#conPeringatan').show();
        $('#conPeringatan').html("Periksa field yang kosong !!");
    }else{
        $('#conNotifSimpan').html("<i class='fa fa-spin fa-refresh'></i> Mengupdate profil ...");
        $('#conNotifSimpan').show();
        $(this).hide();
        $.post('proEditProfil',{'namaLengkap':namaLengkap,'tanggalLahir':tanggalLahir,'jk':jk,'alamat':alamat,'instansi':instansi,'hp':hp,'blog':blog,'email':email}).done();
       $('#containerUtama').load('profilSaya');
    }
    
   });
    
});

</script>

<div class="form-group">
                          <label>Nama Lengkap</label>
                          <input type="text" class="form-control" placeholder="Nama Lengkap" value="<?=$namaLengkap; ?>" id="txtNamaLengkap" required="required"/>
                        </div>
                        <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <input type="date" class="form-control" value="<?=$tanggal_lahir; ?>" id="txtTanggalLahir"/>
                        </div>
                        <div class="form-group">
                          <label>Jenis Kelamin</label><br/>
                          <select class="form-control" id="txtJk">
                          <option <?=$stJkLK; ?>>Laki-Laki</option>
                          <option <?=$stJkPr; ?>>Perempuan</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Alamat</label><br />
                          <textarea class="form-control" style="resize:none;" id="txtAlamat"><?=$alamat; ?></textarea>
                        </div>
                        <div class="form-group">
                          <label>Instansi</label><br />
                          <input type="text" class="form-control" id="txtInstansi" value="<?=$instansi; ?>"/>
                        </div>
                                                <div class="form-group">
                          <label>Nomor Handphone</label><br />
                          <input type="text" class="form-control" value="<?=$hp; ?>" id="txtHp" />
                        </div>
                                                <div class="form-group">
                          <label>Site</label><br />
                          <input type="text" class="form-control" id="txtBlog" value="<?=$blog; ?>" />
                        </div>
                        
                        
                        <div id="conPeringatan" class="alert alert-danger">
                        
                        </div>
                        
                         <div id="conNotifSimpan" class="alert alert-success">
                        
                        </div>
                        
                        <div style="text-align:center;">
                        <input type="button" class="btn btn-s-md btn-primary" id="tblSimpanProfil" value="Simpan"/>
                      </div>