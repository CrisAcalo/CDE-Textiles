<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreMateriaPrima = $_POST['nombreMateriaPrima'];
    $codigoMateriaPrima = $_POST['codigoMateriaPrima'];
    $proveedorMateriaPrima = $_POST['proveedorMateriaPrima'];
    $cantidadInicial = $_POST['cantidadInicial'];
    $unidadMedidaMateriaPrima = $_POST['unidadMedidaMateriaPrima'];
    $fechaRecepcion = $_POST['fechaRecepcion'];
    $fechaCaducidad = $_POST['fechaCaducidad'];
    $condicionesAlmacenamiento = $_POST['condicionesAlmacenamiento'];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Registro de Material</title>
</head>

<body style="
      font-family: 'Arial', sans-serif;
      padding: 50px;
      background-color: #f4f4f4;
    ">


    <div style="max-width: 600px; margin: 0 auto; border: 1px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h2 style="background-color: #007bff; color: #fff; padding: 10px 0; margin: 0;text-align:center">MATERIAL #AG2345</h2>

        <div style="padding: 20px;">
            <table style="width:100%">
                <tr>
                    <td style="padding:15px 0;width:25%;"><strong>Producto:</strong></td>
                    <td style="width:25%;"><?php echo $nombreMateriaPrima ?></td>

                    <td style="width:25%;"><strong>Proveedor:</strong></td>
                    <td style="width:25%;"><?php echo $proveedorMateriaPrima ?></td>
                </tr>
                <tr>
                    <td style="padding:15px 0;width:25%;"><strong>Codigo:</strong></td>
                    <td style="width:25%;"><?php echo $codigoMateriaPrima ?></td>

                    <td style="width:25%;"><strong>Fecha de recepción:</strong></td>
                    <td style="width:25%;"><?php echo $fechaRecepcion ?></td>
                </tr>
                <tr>
                    <td style="padding:15px 0;width:25%;"><strong>Cantidad:</strong></td>
                    <td style="width:25%;"><?php echo $cantidadInicial . $unidadMedidaMateriaPrima ?></td>

                    <td style="width:25%;"><strong>Fecha de Caducidad:</strong></td>
                    <td style="width:25%;"><?php $caducidad = ($fechaCaducidad) ? $fechaCaducidad : 'No aplica';
                                            echo $caducidad ?></td>
                </tr>
                <tr>
                    <td colspan='4'>
                        <div style="border-bottom: 2px solid #007bff52;margin:10px 0 20px 0"></div>
                        <strong>Condiciones de Almacenamiento</strong>
                        <p><?php echo $condicionesAlmacenamiento ?></p>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</body>

</html>