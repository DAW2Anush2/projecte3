<?php
	session_start();
	if(isset($_SESSION['id'])){
		header("location: intranet/reservas.php");
	}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Intranet</title>



      <link rel="stylesheet" href="css/style.css">


</head>
<header>
	<div class="colorfondo">
	</div>
</header>

<body>
  <div class="wrapper">
	<div class="container">

		<h1>Benvingut</h1>
		<form class="form" method="post" name="formlogin" action="ERROR.php">
			<input type="text" placeholder="Usuari" name="Username">
			<input type="password" placeholder="Contrasenya" name="Password">
			<button type="submit" id="login-button">Login</button><br><br>
      <a href="alta.php">Crear un usuari</a>
		</form>
	</div>

	<ul class="bg-bubbles">

		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<!--EASTER EGG. NO DESCOMENTAR.-->
		<li><!--<img src="img/giphy.gif">--></li>
		<li></li>
	</ul>

<p align="center">John-WWE2017 David-DavidCurtis2017 Fabiano-PizzaTime2017 Alex-England2017 Sebastian-Comunism2017 SI_ADMIN-Admon357</p>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
