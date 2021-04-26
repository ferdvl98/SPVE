<?php
require_once "conexion.php";
$email_err = "";
if (isset($_POST["submit"])) {
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
    $id = "";
    /*if (empty($nom)) {
        $email_err = $email_err  . " Debe escribir un nombre";
    } else {
        if (empty($aparteno)) {
            $email_err = $email_err  . " Debe escribir un apellido paterno";
        } else {
            if (empty($amaterno)) {
                $email_err = $email_err  . " Debe escribir un apellido materno";
            } else {
            }
            if (empty($telefono) || empty($lugar) || $muni == 0 || empty($codigo) || empty($calle) || empty($inte) || empty($exte)) {
                //$email_err = "Debes llenar todos los campos";
            } else {
            }
        }
    }*/
    
    $sql = "INSERT INTO `direccion`( `colonia`, `calle`, `num_in`, `num_ex`, `municipio`, `CP`) VALUES
            ('$lugar','$calle',$inte,$exte,$muni,$codigo)";

    if ($conexion->query($sql) === TRUE) { //insertamos la direccion del usuario en la bd
        $sql = "SELECT id FROM direccion where colonia = '$lugar' and calle = '$calle' and num_in = $inte and num_ex = $exte and municipio = '$muni' and CP = $codigo";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) { //buscamos el id de la tupla que acabamos de registrar en la tabla direccion
            while ($row = $result->fetch_assoc()) {
                $id = $row["id"];
            }
            $sql = "INSERT INTO `cliente`( `nombre`, `a_paterno`, `a_materno`, `telefono`, `id_direccion`) 
        VALUES ('$nom','$aparteno','$amaterno',$telefono,$id)";

            if ($conexion->query($sql) === TRUE) {

                //header('location:cliente.php');
                $email_err = "Usuario Registrado";
            } else {
                $email_err =  "Error 002: al registrar cliente.";
            }
        } else {
            echo "0 results";
        }
    } else {
        $email_err = "Error 001: al registrar dirección. ";
    }
}
