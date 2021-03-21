<?php

    include "conexion.php";

    $nombre = $_POST["nombre"];
    $telefono = $_POST["tel"];
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $pass2 = $_POST["pass2"];
    $ifuser = false;

    if (empty($nombre) || empty($telefono) || empty($user) || empty($pass) || empty($pass2)) {
        echo '
            <script>
                alert("¡Debe llenar todos los campos!");
                window.location ="../index.php";
            </script>
        ';
    }else{
        if($pass != $pass2){
            echo '
            <script>
                alert("¡Las contraseñas no coinciden!");
                window.location ="../index.php";
            </script>
        ';
        }else{
            $sql = "SELECT * FROM cuentas where usuario = '$user'";
            $result = $conexion->query($sql);
            if ($result->num_rows > 0) {
                $ifuser = true;
            }
            if($ifuser == true){
                echo '
                <script>
                    alert("¡El usuario ya existe! Inicie Sesión");
                    window.location ="../index.php";
                </script>
            ';
            }else{
                $sql = "INSERT INTO cuentas (nombre, telefono, usuario, contrasena)
                VALUES ('$nombre', $telefono, '$user', '$pass')";
                if ($conexion->query($sql) === TRUE) {
                    echo '
                    <script>
                        alert("¡Usuario Registrado!");
                        window.location ="../index.php";
                    </script>
                ';
                } else {
                    echo '
                    <script>
                        alert("¡Error al registrar!");
                        window.location ="../index.php";
                    </script>
                ';
                }
            }
        }
    }



?>