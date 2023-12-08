<?php

include "../php/connectDb.php";

session_start();
$titulo = $_POST['title'];
$descripcion = $_POST['description'];
$image = $_POST['imagename'];
$tipoanimal = $_POST['animalType'];

$sql = "INSERT INTO servicios (nombre_servicio, descripcion_servicio, url_img, id_tipo_animal) VALUES ('$titulo', '$descripcion', '$image','$tipoanimal')";


if ($conn->query($sql) === TRUE){
    header("Location: manageservices.php");

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
            
            <h1>Ocurrió un error al agregar el producto</h1>
            <p>Lo sentimos. Por favor, inténtelo nuevamente. Sera redirigido</p>

            </main>

            <script>
        setTimeout(function() {
            window.location.href = "manageservices.php";
        }, 3000); 
      </script>

            
            </body>
            </html>';
}

?>
