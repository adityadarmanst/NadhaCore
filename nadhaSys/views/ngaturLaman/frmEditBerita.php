  <?php
$this->load->view('koneksi');
//kueri tampil berita
$kBerita = mysql_query("SELECT * FROM tbl_nc_berita WHERE id_berita='$idBerita';");
$fBerita = mysql_fetch_array($kBerita);
$judul = $fBerita['judul'];
$url = $fBerita['url'];
$isi = $fBerita['isi'];
$deksJudul = $fBerita['deks_judul'];
$imgMeta = $fBerita['img_meta'];
$keyword = $fBerita['keyword'];
?>
<script>
$(document).ready(function(){
   $('#tblUpdate').click(function(){
    var idBerita = "<?=$idBerita; ?>";
    var isiBerita = $('#txtBerita').val();
    var judulBerita = $('#txtJudul').val();
    var deksJudul = $('#txtDeksJudul').val();
    var urlBerita = $('#txtUrl').val();
    var imgMeta = $('#txtImgMeta').val();
    var keywordBerita = $('#txtKeyword').val();
    var loading = ("<i class='fa fa-spin fa-refresh'></i> Memperbaharui berita ...");
    $('#conUtama').html(loading);
    $('#conUtama').load('proEditBerita',{'idBerita':idBerita,'judulBerita':judulBerita,'deksJudul':deksJudul,'urlBerita':urlBerita,'imgMeta':imgMeta,'keywordBerita':keywordBerita,'isiBerita':isiBerita});
   }); 
});
</script>
<form>
<h4>Judul</h4>
<input type="text" value=" <?=$judul; ?>" class="form-control" id="txtJudul"/>
<h4>Deks Judul</h4>
<input type="text" value=" <?=$deksJudul; ?>" class="form-control" id="txtDeksJudul"/>
<h4>Url</h4>
<input type="text" value=" <?=$url; ?>" class="form-control" id="txtUrl"/>
<h4>Img Meta</h4>
<input type="text" value=" <?=$imgMeta; ?>" class="form-control" id="txtImgMeta"/>
<h4>Keyword</h4>
<input type="text" value="<?=$keyword; ?>" class="form-control" id="txtKeyword" />
<h4>Isi</h4>
<textarea class="form-control" style="resize: none;height:400px;" id="txtBerita"><?=$isi; ?></textarea>
<br />
<input type="button" value="Update" class="btn btn-primary" id="tblUpdate" />
</form>