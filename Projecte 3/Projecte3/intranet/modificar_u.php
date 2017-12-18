<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>reserva</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      .glyphicon { margin-right:5px; }
.thumbnail
{
    margin-bottom: 20px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}

.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 10px;
}
.item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
{
    background: #428bca;
}

.item.list-group-item .list-group-image
{
    margin-right: 10px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
}
.item.list-group-item .caption
{
    padding: 9px 9px 0px 9px;
}
.item.list-group-item:nth-of-type(odd)
{
    background: #eeeeee;
}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item img
{
    float: left;
}
.item.list-group-item:after
{
    clear: both;
}
.list-group-item-text
{
    margin: 0 0 11px;
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<header>
    <div class="colorfondo">
       <ul>
            <li>
              <?php
              echo "<meta http-equiv='Content-type' content='text/html; charset=utf-8' />";
              $idusu=$_REQUEST['idusu'];
                echo"<form  method=post action=reservas.php>";
              echo"<br><input type=hidden name=idusu value=$idusu>";
              echo"<input  class=nou type=submit value=Recursos>";
              echo"</form>";
              ?>


            </li>
            <li>
              <?php
              $idusu=$_REQUEST['idusu'];
              echo"<form  method=post action=reservas-no-disponibles.php>";
              echo"<br><input type=hidden name=idusu value=$idusu>";
              echo"<input  class=nou type=submit value=Reservats>";
              echo"</form>";

              ?>
            </li>
            <li>
              <?php
              $idusu=$_REQUEST['idusu'];
              echo"<form  method=post action=paginareserves.php>";
              echo"<br><input type=hidden name=idusu value=$idusu>";
              echo"<input  class=nou type=submit value=Gestor de reserves>";
              echo"</form>";

              ?>
            </li>
            <li style="float:right"><a class="active" href="../index.php">Desconectar</a></li>

            <li style="float:right" class="active1">
              <?php

             include 'funcioidusu.php';
             ?>
           </li>
        </ul>

    </div>
    <div class="cabecera">
        <img id="img-cabecera" src="../img/cabecera.jpg">
        <h1 id="titulo-cabecera">Reserva de recursos</h1>
    </div>
</header>
<body>
<div class="wrapper1">
  <div class="container">
    <div class="well well-sm">

    </div>
                    <?php
                    echo"<form name='form' action='modificar_u.proc.php'method='post'>";
                		echo"Nom: <input type='text' name='nom_usu' size='25'/><br/><br/>";
                    echo"Cognom: <input type='text' name='cog_usu' size='25'/><br/><br/>";
                    echo"E-Mail: <input type='text' name='email_usu' size='25'/><br/><br/>";
                    echo"Telefón: <input type='text' name='telf_usu' size='2'/><br/><br/>";
                		echo"Contrasenya: <input type='password' name='pass_usu' size='25'/><br/><br/>";
                		echo"<input type='submit' value='Crear'/>";
                		echo "</form>";
                    ?>
    <div id="products" class="row list-group">
</div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>

    <script  src="../js/index.js"></script>

</body>
</html>
