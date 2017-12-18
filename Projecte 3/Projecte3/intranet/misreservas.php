<?php
header("Content-Type: text/html;charset=utf-8");
$conexion= mysqli_connect("localhost","root","","1718_aramzafraanush");

if ($conexion==false) {
    echo"<p align=center><h3>No s'ha pogut connectar a la base de dades, revisi lusuari,la contrasenya,la ip o el nom de la BD</h3></p><br><br>";
}
else{
error_reporting(0);
$idusu=$_REQUEST['idusu'];
//echo"$idusu";
switch ($idusu) {
    case '1':
	echo"<h1>INCIDÈNCIES</h1>";
			echo"<br>";
					echo"<br>";
          //funcions admin
		  $recurs="SELECT * FROM recurs WHERE rec_estat=2";
		  $queryrecurs=mysqli_query($conexion,$recurs);

          if (mysqli_num_rows($queryrecurs)>0) {

		$camp = array("ID", "Nom", "Tipus","S'ha reservat ","Estat","Imatge","Descripcio");
echo "<div class='row list-group' id=products>";

		  while ($registro=mysqli_fetch_array($queryrecurs)) {
	echo "<div class='item  col-xs-4 col-lg-4 grid-group-item'>";
			echo "<div class='thumbnail'>";
			  $ok=0;
        for ($i=0;$i<6 ;$i++) {

          switch ($i) {
            case (0):
              $idrecurs=$registro[rec_id];

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
                echo"$camp[$i]";
                echo"$registro[$i] vegades <br>";
                if ($ok==1) {
                echo "</div>";}
            break;
            case (4):
            echo "</div>";
            break;
            case (5):
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
                        <div class="">
                        	<?php
                        	echo"<form method=post action=funcions/IncidenciaResolta.proc.php>";
							echo"<br><input type=hidden name=rec_id value=$recursid>";
							echo"<br><input type=hidden name=idusu value=$idusu>";
							echo"<input type=submit value='Incidència resolta' class='btn-success'>";
							echo"</form>";
							echo"<br>";
							echo"<br>";

							?>
                         </div>
                         </div>
<?php
echo "</div>";
echo "</div>";

}//tanca while
echo "</div>";

			}
			else{
			echo"Tot correcte";
			}

	      //SELECT * FROM recurs WHERE rec_estat=2
		  //boto incidencia resolta-> UPDATE estat =1 data lliberacio=

    break;
	default:




// USUARIOS

$reserva="SELECT * FROM reserva WHERE usu_id=$idusu";
//echo"$reserva";
$consulta=mysqli_query($conexion,$reserva);
if (mysqli_num_rows($consulta)>0) {
	$i=0;
$camp = array("ID", "Nom", "Tipus", "Data d'Inici","Data alliberament","S'ha reservat ","Estat","Imatge","Descripcio");
		echo "<div class='row list-group' id=products>";
	while ($registro=mysqli_fetch_array($consulta)) {
	//echo"$registro[rec_id] <br>";
	$recursid="$registro[rec_id]";
	$recursarray[$i] = $recursid;

	$recurs="SELECT * FROM recurs WHERE rec_id=$recursarray[$i] AND rec_estat=0";
	$i++;
	$queryrecurs=mysqli_query($conexion,$recurs);
	if (mysqli_num_rows($queryrecurs)>0) {


		while ($recursmostrar=mysqli_fetch_array($queryrecurs)) {
			echo "<div class='item  col-xs-4 col-lg-4 grid-group-item'>";
			echo "<div class='thumbnail'>";
			$ok=0;

				for ($a=0;$a<6 ;$a++ ) {
					switch ($a) {
				case (0):
   			   $idrecurs=$registro[rec_id];
     			 $a=6;

    			  break;
				case (1):
					echo "<div class='group inner list-group-item-heading'>";
					   //echo"$camp[$a]: ";
					    echo"<p class='titol'>$recursmostrar[$a]</p>";
					    echo "</div>";
				break;
				case (2):
				echo "<div class='group inner list-group-item-text1'>";
				break;
				case (3):
					echo"$camp[$a]: ";
				    echo"<font size=3>$recursmostrar[$a] vegades<br>";
				    if ($ok==1) {
		    echo "</div>";}
			    break;
				case (4):

				break;
				case (5):
				if ($ok==0) {
					echo"<div class='itemlist-group-image'>";
					echo"<img src=$recursmostrar[$a] width=358 height=280>";
				    echo "</div>";
		   		    echo"<div class='caption'>";
		            $a=0;
		            $ok=1;
		            }

				break;
				case (6):
					echo "</div>";
					break;
			    default:
					echo"$camp[$a]: ";
				    echo"$recursmostrar[$a] <br>";
				break;
						}
				}


?>
<div class="row">
                        <div class="">


                        <div class="">
            <?php

			echo"<form method=post action=funcions/Retornar.proc.php>";
				   echo"<br><input type=hidden name=rec_id value=$recursid>";
				   echo"<input type=hidden name=idusu value=$idusu>";
				   echo"<input type=submit class='btn-success' value=Retornar>";
			echo"</form>";
			echo"<form method=post action=funcions/aviscorrecte.php>";
				   echo"<textarea rows=5 cols=40 class='desc' name='Descripcio' placeholder='Escriu el problema que té el recurs'></textarea>";
				   echo"<input type=hidden name=rec_id value=$recursid>";
				   echo"<input type=hidden name=idusu value=$idusu>";
				   echo"<input type=submit class='btn-success' value='Publicar Incidència'>";
   				//  echo"<input type=hidden name=usu_id value=$id>";
					echo"</form>";
			?>
                         </div>
                         </div>
</div>
<?php

echo "</div>";
echo "</div>";
}
echo"</div>";
}


}
//print_r ($recursarray);

}
else{
echo"No hi ha reserves";
}


	break;
}


}

?>
