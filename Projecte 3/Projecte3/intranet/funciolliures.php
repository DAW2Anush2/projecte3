<?php

/**
 * Funcio per mostrar els registres, alliberats i ocupats també pagina i posa els resgistres en divs
 * @author  Ignasi Sanfeliu & Brenda Palomino & Anush
 * @version 1.0
*/

error_reporting(0);

$conexion= mysqli_connect("localhost","root","","1718_aramzafraanush");

if ($conexion==false) {
    echo"<p align=center><h3>No s'ha pogut connectar a la base de dades, revisi lusuari,la contrasenya,la ip o el nom de la BD</h3></p><br><br>";
}
else{
$seguent="Seguent";
$anterior="Anterior";
//paginat inici
$max=$_REQUEST['max'];
$id=$_REQUEST['id'];
$idusu=$_REQUEST['idusu'];
//echo"$idusu";
$select="";
$select=$_REQUEST['filtre'];
$select2=$_REQUEST['filtre2'];
$text="";
$text=$_REQUEST['text'];
//if else per paginat amb siguiente anterior

if (isset($max)) {
    switch ($id) {
        case 'Seguent':
            $max=$max+10;
            break;

        case 'Anterior':
             $max=$max-10;
            break;
}
}
else {
$max=0;
	   }


 switch ($select) {
	 case '':
	         $query="SELECT * FROM recurs WHERE rec_estat=1 AND rec_nom LIKE '%$text%' ORDER BY rec_alliberacio DESC LIMIT 10 OFFSET $max";
	 break;
	 case 'tots':
	      $query="SELECT * FROM recurs WHERE rec_estat=1 AND rec_nom LIKE '%$text%' ORDER BY rec_alliberacio DESC LIMIT 10 OFFSET $max";
	 break;
     default:
          $query="SELECT * FROM recurs WHERE rec_estat=1 AND rec_nom LIKE '%$text%' AND rec_tipus='$select' ORDER BY rec_alliberacio DESC LIMIT 10 OFFSET $max";
     break;

 }



    $consulta=mysqli_query($conexion,$query);
	//echo"$query";

if (mysqli_num_rows($consulta)>0) {

//array de camps
$camp = array("ID", "Nom", "Tipus", "Data d'Inici","Data alliberament","S'ha reservat ","Estat","Imatge","Descripcio");


//bucle mostrar registres

//variable que conta els registres per la pagina externa. inicialitzada a 1 perque el id no es visualitza
echo "<div class='row list-group' id=products>";
	while ($registro=mysqli_fetch_array($consulta)) {

echo "<div class='item  col-xs-4 col-lg-4 grid-group-item'>";
echo "<div class='thumbnail'>";
  $ok=0;
for ($i=0;$i<8 ;$i++) {

	switch ($i) {
    case (0):
      $idrecurs=$registro[rec_id];
      $i=6;

      break;
		case (1):
			echo "<div class='group inner list-group-item-heading'>";
		    echo"<p class='titol'>$registro[$i]</p>";
		    echo "</div>";
		break;
		case (2):
			echo "<div class='group inner list-group-item-text'>";
			echo"<font size=3>$camp[$i]: ";
				echo"<font size=3>$registro[$i] <br>";
			break;
		case (3):
		    echo"<font size=3>$camp[$i]: </font>";
		    echo"<font size=3>$registro[$i] <br></font>";
		break;
		case (4):
		    echo"<font size=3>$camp[$i]: </font>";
		    echo"<font size=3>$registro[$i] <br></font>";
		break;
		case (5):
		    echo"$camp[$i]";
		    echo"$registro[$i] vegades <br>";
		    if ($ok==1) {
		    echo "</div>";}
		break;
		case (6):
		echo "</div>";
		break;
		case (7):
		if ($ok==0) {
			echo"<div class='itemlist-group-image'>";
		    echo"<img src=$registro[$i] width=358 height=250>";
		    echo "</div>";
		    echo"<div class='caption'>";
		      $i=0;
		      $ok=1;
		}


		break;
			    default:
				echo"$camp[$i]: ";
				echo"$registro[$i] <br>";
				break;
	}	//tanca switch

}//tanca for
?>
<div class="row">
                        <div class="">

                        </div>
                        <div class=""><?php
                        	echo"<form method=post action=adminreserva.php>";
							echo "<input type=hidden name=recursid value=$idrecurs>";
							echo"<input type=hidden name=idusu value=$idusu>";
							echo"<input type=submit class='btn-success' value=Reservar>";
							echo "</form>";

							?>
                         </div>
                         </div>
<?php
echo "</div>";
echo "</div>";

}//tanca while
echo "</div>";
	echo"<form method=post>";
    echo"<input type=hidden name=max value=$max>";
    echo"<input type=submit name=id value=$anterior class='btn-success'> ";
    echo"<input type=hidden name=idusu value=$idusu>";
    echo"<input type=submit name=id value=$seguent class='btn-success' >";
    echo"</form>";
}//tanca if consulta>0
else{
echo"No s'han trobat mes recursos!";
echo"<form method=post action=reservas.php>";
echo"<br><input type=hidden name=idusu value=$idusu>";
echo"<p align=center><input class=nou type=submit value=Tornar></p>";
echo"</form method=post>";
}
}//tanca else si s'ha fet be la conexio

//boto seguent anterior registre


?>
