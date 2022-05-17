<?php
  require_once("layouts/header.php");
?>

<h1 class="text-center">EDITAR USUARIO</h1>
<form action="" method="get">
<?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>
    <input class="input"  type="text" value="<?php echo $v['nombre'] ?>" placeholder="NOMBRE" name="nombre"><br>
    <input class="input" type="text" value="<?php echo $v['apellido'] ?>" placeholder="APELLIDO" name="apellido"><br>
    <input class="input" type="email" value="<?php echo $v['correo'] ?>" placeholder="CORREO" name="correo"><br>
    <input class="input" type="text" value="<?php echo $v['n_usuario'] ?>" placeholder="NOMBRE_USUARIO" name="n_usuario"><br>
    <input class="input" type="text" value="<?php echo $v['contrasenia'] ?>" placeholder="CONTRASEÑA" name="contrasenia"><br>
    <input type="hidden" value="<?php echo $v['id'] ?>" name="id"> <br>
    <input type="submit" class="btn btn-1" name="btn" value="ACTUALIZAR"><br>
    <input type="hidden" name="n" value="actualizar"> 
    <?php
        endforeach;
    endforeach;
    ?>
</form>