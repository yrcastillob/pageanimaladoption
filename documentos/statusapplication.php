<?php

include "../php/connectDb.php";


$correo = $_POST['correo'];
$numeroid = $_POST['idproceso'];


        $sql = "SELECT * FROM solicitudes WHERE id_solicitud = '$numeroid' AND correo_electronico='$correo'";

        $result1 = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result1) > 0) {
        
            $sql2 = "SELECT * FROM estadosolicitud WHERE id_solicitud = '$numeroid'";
            $result2 = mysqli_query($conn, $sql2);

            

            if (mysqli_num_rows($result2) > 0) {
                $row = mysqli_fetch_assoc($result1);
        
                $nombre_solicitud = $row['nombre_completo'];
                $correo_solicitud = $row['correo_electronico'];
                $tipo_animal_solicitud = $row['tipo_animal'];
     
                $id_solicitud_formateado = sprintf('%011s', $numeroid);
        
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
    <title>Resultado Formulario Adopción</title>
</head>
<body>
    
    <main class="main_result_box">

        <h1>El estado de su solicitud es el siguiente.</h1>
        <br>
        <div class="main-result_box_variables">';

        echo '
    <table border="1">
        <thead>
            <tr>
                <th>ID Solicitud</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Comentarios</th>
            </tr>
        </thead>
        <tbody>';
        foreach ($result2 as $registro2) {
            echo '<tr>';
            echo '<td>' . $id_solicitud_formateado. '</td>';
            echo '<td>' . $nombre_solicitud . '</td>';
            echo '<td>' . $correo_solicitud . '</td>';
            echo '<td>' . $registro2['fecha_estado'] . '</td>';
            echo '<td>' . $registro2['estado'] . '</td>';
            echo '<td>' . $registro2['comentarios_estado_solicitud'] . '</td>';
            echo '</tr>';
        }
        echo '
        </tbody>
        </table>
        </div>
        <p class="thankfulmessage">Muchas gracias por su interés. Lo(a) estaremos contactando en el transcuros de la próxima semana para darle más información. Si lo desea puede cerrar esta página.</p>
        <a href="../index.php">Regresar a la página principal</a>
        

    </main>

</body>
</html>';
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
            <title>Resultado Formulario Adopción</title>
            </head>
            <body>
            
            <main class="main_result_box">
            
            <h1>Ocurrió un error</h1>
            <p>Verifique la información que sale.</p>
            <div class="main-result_box_variables">
            <p><em class="titleprocess">Error:</em> No se encontraron registros para las actualizaciones </p>
            </div>
            <p class="thankfulmessage">Intente de nuevo por favor</p>
            <a href="../index.php">Regresar a la página principal</a>
            
            </main>
            
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
            <title>Resultado Formulario Adopción</title>
            </head>
            <body>
            
            <main class="main_result_box">
            
            <h1>Ocurrió un error</h1>
            <p>Verifique la información que sale.</p>
            <div class="main-result_box_variables">
            <p><em class="titleprocess">Error:</em> No se encontró la solicitud. </p>
            </div>
            <p class="thankfulmessage">Intente de nuevo por favor</p>
            <a href="../index.php">Regresar a la página principal</a>
            
            </main>
            
            </body>
            </html>';
        }
        
  
  mysqli_close($conn);

?>
