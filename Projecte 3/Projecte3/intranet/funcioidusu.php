<?php
$conexion= mysqli_connect("localhost","root","","1718_aramzafraanush");
if ($conexion==false) {
    echo"<p align=center><h3>No s'ha pogut connectar a la base de dades, revisi la seva conexio</h3></p><br><br>";
}else{
error_reporting(0);
  $idusu=$_REQUEST['idusu'];
  $query="SELECT * FROM usuari WHERE usu_id='$idusu'";
  $query2=mysqli_query($conexion,$query);
  if (mysqli_num_rows($query2)>0) {
    while ($registro=mysqli_fetch_array($query2)) {
    for ($i=0;$i<5 ;$i++) {

    switch ($i) {
      case (1):
        $nomusu=$registro[usu_nom];
        echo "Usuari: $nomusu";
        break;
    }
    }
    }


  }
//error_reporting(0);
//$id=$_REQUEST['usuari'];

//echo"$rec_id";

}
?>
