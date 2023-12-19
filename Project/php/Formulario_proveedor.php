<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_empresa = $_POST['nombre_empresa'];
    $tipo_producto = $_POST['tipo_producto'];
    $contacto_nombre = $_POST['contacto_nombre'];
    $contacto_email = $_POST['contacto_email'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $sitio_web = $_POST['sitio_web'];
    $descripcion = $_POST['descripcion'];
    $metodos_pago = $_POST['metodos_pago']; 
    $horario = $_POST['horario'];
    $notas = $_POST['notas'];

    echo "Nombre de la Empresa: $nombre_empresa <br>";
    echo "Tipo de Producto: $tipo_producto <br>";
    echo "Nombre del Contacto: $contacto_nombre <br>";
    echo "Correo Electrónico del Contacto: $contacto_email <br>";
    echo "Teléfono: $telefono <br>";
    echo "Dirección: $direccion <br>";
    echo "Ciudad: $ciudad <br>";
    echo "País: $pais <br>";
    echo "Sitio Web: $sitio_web <br>";
    echo "Descripción de la Empresa: $descripcion <br>";
    echo "Métodos de Pago Aceptados: " . implode(", ", $metodos_pago) . "<br>";
    echo "Horario de Atención: $horario <br>";
    echo "Notas Adicionales: $notas <br>";
}
?>
