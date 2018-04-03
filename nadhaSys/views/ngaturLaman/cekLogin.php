<?php
session_start();

if($username=="verifikator-administrator" and $password=="3561nadha"){
    $_SESSION['idAdmin'] = "y";
    echo "<html><head><script type='text/javascript'>window.location='das.cgi';</script></head></html>";
}else{
    echo "<html><head><script type='text/javascript'>history.back();</script></head></html>";
}

?>