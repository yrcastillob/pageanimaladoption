<?php
session_start();

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
    if ($rol == 2){
        header("location: admin.php");
    }
    else{

        include("menucolaborador.php");

        echo '
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,1000;1,200;1,300;1,400;1,500;1,600;1,800;1,1000&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="../css/misdatos.css">
            <link rel="stylesheet" href="../css/universal.css">
            <title>Mis datos</title>
        </head>
        <body>
            <div class="data_container">
            <h1>Sus datos personales:</h1>
            <ul>
                <li>Nombres: '.$nombres.'<li>     
                <li>Apellidos: '.$apellidos.'<li>  
                <li>Codigo trabajador: '.$id_trabajador.'<li>  
                <li>Correo: '.$correo.'<li>      
                <h2>Si desea actualizar su contraseña ingrese la nueva contraseña aquí.</h2>
                <form action="changepassword.php" method="post" class="form">
                    <li>Contraseña: <input type="password" placeholder="Contraseña Nueva" name="contrasenanueva" required><li>  
                    <button type="submit" class="form_containeritem_button">
                        <img src="http://localhost/dwv/images/sendform.svg" alt="Enviar">
                        Actualizar Contraseña
                    </button>
                </form> 
            </ul>
            </div>
              
        </body>
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
        <p>Ingrese sus credenciales por favor.</p>
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
?>
