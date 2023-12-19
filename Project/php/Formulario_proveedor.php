<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>
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
    $horarioDesde = $_POST['horarioDesde'];
    $horarioHasta = $_POST['horarioHasta'];
    $notas = $_POST['notas'];

    // echo "Nombre de la Empresa: $nombre_empresa <br>";
    // echo "Tipo de Producto: $tipo_producto <br>";
    // echo "Nombre del Contacto: $contacto_nombre <br>";
    // echo "Correo Electrónico del Contacto: $contacto_email <br>";
    // echo "Teléfono: $telefono <br>";
    // echo "Dirección: $direccion <br>";
    // echo "Ciudad: $ciudad <br>";
    // echo "País: $pais <br>";
    // echo "Sitio Web: $sitio_web <br>";
    // echo "Descripción de la Empresa: $descripcion <br>";
    // echo "Métodos de Pago Aceptados: " . implode(", ", $metodos_pago) . "<br>";
    // echo "Horario de Atención: $horario <br>";
    // echo "Notas Adicionales: $notas <br>";
}
?>

<body style="
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      text-align: center;
    ">
    <div style="
        width:100%;
        height: 100vh;
        margin: 0;
        background-color: #f4f4f4;
        width: 100%;
      ">
        
        <div style="
          width: 100%;
          background-color: #fff;
          padding: 20px;
          border-radius: 8px;
          
          box-sizing: border-box;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          overflow-x: auto;
        ">
            <table style="width: 100%; white-space: nowrap; border-collapse: collapse;">
                <caption style="font-size: 1.2rem; margin-bottom: 10px;color: #007bff;">
                    Clientes
                </caption>
                <thead style="background-color: #007bff;color: #fff;">
                    <tr>
                        <th style="padding: 10px">Nombre</th>
                        <th>Nombre</th>
                        <th>Producto</th>
                        <th>Representante</th>
                        <th>Email</th>
                        <th>Celular</th>
                        <th>Dirección</th>
                        <th>País</th>
                        <th>Pag. Web</th>
                        <th>Descripción</th>
                        <th>Métodos de Pago</th>
                        <th>Horario Atención</th>
                        <th>Comentarios</th>
                        <th>OP</th>
                    </tr>
                </thead>

                <tr style="border-bottom: 1px solid #007bff52;">
                    <td style="padding: 0 5px"><?php echo $nombre_empresa ?></td>
                    <td style="padding: 0 5px"><?php echo $tipo_producto ?></td>
                    <td style="padding: 0 5px"><?php echo $contacto_nombre ?></td>
                    <td style="padding: 0 5px"><?php echo $contacto_email ?></td>
                    <td style="padding: 0 5px"><?php echo $telefono ?>
                    <td style="padding: 0 5px"><?php echo $direccion ?></td>
                    <td style="padding: 0 5px"><?php echo $ciudad ?></td>
                    <td style="padding: 0 5px"><?php echo $pais ?></td>
                    <td style="padding: 0 5px"><?php echo $sitio_web ?></td>
                    <td style="padding: 0 5px"><?php echo $descripcion ?>
                    <td style="padding: 0 5px"><?php echo $metodos_pago ?></td>
                    <td style="padding: 0 5px"><?php echo $horarioDesde .' / '. $horarioHasta ?></td>
                    <td style="padding: 0 5px"><?php echo $notas ?></td>
                    
                    <td style="padding: 0 5px">
                        <button style="
                  padding: 6px 6px 4px 6px;
                  background-color: #5fd300;
                  outline: none;
                  border: none;
                  border-radius: 4px;
                  color: #fff;
                ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                            </svg>
                        </button>
                        <button style="
                  padding: 6px 6px 4px 6px;
                  background-color: #d30000;
                  outline: none;
                  border: none;
                  border-radius: 4px;
                  color: #fff;
                ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                            </svg>
                        </button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>