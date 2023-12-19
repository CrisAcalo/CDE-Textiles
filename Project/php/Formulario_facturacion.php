<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente = $_POST['cliente'];
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];
    $metodo_pago = $_POST['metodo_pago'];

    echo "<h2>Factura Generada:</h2>";
    echo "Cliente: $cliente <br>";
    echo "Producto: $producto <br>";
    echo "Cantidad: $cantidad <br>";
    echo "Fecha: $fecha <br>";
    echo "Método de Pago: $metodo_pago <br>";
}
?>
