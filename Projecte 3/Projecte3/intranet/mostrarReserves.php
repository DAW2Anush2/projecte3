<?php
    $query="SELECT * FROM reserva";
    $consulta=mysqli_query($conexion,$query);

    if(mysqli_num_rows($consulta)>0){
    while( $reserva=mysqli_fetch_array($consulta)){
    	$idreserva=$reserva['res_id'];
      $usureserva=$reserva['usu_id'];
      $inicires=$reserva['res_inici'];
      $idrecurs=$reserva['rec_id'];
      $q="SELECT * FROM usuari INNER JOIN reserva ON usuari.usu_id=reserva.usu_id
      INNER JOIN recurs ON reserva.rec_id=recurs.rec_id
       WHERE usuari.usu_id ='$usureserva' AND recurs.rec_id ='$idrecurs'";
      $consulta2=mysqli_query($conexion,$q);
      if (mysqli_num_rows($consulta2)>0) {
        while ($reserva_usu=mysqli_fetch_array($consulta2)) {
          $usu_reserva=$reserva_usu['rec_nom'];
          $usu_nom=$reserva_usu['usu_nom'];
          echo "Usuari: $usu_nom<br>";
          echo "Objecte reservat :$usu_reserva<br>";
          echo "_<br>";

        }
      }else {

        echo "No se muestra nada";
      }

    }
    }
?>
