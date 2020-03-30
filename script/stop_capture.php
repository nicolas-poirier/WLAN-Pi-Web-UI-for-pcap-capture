<?php
$ip_srv=$_SERVER['SERVER_ADDR'];
shell_exec("./stop_capture");
header('Location: http://'.$ip_srv.'/capture/index.html');
?>
