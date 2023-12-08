<?php

include "../php/connectDb.php";

session_start();

$contrasenanueva = $_POST['contrasenanueva'];


if (isset($_SESSION['correo'])) {
    $correo = $_SESSION['correo'];
    $rol = $_SESSION['rol'];
    $id_trabajador = $_SESSION['idtrabajador'];
    $tipo_documento = $_SESSION['tipodocumento'];
    $numeroid = $_SESSION['numeroid'];
    $nombres = $_SESSION['nombres'] ;
    $apellidos = $_SESSION['apellidos'];
    $fnacimiento = $_SESSION['fnacimiento'];
    $sexo = $_SESSION['sexo'];
    $contrasena = $_SESSION['contrasena'];
    

    $sql = "UPDATE trabajadores SET contrasena = '$contrasenanueva' WHERE id_trabajador = '$id_trabajador'";
    
        $result1 = mysqli_query($conn, $sql);
        
        if ($result1 === false || mysqli_affected_rows($conn) === 0){

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
            
            <h1>Ocurrió un error al cambiar su contraseña</h1>
            <p>Lo sentimos. Por favor, inténtelo nuevamente.</p>
            <form action="redirection.php" method="post" class="form" id="formchangepassword" style="display:none">
            <input type="email" name="correo" value="'.$correo.'" id="correoInput">
            <input type="password" name="contrasena" value="'.$contrasena.'" id="contrasenaInput">
            <button type="submit" id="submitButton"></button>
            </form> 
            
            </main>

            <script>
    setTimeout(function() {
        var contrasenaInput = document.getElementById("contrasenaInput");
        var correoInput = document.getElementById("correoInput");
        var submitButton = document.getElementById("submitButton");

        if (contrasenaInput && correoInput && submitButton) {
            // Hace clic automáticamente en el botón de enviar
            submitButton.click();
        } else {
            console.error("No se pudieron encontrar los elementos del formulario.");
        }
    }, 4000); // Redirige después de 4 segundos
</script>

            
            </body>
            </html>';

        } else{

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
            <title>Exito</title>
            </head>
            <body>
            
            <main class="main_result_box">
            
            <h1>Actualización de contraseña exitosa. Será redirigido.</h1>
            <form action="redirection.php" method="post" class="form" id="formchangepassword" style="display:none">
            <input type="email" name="correo" value="'.$correo.'" id="correoInput">
            <input type="password" name="contrasena" value="'.$contrasenanueva.'" id="contrasenaInput">
            <button type="submit" id="submitButton"></button>
            </form>  
            </main>

            <script>
    setTimeout(function() {
        var contrasenaInput = document.getElementById("contrasenaInput");
        var correoInput = document.getElementById("correoInput");
        var submitButton = document.getElementById("submitButton");

        if (contrasenaInput && correoInput && submitButton) {
            // Hace clic automáticamente en el botón de enviar
            submitButton.click();
        } else {
            console.error("No se pudieron encontrar los elementos del formulario.");
        }
    }, 4000); // Redirige después de 4 segundos
</script>

            
            </body>
            </html>';
        }

    } else{

}

?>
