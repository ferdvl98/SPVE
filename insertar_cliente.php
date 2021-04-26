<?php
    require_once "conexion.php";

    $nom = $_POST["nombre"];
    $aparteno = $_POST["paterno"];
    $amaterno = $_POST["materno"];
    $telefono = $_POST["tele"];
    $lugar = $_POST["localidad"];
    $muni = $_POST["municipio"];
    $codigo = $_POST["cp"];
    $calle = $_POST["calle"];
    $inte = $_POST["interior"];
    $exte = $_POST["exterior"];


    $sql = "INSERT INTO `cliente`( `nombre`, `a_paterno`, `a_materno`, `telefono`, `id_direccion`) 
            VALUES ('$nom','$apaterno', '$amaterno', $telefono, $lugar)";

    if ($conexion->query($sql) === TRUE) {
        //echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }




?>