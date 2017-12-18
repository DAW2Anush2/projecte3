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

		<h1>Registre d'un nou usuari</h1>
		<form name="form" action="alta.proc.php" method="post">
			Nom: <input type="text" name="nom_usu" required size="25"/><br/><br/>
      Cognom: <input type="text" name="cog_usu" required size="25"/><br/><br/>
      E-Mail: <input type="text" name="email_usu" required size="25"/><br/><br/>
      Telefón: <input type="text" name="telf_usu" required size="25"/><br/><br/>
			Contrasenya: <input type="password" name="pass_usu" required size="25"/><br/><br/>
			<input type="submit" value="Crear"/>
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
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
