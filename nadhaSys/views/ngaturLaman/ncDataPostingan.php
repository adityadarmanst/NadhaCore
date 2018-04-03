<?php
session_start();
$this->load->view('koneksi');
$kTampilBerita = mysql_query("SELECT * FROM tbl_nc_berita");

?>
<script>
$(document).ready(function(){
    $('.judulBerita').click(function(){
       var idBerita = $(this).attr('id');
       var loading = "<i class='fa fa-spin fa-refresh'></i> Memuat berita ... ";
       $('#conUtama').html(loading);
       $('#conUtama').load('editBerita/'+idBerita);
    });
});
</script>

<hr />
<table class="table table-bordered">
<tr class="breadcrumb">
<th>No</th><th>Id Berita</th><th>Judul</th><th>Tanggal</th><th>Penulis</th><th>Isi</th><th>Lead</th><th>Aktif</th>
</tr>
<?php
$no=1;
while($dBerita=mysql_fetch_array($kTampilBerita)){
    $idBerita = $dBerita['id_berita'];
    $judulBerita = $dBerita['judul'];
    $tanggalBerita = $dBerita['tanggal'];
    $idPenulis = $dBerita['id_penulis'];
    $isiPanjang = $dBerita['isi'];
    $isiPendek = substr($isiPanjang,0,100);
    $lead = $dBerita['lead'];
    $aktif = $dBerita['aktif'];
    //cari nama penulis dari id penulis
    $kNamaPenulis = mysql_query("SELECT nama_lengkap FROM tbl_user_profile WHERE id_user='$idPenulis';");
    $fNamaPenulis = mysql_fetch_array($kNamaPenulis);
    $namaPenulis = $fNamaPenulis['nama_lengkap'];
    echo "<tr>
    <td>$no</td>
    <td>$idBerita</td>
    <td><a href='#' class='judulBerita' id='$idBerita'>$judulBerita</a></td>
    <td>$tanggalBerita</td>
    <td>$namaPenulis</td>
    <td>$isiPendek ...</td>
    <td>$lead</td>
    <td>$aktif</td>
    
    </tr>";
    $no++;
}
?>
</table>