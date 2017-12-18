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

  <?php
  $conexion= mysqli_connect("localhost","root","","1718_aramzafraanush");
  		$q = "INSERT INTO usuari (usu_nom, usu_contrasenya,usu_cognoms,usu_email,usu_telefon,usu_estat,usu_nivell)
  		 VALUES ('$_REQUEST[nom_usu]','$_REQUEST[pass_usu]','$_REQUEST[cog_usu]','$_REQUEST[email_usu]','$_REQUEST[telf_usu]','habilitat','usuari')";
  		//echo $q;
  		$resultado = mysqli_query($conexion, $q);

  		header("location:index.html")
  ?>

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

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
