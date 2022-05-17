<?php
require_once("layouts/header.php");
?>
<h2>INICIAR SESION</h2>
<form action="" method="get">
    <input class="input" type="text" placeholder="NOMBRE_USUARIO" name="n_usuario" required><br>
    <input class="input" type="password" placeholder="CONTRASEÑA" name="contrasenia" required><br>
    <input type="submit" class="btn btn-1" name="btn" value="INICIAR SESION"><br>
    <input type="hidden" name="n" value="login"> 
</form>
<form action="">
    <p>Para resgistrarse:</p>
   <input type="submit" class="btn btn-1" name="btn" value="REGISTRAR USUARIO"><br>
    <input type="hidden" name="n" value="nuevo"> 
</form>