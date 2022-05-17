<?php
  require_once("layouts/header.php");
?>

<h1 class="text-center">NUEVO USUARIO</h1>
<form action="" method="get">
    <input class="input" type="text" placeholder="NOMBRE" name="nombre" required><br>
    <input class="input" type="text" placeholder="APELLIDO" name="apellido" required><br>
    <input class="input" type="email" placeholder="CORREO" name="correo" required><br>
    <input class="input" type="text" placeholder="NOMBRE_USUARIO" name="n_usuario" required><br>
    <input class="input" type="password" placeholder="CONTRASEÑA" name="contrasenia" required><br>
    <input type="submit" class="btn btn-1" name="btn" value="GUARDAR"><br>
    <input type="hidden" name="n" value="guardar"> 
</form>
<form action="">
      <!-- para iniciar sesion en tal caso -->
    <input type="submit" class="btn btn-1" name="btn" value="INCIAR SESION"><br>
    <input type="hidden" name="n" value="iniciar"> 
</form>