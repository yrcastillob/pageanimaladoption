<?php

include "../php/connectDb.php";

session_start();

$nombre = $_POST['nameperson'];
$telefono = $_POST['number'];
$correo = $_POST['correo'];
$tipoanimal = $_POST['animalType'];
$autorizacion = $_POST['autorizacion'];

/* VARIABLE SQL CON LOS DATOS*/
$sql = "INSERT INTO solicitudes (nombre_completo, numero_telefonico, correo_electronico, tipo_animal, autorizacion) VALUES ('$nombre', '$telefono', '$correo', '$tipoanimal','$autorizacion')" ;

if (mysqli_query($conn, $sql)) {
    // Obtener el ID de la solicitud recién insertada
    $id_solicitud = mysqli_insert_id($conn);

    /* INSERTAR ESTADO DE SOLICITUD */
    $sql2 = "INSERT INTO estadosolicitud (id_solicitud, id_trabajador) VALUES ('$id_solicitud','0000000001')";
    if (mysqli_query($conn, $sql2)) {
        header("Location: manageapplications.php");
    } else {
        echo '
            <!DOCTYPE html>
            <html lang="es">
            <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,1000;1,200;1,300;1,400;1,500;1,600;1,800;1,1000&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="../css/universal.css">
            <link rel="stylesheet" href="../css/startapplication.css">
            <title>Error</title>
            </head>
            <body>
            
            <main class="main_result_box">
            
            <h1>Ocurrió un error al crear la solicitud</h1>
            <p>Lo sentimos. Por favor, inténtelo nuevamente. Sera redirigido</p>

            </main>

            <script>
        setTimeout(function() {
            window.location.href = "manageapplications.php";
        }, 3000); 
      </script>

            
            </body>
            </html>';
    }
}else{
    echo '
            <!DOCTYPE html>
            <html lang="es">
            <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,1000;1,200;1,300;1,400;1,500;1,600;1,800;1,1000&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="../css/universal.css">
            <link rel="stylesheet" href="../css/startapplication.css">
            <title>Error</title>
            </head>
            <body>
            
            <main class="main_result_box">
            
            <h1>Ocurrió un error al crear la solicitud</h1>
            <p>Lo sentimos. Por favor, inténtelo nuevamente. Sera redirigido</p>

            </main>

            <script>
        setTimeout(function() {
            window.location.href = "manageapplications.php";
        }, 3000); 
      </script>

            
            </body>
            </html>';
}

?>
