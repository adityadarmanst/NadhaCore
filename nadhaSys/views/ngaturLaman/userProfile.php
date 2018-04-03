<?php
session_start();
$this->load->view('koneksi');

 $linkFoto = base_url('parts/kreator/img/kreator/');

?>
<table class="table table-striped">
<tr>
<th>No</th><th>User</th><th>Id User</th><th>Nama</th><th>Email</th><th>No. HandPhone</th><th>Alamat</th><th>Aksi</th>
</tr>
<?php
$no=0;
$kUtama = mysql_query("SELECT * FROM tbl_user_profile;");
while($fU=mysql_fetch_array($kUtama)){
    $idUser = $fU['id_user'];
    $namaUser = $fU['nama_lengkap'];
    $emailUser = $fU['email'];
    $hpUser = $fU['no_hp'];
    $alamatUser = $fU['alamat'];
    $no++;
    echo "<tr>
<td>$no</td><td>
<img src='$linkFoto/$idUser.jpg' style='width:80px;'>
</td><td>$idUser</td><td>$namaUser</td><td>$emailUser</td><td>$hpUser</td><td>$alamatUser</td><td>Lihat | Edit | Hapus</td>
</tr>";
    }

?>
</table>