<?php
session_start();
$this->load->view('koneksi');

?>
Data caps / kreator
<hr/>
<table class="table table-striped b-t b-light">
  <tr>
  <th>No</th><th>Caps</th><th>User</th>
  </tr>  
<?php
$qCapsUtama = mysql_query("SELECT * FROM tbl_caps;");
  $no=1;
while($dCaps = mysql_fetch_array($qCapsUtama)){
  $idUser = $dCaps['id_user'];
  $caps = $dCaps['caps'];
  $qCariNama = mysql_query("SELECT nama_lengkap FROM tbl_user_profile WHERE id_user='$idUser';");
  $qNamaKreator = mysql_fetch_array($qCariNama);
  $namaKreator = $qNamaKreator['nama_lengkap'];
  echo "<tr>
  <td>$no</td><td>$caps</td><td>$namaKreator</td>
  </tr>";
  $no++;
}
?>
  
  </table>