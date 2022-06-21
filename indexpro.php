<?php 
require('ds.php');

  
    $sentencia=$bd->query("SELECT *FROM productos");
    $productos=$sentencia->fetchALL(PDO::FETCH_OBJ);
    




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZzetaPC</title>
</head>
<body>
    <div>
    <form action="guardarpro.php" method="POST">
        <div>
            <label for="">ID DEL PRODUCTO</label>
            <br>
            <input type="text" name="idProducto">
        </div>

            <div>
                <label for="">NOMBRE DEL PRODUCTO</label>
                <br>
                <input type="text" name="nombreProducto">
            </div>

            <div>
                <label for="">REFERENCIA</label>
                <br>
                <input type="text" name="referencia">
            </div>
            <div>
                <label for="">STOCK</label>
                <br>
                <input type="text" name="stock">
            </div>
            <div>
                <label for="">VALOR DE  COMPRA</label>
                <br>
                <input type="text" name="valorCompra">
            </div>
            <div>
                <label for="">VALOR DE VENTA</label>
                <br>
                <input type="text" name="valorVenta">
            </div>
            <div>
                <label for="">ACTIVO</label>
                <br>
                <input type="text" name="activo">
            </div>
            <div>
                <label for="">ID ADMINISTRADOR</label>
                <br>
                <input type="text" name="id_admin1">
            </div>

          

            <div>
           <input type="reset" value="Limpiar">
             <input type="submit" name="bntenviar">
            </div>

        </form>


        <div class="containertabla">
            <table>
                <tr>
                    <td>id_producto</td>
                    <td>nom_producto</td>
                    <td>referencia</td>
                    <td>stock</td>
                    <td>valor_compra</td>
                    <td>valor_venta</td>
                    <td>activo</td>
                    <td>id_admin</td>
               
                </tr>

            <?php 
            foreach($productos as $producto){
              ?>  
              <tr>
                  <td><?php echo $producto->id_producto ?></td>
                  <td><?php echo $producto->nom_pro ?></td>
                  <td><?php echo $producto->referencia ?></td>
                  <td><?php echo $producto->stock ?></td>
                  <td><?php echo $producto->valor_compra?></td>
                  <td><?php echo $producto->valor_venta ?></td>
                  <td><?php echo $producto->activo ?></td>
                  <td><?php echo $producto->id_administrador1 ?></td>
                  <td><a href="preactualizarpro.php?id=<?php echo $producto->id_producto; ?>">Actualizar</a></td>
                  <td><a href="eliminarpro.php?id=<?php echo $producto->id_producto; ?>">Eliminar</a></td>
              </tr>
              <?php
            }
            ?>
            </table>
        </div>
    </div>
</body>
</html>