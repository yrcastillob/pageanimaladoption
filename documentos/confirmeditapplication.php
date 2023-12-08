<?php

include "../php/connectDb.php";

session_start();
$ideditar = $_POST['ideditar'];
$nombre = $_POST['nameperson'];
$telefono = $_POST['number'];
$correo = $_POST['correo'];
$tipoanimal = $_POST['animalType'];
$autorizacion = $_POST['autorizacion'];

$sql = "UPDATE solicitudes SET nombre_completo = '$nombre', numero_telefonico = '$telefono', correo_electronico='$correo', tipo_animal= '$tipoanimal', autorizacion ='$autorizacion' WHERE id_solicitud = '$ideditar'";

if ($conn->query($sql) === TRUE){
   header("Location: manageapplications.php");


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
            
            <h1>Ocurrió un error al actualizar la aplicación.</h1>
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


