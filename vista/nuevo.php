<?php
  require_once("layouts/header.php");
?>

<h1 class="text-center">NUEVO FORMULARIO</h1>
<form action="" method="get">
    <input class="input" type="text" placeholder="NOMBRE" name="nombre"><br>
    <input class="input" type="text" placeholder="APELLIDO" name="apellido"><br>
    <input class="input" type="email" placeholder="CORREO" name="correo"><br>
    <input class="input" type="text" placeholder="CONTRASEÑA" name="contrasenia"><br>
    <input class="input" type="date" placeholder="dd/mm/aaaa" name="fecha"><br>
    <input type="submit" class="btn btn-1" name="btn" value="GUARDAR"><br>
    <input type="hidden" name="n" value="guardar"> 
</form>