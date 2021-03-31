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
        <legend>Productos</legend>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Producto</label>
                    <input type="text" class="form-control" id="inputProduct" placeholder="Nombre del producto">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Proveedor</label>
                    <input type="text" class="form-control" id="inputSupplier" placeholder="Nombre del proveedor">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Precio</label>
                    <input type="number" class="form-control" id="inputPrice" placeholder="Precio del producto">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Stock</label>
                    <input type="number" class="form-control" id="inputStock" placeholder="Cantidad disponible">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Descipción</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Categoria</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Código de Barras</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="submit" class="btn btn-primary">Crear Código</button>
        </form>
    </div>
</body>

</html>