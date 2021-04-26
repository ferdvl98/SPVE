<?php require_once "vistas/parte_superior.php"?>

<?php
    require_once "conexion.php";

    $sql = "SELECT `nombre`, `telefono`, `usuario` FROM `cuentas`";

    $result = mysqli_query($conexion, $sql);
    $arraycodigos = array();    
?>
<table class = "table">
    <legend>USUARIOS REGISTRADOS</legend>
    <tr>
        <td>Nombre</td>
        <td>Teléfono</td>
        <td>Usiario</td>
    </tr>
    <?php while($ver=mysqli_fetch_row($result)):
        $arraycodigos[] = (string)$ver[2];
    ?> 
    <tr>
        <td><?php echo $ver[0];?></td>
        <td><?php echo $ver[1];?></td>
        <td><?php echo $ver[2];?></td>
       
    </tr>
    <?php endwhile;?>
</table>

<?php require_once "vistas/parte_inferior.php"?>