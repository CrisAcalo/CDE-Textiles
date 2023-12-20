<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_producto = $_POST['tipo_producto'];
    $tamano = $_POST['tamano'];
    $precio = $_POST['precio'];
    $tipo_tela = $_POST['tipo_tela'];
    $descripcion = $_POST['descripcion'];
    $stock = $_POST['stock'];
    $fechaFabricacion = $_POST['fechaFabricacion'];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Registro de Producto</title>
</head>

<body style="
      font-family: 'Arial', sans-serif;
      padding: 50px;
      background-color: #f4f4f4;
    ">
    <div style="max-width: 600px; margin: 0 auto; border: 1px solid #ccc; border-radius: 8px;box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h2 style="background-color: #007bff; color: #fff; padding: 10px 0; margin: 0;text-align:center">PRODUCTO</h2>
        <div style="padding: 20px;">
            <table style="width:100%">
                <tr>
                    <td style="padding:15px 0;width:25%;"><strong>Producto:</strong></td>
                    <td style="width:25%;"><?php echo $tipo_producto ?></td>

                    <td style="width:25%;"><strong>Precio:</strong></td>
                    <td style="width:25%;"><?php echo $precio ?></td>
                </tr>
                <tr>
                    <td style="padding:15px 0;width:25%;"><strong>Tamaño:</strong></td>
                    <td style="width:25%;"><?php echo $tamano ?></td>

                    <td style="width:25%;"><strong>Fecha de recepción:</strong></td>
                    <td style="width:25%;"><?php echo $stock ?></td>
                </tr>
                <tr>
                    <td style="padding:15px 0;width:25%;"><strong>Material Usado:</strong></td>
                    <td style="width:25%;"><?php echo $tipo_tela ?></td>

                    <td style="width:25%;"><strong>Fecha de Fabricación:</strong></td>
                    <td style="width:25%;"><?php echo $fechaFabricacion ?></td>
                </tr>
                <tr>
                    <td colspan='4'>
                        <div style="border-bottom: 2px solid #007bff52;margin:10px 0 20px 0"></div>
                        <strong>Descripción</strong>
                        <p><?php echo $descripcion ?></p>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</body>

</html>