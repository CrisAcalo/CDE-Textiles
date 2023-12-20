<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente = $_POST['cliente'];
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];
    $metodo_pago = $_POST['metodo_pago'];

    $productosPrecios = [['Almohada', 10], ['Sabana', 20], ['Cobertor', 25], ['Funda_almohada', 5], ['Duvet', 40]];
    $clientesInfo = [
        ['Joe Castillos', '0459837461', '0938476145', 'joecastillos@gmail.com', 'Av. General Pato-calle Barbaros, casa 112'],
        ['Bryan Mayers', '0459837461', '0938476145', 'bryanmayers@gmail.com', 'Sector Universitario, casa 50'],
        ['Pedro Pasos', '0752837459', '0938476145', 'pedropasos@gmail.com', 'Conjunto Vida Nueva, casa 3'],
        ['Juan Costa', '0259857462', '0938476145', 'juancosta@gmail.com', 'Av. Eloy Alfaro, casa 10'],
        ['Carlos Bimbo', '0529537461', '0938476145', 'carlosbimbo@gmail.com', ' Ciudadela Maestros, casa 87']
    ];

    $indiceCiente = null;
    $indiceProducto = null;

    foreach ($clientesInfo as $indice => $clienteInf) {
        if ($clienteInf[0] === $cliente) {
            $indiceCiente = $indice;
            break;
        }
    }

    foreach ($productosPrecios as $indice => $productoPr) {
        if ($productoPr[0] === $producto) {
            $indiceProducto = $indice;
            break;
        }
    }

    $subtotal = $cantidad * $productosPrecios[$indiceProducto][1];
    $iva = $subtotal * 0.12;
    $total = $subtotal + $iva;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Formulario de Facturación</title>
</head>

<body style="
      font-family: 'Arial', sans-serif;
      text-align: center;
      padding: 50px;
      background-color: #f4f4f4;
    ">


    <div style="max-width: 600px; margin: 0 auto; border: 1px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h2 style="background-color: #007bff; color: #fff; padding: 10px 0; margin: 0;">Factura #0000001</h2>
        <div style="text-align:end;width:100%;padding:0;margin:0;">
            <p style="margin:20px 30px 0 0;"><?php echo $fecha ?></p>
        </div>
        <div style="text-align:start;width:100%;padding:0;margin:0;">
            <p style="margin:0 0 0 20px;"><?php echo 'Pago realizado por: '.$metodo_pago ?></p>
        </div>
        <div style="padding: 20px;">

            <div style="margin-bottom: 20px;">
                <h3 style="margin:0 0 20px 0;">Información del Cliente</h3>
                <table style="width: 100%;">
                    <tr>
                        <td style="text-align: left;">Nombre:</td>
                        <td style="text-align: left;"><?php echo $clientesInfo[$indiceCiente][0] ?></td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Cédula:</td>
                        <td style="text-align: left;"><?php echo $clientesInfo[$indiceCiente][1] ?></td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Celular:</td>
                        <td style="text-align: left;"><?php echo $clientesInfo[$indiceCiente][2] ?></td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Correo Electrónico:</td>
                        <td style="text-align: left;"><?php echo $clientesInfo[$indiceCiente][3] ?></td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Dirección:</td>
                        <td style="text-align: left;"><?php echo $clientesInfo[$indiceCiente][4] ?></td>
                    </tr>
                </table>
            </div>

            <div style="margin-bottom: 20px;">
                <h3 style="margin-bottom: 10px;">Detalles de la Factura</h3>
                <table style="width: 100%; border-collapse: collapse;">
                    <tr style="background-color: #f2f2f2;">
                        <th style="padding: 10px; border: 1px solid #ddd;">Producto</th>
                        <th style="padding: 10px; border: 1px solid #ddd;">Cantidad</th>
                        <th style="padding: 10px; border: 1px solid #ddd;">Precio Unitario</th>
                        <th style="padding: 10px; border: 1px solid #ddd;">Subtotal</th>
                    </tr>
                    <tr>
                        <td style="padding: 10px; border: 1px solid #ddd;"><?php echo $producto ?></td>
                        <td style="padding: 10px; border: 1px solid #ddd;"><?php echo $cantidad ?></td>
                        <td style="padding: 10px; border: 1px solid #ddd;"><?php echo $productosPrecios[$indiceProducto][1] ?></td>
                        <td style="padding: 10px; border: 1px solid #ddd;"><?php echo $subtotal ?></td>
                    </tr>
                </table>
            </div>
            <div>
                <h3 style="margin-bottom: 10px;">Resumen de la Factura</h3>
                <table style="width: 40%;" align="right">
                    <tr>
                        <td style="text-align: left;">Subtotal:</td>
                        <td style="text-align: right;"><?php echo $subtotal ?></td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">IVA (12%):</td>
                        <td style="text-align: right;"><?php echo $iva ?></td>
                    </tr>
                    <tr style="background-color: #f2f2f2;">
                        <td style="text-align: left; font-weight: bold;">Total:</td>
                        <td style="text-align: right; font-weight: bold;"><?php echo $total ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>