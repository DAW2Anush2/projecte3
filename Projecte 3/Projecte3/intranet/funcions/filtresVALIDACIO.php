<?php
$conexion= mysqli_connect("localhost","root","","1718_aramzafraanush");

if ($conexion==false) {
    echo"<p align=center><h3>No s'ha pogut connectar a la base de dades, revisi lusuari,la contrasenya,la ip o el nom de la BD</h3></p><><br>";
}
else{
//filtre
$idusu['idusu'];

echo"<form method=post class='formulari' action=VALIDACIOPROJECTE2.php>";
     $sql2="SELECT DISTINCT YEAR(`rec_inici`) FROM recurs";
	 $any="YEAR(`rec_inici`)";
        $qtalla= mysqli_query($conexion, $sql2);

        echo "<select name=filtreany class='formulari2' id=textbox required>";
		  echo"<option class='formulari2'  value=tots>Tots</option>";
       while ($row2=mysqli_fetch_array($qtalla)) {
                echo"<option value=$row2[$any]>$row2[$any]</option>";
            }
		echo "</select>";

   $sqlusu="SELECT DISTINCT usu_nom,usu_cognoms,usu_id FROM usuari";
        $qusu= mysqli_query($conexion, $sqlusu);

        echo "<select name=filtreusu class='formulari2' id=textbox required>";
		echo"<option class='formulari2'  value=tots>Tots</option>";
       while ($usuari=mysqli_fetch_array($qusu)) {
				$user="$usuari[usu_nom] $usuari[usu_cognoms]";
                echo"<option value=$usuari[usu_id]>$user</option>";
            }
		echo "</select>";
		echo"<input type=hidden name=idusu value=$idusu>";
		echo"<input class='formulari4' type=submit value=Buscar Any i/o usuari>";
echo "</form>";
}

?>
