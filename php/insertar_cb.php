<?php
    require_once "../php/conexion.php";

    $pro = $_POST["producto"];
    $prov = $_POST["proveedor"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];
    $desc = $_POST["desc"];
    $cate = $_POST["cate"];
    $codigo = "";
    $cb = $_POST["cb"];

    $sql = "INSERT INTO `producto`( `producto`, `proveedor`, `descripcion`, `precio`, `stock`, `id_categoria`) 
            VALUES ('$pro','$prov', '$desc', $precio, $stock, $cate)";

    if ($conexion->query($sql) === TRUE) {
        //echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    $id = mysqli_insert_id($conexion);
    if (empty($cb)) {
        $codigo = $id.date('is');
    }else{
        $codigo = $cb;
    }

    $sql = "UPDATE `producto` SET codigo_b = $codigo WHERE id = $id";
    
    if ($conexion->query($sql) === TRUE) {
        echo "Producto Registrado";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    header("location: ../CB/codigo.php");



?>