<?php

include "../php/connectDb.php";

session_start();
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];


$sql = "SELECT * FROM trabajadores WHERE correo_electronico = '$correo' AND contrasena='$contrasena'";

$result1 = mysqli_query($conn, $sql);
        
    if (mysqli_num_rows($result1) > 0) {
        $row = mysqli_fetch_assoc($result1);
        $id_trabajador = $row['id_trabajador'];
        $tipo_documento = $row['id_tipo_documento'];
        $numeroid = $row['numero_identificacion'];
        $nombres = $row['nombres_trabajador'];
        $apellidos = $row['apellidos_trabajador'];
        $fnacimiento = $row['fecha_nacimiento'];
        $sexo = $row['id_sexo_biologico'];
        $rol = $row['id_rol'];        
        $_SESSION['idtrabajador'] = $id_trabajador;
        $_SESSION['tipodocumento'] = $tipo_documento;
        $_SESSION['numeroid'] = $numeroid;
        $_SESSION['nombres'] = $nombres;
        $_SESSION['apellidos'] = $apellidos;
        $_SESSION['fnacimiento'] = $fnacimiento;
        $_SESSION['sexo'] = $sexo;
        $_SESSION['correo'] = $correo;
        $_SESSION['rol'] = $rol;
        $_SESSION['contrasena'] = $contrasena;

        if ($rol == 1){
            header("location: trabajador.php");

        }else if($rol == 2){
            header("location: admin.php");
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
        
        <h1>Error con su cuenta</h1>
        <p>Hay un error con su cuenta, contacte al admnistrador e indique el error ERR_ROL.</p>
        <p class="thankfulmessage">Intente de nuevo por favor.</p>
        <a href="login.php">Regresar a login</a>
        
        </main>
        
        </body>
        <script>
        setTimeout(function() {
            window.location.href = "login.php";
        }, 4000); // Redirige después de 5 segundos
      </script>
        </html>';
        }

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
        
        <h1>Datos inválidos</h1>
        <p>Verifique sus credenciales.</p>
        <p class="thankfulmessage">Intente de nuevo por favor.</p>
        <a href="login.php">Regresar a login</a>
        
        </main>
        
        </body>
        <script>
        setTimeout(function() {
            window.location.href = "login.php";
        }, 4000); // Redirige después de 5 segundos
      </script>
        </html>';

    }
        
  
  mysqli_close($conn);

?>
