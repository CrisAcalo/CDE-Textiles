<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_producto = $_POST['tipo_producto'];
    $tamano = $_POST['tamano'];
    $precio = $_POST['precio'];
    $tipo_tela = $_POST['tipo_tela'];
    $descripcion = $_POST['descripcion'];
    $stock = $_POST['stock'];

    echo "Tipo de Producto: $tipo_producto <br>";
    echo "Tamaño: $tamano <br>";
    echo "Precio: $precio <br>";
    echo "Tipo de Tela: $tipo_tela <br>";
    echo "Descripción: $descripcion <br>";
    echo "Stock: $stock <br>";
}
?>
