<?php
$conexion= mysqli_connect("localhost","root","","1718_aramzafraanush");
if ($conexion==false) {
    echo"<p align=center><h3>No s'ha pogut connectar a la base de dades, revisi la seva conexio</h3></p><br><br>";
}else{
error_reporting(0);
  $nom_usu=$_REQUEST['Username'];
  $pass_usu=$_REQUEST['Password'];
  $query="SELECT * FROM usuari WHERE usu_nom='$nom_usu' AND usu_contrasenya='$pass_usu'";
  $query2=mysqli_query($conexion,$query);
  if (mysqli_num_rows($query2)>0) {
    while ($registro=mysqli_fetch_array($query2)) {
    for ($i=0;$i<5 ;$i++) {

    switch ($i) {
      case (0):
        $idusu=$registro[usu_id];
        break;
    }
    echo"<form name=login method=post action=intranet/reservas.php>";
    echo"<input type=hidden name=idusu value=$idusu>";
    echo "</form>";
  echo "<script language=JavaScript>";
  echo"document.login.submit()";
  echo"</script>";
    }
    }


  }else {
    echo "Usuari/contrasenya incorrecte";
    echo"<form method=post action=index.html>";
    echo"<input class='btn-success' type=submit value=Tornar>";
    echo "</form>";
  }
//error_reporting(0);
//$id=$_REQUEST['usuari'];

//echo"$rec_id";
}
?>
