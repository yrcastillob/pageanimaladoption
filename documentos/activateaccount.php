<?php

include "../php/connectDb.php";

$workercode = $_POST['workercode'];
$correo = $_POST['email'];
$contrasena = $_POST['password'];

        $sql0 = "SELECT correo_electronico FROM trabajadores WHERE correo_electronico = '$correo'";

        $result0 = mysqli_query($conn, $sql0);

        if (mysqli_num_rows($result0) > 0) {
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
            
            <h1>Ocurrió un error al activar su cuenta</h1>
            <p>El correo ya existe.</p>
            <a href="registrationform.php">Regresar a la página de registro</a>
            
            </main>
            
            </body>
            </html>';
        } else{

            $sql = "UPDATE trabajadores SET correo_electronico = '$correo', contrasena = '$contrasena', estadoactivacion='1' WHERE id_trabajador = '$workercode' AND estadoactivacion ='0'";

        $result1 = mysqli_query($conn, $sql);
        
        if ($result1 === false || mysqli_affected_rows($conn) === 0) {

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
            
            <h1>Ocurrió un error al activar su cuenta</h1>
            <p>Lo sentimos. Por favor, inténtelo nuevamente.</p>
            <a href="registrationform.php">Regresar a la página de registro</a>
            
            </main>
            
            </body>
            </html>';

        }else{

            $sql2 = "SELECT nombres_trabajador, apellidos_trabajador, correo_electronico FROM trabajadores WHERE id_trabajador = '$workercode'";
            $result2 = mysqli_query($conn, $sql2);
        
            if (mysqli_num_rows($result2) > 0) {
                $row2 = mysqli_fetch_assoc($result2);
        
                $nombres_trabajador = $row2['nombres_trabajador'];
                $apellidos_trabajador = $row2['apellidos_trabajador'];
                $correo_trabajador = $row2['correo_electronico'];
                
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
    <title>Activación exitosa</title>
</head>
<body>
    
    <main class="main_result_box">

        <h1>Su cuenta fue activada.</h1>
        <br>
        <div class="main-result_box_variables">
            <p><em class="titleprocess">Nombre:</em> '. $nombres_trabajador.' '.$apellidos_trabajador.'</p>
            <p><em class="titleprocess">Correo:</em> '. $correo_trabajador.'</p>
        </div>
        <p class="thankfulmessage">Muchas gracias por activar su cuenta. Ya puede iniciar sesión.</p>
        <a href="login.php">Iniciar Sesión</a>

    </main>

</body>
</html>';
}
        }
        }

        

  
  mysqli_close($conn);

?>
