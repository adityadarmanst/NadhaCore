<?php
session_start();
$this->load->view('koneksi');
$email = $_SESSION['emailId'];
function base_link(){
echo base_url('parts/kreator/');
}
//cari id user lewat email
$kId = mysql_query("SELECT id_user FROM tbl_user WHERE email='$email';");
$fId = mysql_fetch_array($kId);
$idUser = $fId['id_user'];
//cari informasi grade
$kUmumExp = mysql_query("SELECT * FROM tbl_exp_user WHERE id_user='$idUser';");
$fUmumExp = mysql_fetch_array($kUmumExp);
$GradeNow = $fUmumExp['grade'];
$gradeCode = $fUmumExp['grade_code'];
$expNow = $fUmumExp['exp'];

if($gradeCode=="nw"){
    $nProg = 3;
}elseif($gradeCode=="bg_1"){
    $nProg = 9;
}elseif($gradeCode=="bg_2"){
    $nProg = 16;
}elseif($gradeCode=="bg_3"){
    $nProg = 22;
}elseif($gradeCode=="sl_1"){
    $nProg = 29;
}elseif($gradeCode=="sl_2"){
    $nProg = 36;
}elseif($gradeCode=="sl_3"){
    $nProg = 42;
}elseif($gradeCode=="gl_1"){
    $nProg = 49;
}elseif($gradeCode=="gl_2"){
    $nProg = 56;
}elseif($gradeCode=="gl_3"){
    $nProg = 62;
}elseif($gradeCode=="dm_1"){
    $nProg = 69;
}elseif($gradeCode=="dm_2"){
    $nProg = 76;
}elseif($gradeCode=="dm_3"){
    $nProg = 82;
}elseif($gradeCode=="st_1"){
    $nProg = 89;
}elseif($gradeCode=="st_2"){
    $nProg = 100;
}
?>
<script>
$(document).ready(function(){
    
    
    
});
</script>
<section class="panel panel-default portlet-item">
<header class="panel-heading">Informasi Grade</header>
<div style="margin:12px;">
<table style="width: 100%;">
<tr>
<td>
<img src="<?php echo base_url('parts/kreator/img/grade/')."/nw"."_big.png"; ?>" style="width:70px;" />
</td>
<td>
<img src="<?php echo base_url('parts/kreator/img/grade/')."/bg_1"."_big.png"; ?>" style="width:70px;" />
</td>
<td>
<img src="<?php echo base_url('parts/kreator/img/grade/')."/bg_2"."_big.png"; ?>" style="width:70px;" />
</td>
<td>
<img src="<?php echo base_url('parts/kreator/img/grade/')."/bg_3"."_big.png"; ?>" style="width:70px;" />
</td>
<td>
<img src="<?php echo base_url('parts/kreator/img/grade/')."/sl_1"."_big.png"; ?>" style="width:70px;" />
</td>
<td>
<img src="<?php echo base_url('parts/kreator/img/grade/')."/sl_2"."_big.png"; ?>" style="width:70px;" />
</td>
<td>
<img src="<?php echo base_url('parts/kreator/img/grade/')."/sl_3"."_big.png"; ?>" style="width:70px;" />
</td>
<td>
<img src="<?php echo base_url('parts/kreator/img/grade/')."/gl_1"."_big.png"; ?>" style="width:70px;" />
</td>
<td>
<img src="<?php echo base_url('parts/kreator/img/grade/')."/gl_2"."_big.png"; ?>" style="width:70px;" />
</td>
<td>
<img src="<?php echo base_url('parts/kreator/img/grade/')."/gl_3"."_big.png"; ?>" style="width:70px;" />
</td>
<td>
<img src="<?php echo base_url('parts/kreator/img/grade/')."/dm_1"."_big.png"; ?>" style="width:70px;" />
</td>
<td>
<img src="<?php echo base_url('parts/kreator/img/grade/')."/dm_2"."_big.png"; ?>" style="width:70px;" />
</td>
<td>
<img src="<?php echo base_url('parts/kreator/img/grade/')."/dm_3"."_big.png"; ?>" style="width:70px;" />
</td>
<td>
<img src="<?php echo base_url('parts/kreator/img/grade/')."/st_1"."_big.png"; ?>" style="width:70px;" />
</td>
<td>
<img src="<?php echo base_url('parts/kreator/img/grade/')."/st_2"."_big.png"; ?>" style="width:70px;" />
</td>
</tr>
</table>
<br />
<div class="progress progress-sm progress-striped  active">
                          <div class="progress-bar progress-bar-success" data-toggle="tooltip" data-original-title="30%" style="width: <?=$nProg; ?>%"></div>
                        </div>
<hr />

<div class="row">
<div class="col-sm-4">                  
                      <section class="panel panel-default">
                      <div style="text-align: center;">
                       <img src="<?php echo base_url('parts/kreator/img/grade/')."/$gradeCode"."_big.png"; ?>" style="width:170px;" />
                       </div>
                        <ul class="list-group no-radius">
                          <li class="list-group-item">
                            <span class="pull-right"><?=$GradeNow; ?></span>
                            Grade
                          </li>
                          <li class="list-group-item">
                            <span class="pull-right"><?=$expNow; ?></span>
                           Experience
                          </li>
                          <li class="list-group-item">
                            <span class="pull-right">15,000</span>
                           Cest
                          </li>
                        </ul>
                      </section>
                    </div>

</div>


</div>
</section>