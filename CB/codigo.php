<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/JsBarcode.all.min.js"></script>
    <script src="../assets/js/jquery-3.0.0.min.js"></script>
    <title>Código de Barras</title>
    <script type="text/javascript">
        $(document).ready(function() {

            /*$("#guardar").click(function() {
                var datos = $("#formulario").serialize();
                $.ajax({
                    url: "../php/insertar_cb.php",
                    method: "POST",
                    data: datos,
                    success: function(data) {
                        alert(data);
                        //borrar2();
                    }
                });
                return false;
            });*/

        });
    </script>
</head>

<body>
    <div class="container"><br><br>
        <legend>Productos</legend>
        <form id="formulario" action="../php/insertar_cb.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Producto</label>
                    <input name = "producto" type="text" class="form-control" id="inputProduct" placeholder="Nombre del producto">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Proveedor</label>
                    <input name= "proveedor" type="text" class="form-control" id="inputSupplier" placeholder="Nombre del proveedor">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Precio</label>
                    <input name = "precio" type="number" class="form-control" id="inputPrice" placeholder="Precio del producto">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Stock</label>
                    <input name="stock" type="number" class="form-control" id="inputStock" placeholder="Cantidad disponible">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Descipción</label>
                    <input name = "desc" type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Categoria</label>
                    <select name = "cate" id="inputState" class="form-control">
                        <option selected>- Seleccione -</option>
                        <option value="1">Producto</option>
                        <option value="2">Servicio</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Código de Barras</label>
                    <input name ="cb" type="number" class="form-control" id="inputcb" placeholder="Código de Barras">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="guardar">Guardar</button>
        </form>
        <hr>

        <div class="row">
            <div class="col-sm-10">
                <?php require_once "tabla.php" ?>
            </div>
        </div>


    </div>
</body>

</html>