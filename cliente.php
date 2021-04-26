<?php 
require "insertar_cliente.php";
require_once "vistas/parte_superior.php";
        
    
?>

<!--INICIO DEL CONT PRINCIPAL-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container"><br><br> 
        <legend>Registrar Cliente</legend>
        <span class="msg-error"> <?php echo $email_err; ?> </span>
        <form id="formulario" action="" method="post">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Nombre</label>
                    <input name = "nombre" type="text" class="form-control" id="inputProduct" placeholder="Nombre del cliente">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputPassword4">Apellido Paterno</label>
                    <input name = "paterno" type="text" class="form-control" id="inputSupplier" placeholder="Apellido Paterno">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputPassword4">Apellido Materno</label>
                    <input name = "materno" type="text" class="form-control" id="inputSupplier" placeholder="Apellido Materno">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputPassword4">Teléfono</label>
                    <input name = "tele" type="number" class="form-control" id="inputPrice" placeholder="Télefono">
                </div>
                <div class="form-group col-md-5">
                    <label for="inputPassword4">Localidad</label>
                    <input name = "localidad" type="text" class="form-control" id="inputSupplier" placeholder="Localidad">
                </div>
                <div class="form-group col-md-5">
                    <label for="inputState">Municipio</label>
                    <select name = "municipio" id="inputState" class="form-control">
                        <option value = "0" selected>- Seleccione -</option>
                        <option value="1">Ixtlahuca</option>
                        <option value="2">Jiquipilco</option>
                        <option value="3">San Felipe del Progreso</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputPassword4">Código Postal</label>
                    <input name = "cp" type="number" class="form-control" id="inputPrice" placeholder="CP">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Calle</label>
                    <input name = "calle" type="text" class="form-control" id="inputSupplier" placeholder="Calle">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Número Interior</label>
                    <input name = "interior" type="number" class="form-control" id="inputPrice" placeholder="NumInter">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Número Exterior</label>
                    <input name = "exterior" type="number" class="form-control" id="inputStock" placeholder="NumExt">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name = "submit" id="guardar">Guardar</button>
        </form>
    </div>
</body>
</html>
<!--FIN DEL CONT PRINCIPAL-->
<?php require_once "vistas/parte_inferior.php"?>