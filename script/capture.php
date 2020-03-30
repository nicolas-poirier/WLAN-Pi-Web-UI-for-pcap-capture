<?php
$date=$_POST['date'];
$time=$_POST['time'];
$canal1=$_POST['canal1'];
$largeur1=$_POST['largeur1'];
$canal2=$_POST['canal2'];
$largeur2=$_POST['largeur2'];
$slice=$_POST['slice'];
$ip_srv=$_SERVER['SERVER_ADDR'];
shell_exec("cp template_tcpdump_2canaux.sh tcpdump_2canaux.sh");
shell_exec("sed -i 's/VAR_DATE/'".$date."'/g' tcpdump_2canaux.sh");
shell_exec("sed -i 's/VAR_TIME/'".$time."'/g' tcpdump_2canaux.sh");
shell_exec("sed -i 's/VAR_CANAL1/'".$canal1."'/g' tcpdump_2canaux.sh");
shell_exec("sed -i 's/VAR_LARGEUR1/'".$largeur1."'/g' tcpdump_2canaux.sh");
shell_exec("sed -i 's/VAR_CANAL2/'".$canal2."'/g' tcpdump_2canaux.sh");
shell_exec("sed -i 's/VAR_LARGEUR2/'".$largeur2."'/g' tcpdump_2canaux.sh");
shell_exec("sed -i 's/VAR_SLICE/'".$slice."'/g' tcpdump_2canaux.sh");
shell_exec("./capture &");
header('Location: http://'.$ip_srv.'/capture/index.html?success=true');
?>
