<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = validarCampo($_POST["nombres"]);
    $apellidoPaterno = validarCampo($_POST["apellido_paterno"]);
    $apellidoMaterno = validarCampo($_POST["apellido_materno"]);
    $cedula = validarCampo($_POST["cedula"]);
    $celular = validarCampo($_POST["celular"]);
    $correo = validarCampo($_POST["correo"]);
    $direccion = validarCampo($_POST["direccion"]);

    function validarCampo($campo) {
        $campo = trim($campo); // Elimina espacios en blanco al inicio y al final
        $campo = stripslashes($campo); // Elimina barras invertidas
        $campo = htmlspecialchars($campo); // Convierte caracteres especiales en entidades HTML
        return $campo;
    }

    $cedulaValida = preg_match("/^[0-9]{10}$/", $cedula);
    $celularValido = preg_match("/^[0-9]{10}$/", $celular);

    if ($cedulaValida && $celularValido) {
        echo "Nombres: $nombres <br>";
        echo "Apellido Paterno: $apellidoPaterno <br>";
        echo "Apellido Materno: $apellidoMaterno <br>";
        echo "Cedula: $cedula <br>";
        echo "Celular: $celular <br>";
        echo "Correo Electrónico: $correo <br>";
        echo "Dirección Domiciliaria: $direccion <br>";
    } else {
        echo "Alguno de los campos no es válido.";
    }
}
?>
