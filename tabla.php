<?php
    require_once "conexion.php";

    $sql = "SELECT p.`producto`, p.`precio`, p.`stock`, c.categoria, p.`codigo_b` FROM `producto` as p 
    INNER JOIN categoria as c ON c.id = p.`id_categoria`";

    $result = mysqli_query($conexion, $sql);
    $arraycodigos = array();    
?>
<table class = "table">
    <tr>
        <td>Producto</td>
        <td>Precio</td>
        <td>Stock</td>
        <td>Categoria</td>
        <td>Código de Barras</td>
    </tr>
    <?php while($ver=mysqli_fetch_row($result)):
        $arraycodigos[] = (string)$ver[4];
    ?> 
    <tr>
        <td><?php echo $ver[0];?></td>
        <td><?php echo $ver[1];?></td>
        <td><?php echo $ver[2];?></td>
        <td><?php echo $ver[3];?></td>
        <td>
            <svg id='<?php echo "barcode".$ver[4];?>'></svg>
        </td>
    </tr>
    <?php endwhile;?>
</table>

<script type="text/javascript">
    function arrayjsonbarcode(j){
        json = JSON.parse(j);
        arr=[];
        for(var x in json){
            arr.push(json[x]);
        }
        return arr;
    }
    jsonvalor = '<?php echo json_encode($arraycodigos)?>';
    valores = arrayjsonbarcode(jsonvalor);

    for (var i = 0; i < valores.length; i++) {
        JsBarcode("#barcode"+valores[i], valores[i].toString(),{
            format: "codabar",
            lineColor: "#000",
            width: 2,
            height: 30,
            displayValue: true
        });
        
    }
</script>