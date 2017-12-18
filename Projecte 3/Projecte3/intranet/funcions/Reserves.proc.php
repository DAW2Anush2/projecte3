<?php

error_reporting(0);
$conexion= mysqli_connect("localhost","root","","1718_aramzafraanush");

if ($conexion==false) {
    echo"<p align=center><h3>No s'ha pogut connectar a la base de dades, revisi lusuari,la contrasenya,la ip o el nom de la BD</h3></p><br><br>";
}
else{

error_reporting(0);
$idusu=$_REQUEST['idusu'];

$idrecurs=$_REQUEST['recursid'];
//echo"$rec_id";

$update="UPDATE `recurs` SET `rec_estat` = '0' WHERE `recurs`.`rec_id` = $idrecurs;";
$consulta=mysqli_query($conexion,$update);


$hoy = getdate();
$fecha="$hoy[year]-$hoy[mon]-$hoy[mday] $hoy[hours]:$hoy[minutes]:$hoy[seconds]";

$hora =getdate();
$hora_actual="$hora_actual[hours]:$hora_actual[minutes]:$hora_actual[seconds]";

$update="UPDATE `reserva` SET `res_inici` ='$fecha' WHERE `recurs`.`rec_id` = $idrecurs;" ;
$consulta=mysqli_query($conexion,$update);

$update="UPDATE `reserva` SET `res_hora_inici` ='$hora_actual' WHERE `recurs`.`rec_id` = $idrecurs;" ;
$consulta=mysqli_query($conexion,$update);

$update="UPDATE `recurs` SET `rec_contador` = `rec_contador`+1  WHERE `recurs`.`rec_id` = $idrecurs;" ;
$consulta=mysqli_query($conexion,$update);

$insert="INSERT INTO `reserva` (`rec_id`, `usu_id`) VALUES ($idrecurs, $idusu);";
$insertar=mysqli_query($conexion,$insert);



echo"<p align=center><a href=../paginareserves.php>Tornar</a></p>";

  echo"<form name=login method=post action=paginareserves.php>";
  echo"<input type=hidden name=idusu value=$idusu>";
  echo "</form>";
  echo "<script language=JavaScript>";
  echo"document.login.submit()";
  echo"</script>";
}
?>
