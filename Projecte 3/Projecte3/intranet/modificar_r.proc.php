<?php
session_start();
$conexion= mysqli_connect("localhost","root","","1718_aramzafraanush");
$nombre=$_REQUEST['nombre_usuario_new'];
$password=$_REQUEST['password_usuario_new'];
$q = "UPDATE usuari SET usu_nom='$nombre_usuario_new',usu_contrasenya='$password_usuario_new' WHERE idUsu=$_SESSION['idusu'];";
$resultado = mysqli_query($conexion, $q);
echo "Modificat amb exit";
echo "<a href=<../index.php>Volver</a>";
 ?>
