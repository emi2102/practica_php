<?php
    require_once("layouts/header.php");
?>
<a href="index.php?n=nuevo" class="btn">NUEVO</a>
<div class="grid">
        <h3>ID</h3>
        <h3>NOMBRE</h3>
        <h3>ACCIÓN</h3>        
        <?php
            if(!empty($dato)):
                foreach($dato as $key => $value)
                    foreach($value as $v):?>
                        <p><?php echo $v['id'] ?> </p>
                        <p><?php echo $v['nombre'] ?> </p>
                        <p>
                            <a class="btn" href="index.php?n=editar&id=<?php echo $v['id']?>">EDITAR</a>
                            <a class="btn" href="index.php?n=eliminar&id=<?php echo $v['id']?>" onclick="return confirm('ESTA SEGURO'); false">ELIMINAR</a>
                        </p>
                    <?php endforeach; ?>
            <?php else: ?>
                <div classs="ult_parte">
                    <p>NO HAY REGISTROS</p>
                </div>
            <?php endif ?>
    </div>