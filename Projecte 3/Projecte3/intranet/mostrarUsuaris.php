<?php
    $query="SELECT * FROM usuari";
    $consulta=mysqli_query($conexion,$query);

    if(mysqli_num_rows($consulta)>0){
    while( $usuari=mysqli_fetch_array($consulta)){
    	echo "<br/>Nom: $usuari[usu_nom]<br>
      Nivell: $usuari[usu_nivell]<br>
      Estat: $usuari[usu_estat]<br>";
      $_SESSION['idusu']=$usuari['usu_id'];
      $_SESSION['estatusu']=$usuari['usu_estat'];
      echo "Accions :<a href='deshabilitar_u.php'>Deshabilitar</a> - <a href='modificar_u.php'>Modificar</a> - ";


    }

    }
?>
