<?php
session_start();
$con= mysqli_connect("localhost","root","","1718_aramzafraanush");
$q = "UPDATE recurs SET usu_estat='$_SESSION['estatusu']' WHERE idUsu=$_SESSION['idusu'];";
$resultado = mysqli_query($con, $q);
echo "Deshabilitat amb exit";
echo "<a href=171124_principal.php>Volver</a>";
 ?>
