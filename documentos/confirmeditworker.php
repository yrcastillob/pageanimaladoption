<?php

include "../php/connectDb.php";

session_start();
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$tipodocumento = $_POST['tipodocumento'];
$numerodocumento = $_POST['numerodocumento'];
$fechanacimiento = $_POST['fechanacimiento'];
$sexo = $_POST['sexo'];
$rol = $_POST['rol'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$estadoactivacion = $_POST['estadoactivacion'];
$idtrabajador = $_POST['idtrabajador'];

if ($idtrabajador=="0000000001"){
    header("Location: manageworkers.php");
} else{
    $sql = "UPDATE trabajadores SET id_tipo_documento ='$tipodocumento', numero_identificacion ='$numerodocumento', nombres_trabajador ='$nombres', apellidos_trabajador ='$apellidos', fecha_nacimiento ='$fechanacimiento', id_sexo_biologico ='$sexo', id_rol ='$rol', correo_electronico ='$correo', contrasena ='$contrasena', estadoactivacion ='$estadoactivacion' WHERE id_trabajador = '$idtrabajador'";

    if ($conn->query($sql) === TRUE){
       header("Location: manageworkers.php");
    
    
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
                
                <h1>Ocurrió un error al actualizar el producto</h1>
                <p>Lo sentimos. Por favor, inténtelo nuevamente. Sera redirigido</p>
    
                </main>
    
                <script>
            setTimeout(function() {
                window.location.href = "manageworkers.php";
            }, 3000); 
          </script>
    
                
                </body>
                </html>';
    }
    
}


?>


