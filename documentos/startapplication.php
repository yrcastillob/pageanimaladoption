<?php

include "../php/connectDb.php";

$nombre = $_POST['nombre'];
$telefono = $_POST['numerotel'];
$correo = $_POST['correo'];
$tipoanimal = $_POST['animalType'];
$autorizacion = $_POST['autorizacion'];

$errorMensaje = '
            
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
<p><em class="titleprocess">Error:</em> '. $mensaje.'</p>
</div>
<p class="thankfulmessage">Intente de nuevo por favor</p>
<a href="../index.php">Regresar a la página principal</a>

</main>

</body>
</html>';


if ($autorizacion == "on" ){
    $autorizacion = 1;
} else{
    $autorizacion = 0;
}

/* VARIABLE SQL CON LOS DATOS*/
$sql = "INSERT INTO solicitudes (nombre_completo, numero_telefonico, correo_electronico, tipo_animal, autorizacion) VALUES ('$nombre', '$telefono', '$correo', '$tipoanimal','$autorizacion')" ;

if (mysqli_query($conn, $sql)) {
    // Obtener el ID de la solicitud recién insertada
    $id_solicitud = mysqli_insert_id($conn);

    /* INSERTAR ESTADO DE SOLICITUD */
    $sql2 = "INSERT INTO estadosolicitud (id_solicitud, id_trabajador) VALUES ('$id_solicitud','0000000001')";
    
    if (mysqli_query($conn, $sql2)) {
        // OBTENER DETALLES DE LA SOLICITUD
        $sql3 = "SELECT nombre_completo, correo_electronico, tipo_animal FROM solicitudes WHERE id_solicitud = '$id_solicitud'";
        $sql4 = "SELECT estado, comentarios_estado_solicitud FROM estadosolicitud WHERE id_solicitud = '$id_solicitud'";
        $result = mysqli_query($conn, $sql3);
        $result2 = mysqli_query($conn, $sql4);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $nombre_solicitud = $row['nombre_completo'];
            $correo_solicitud = $row['correo_electronico'];
            $tipo_animal_solicitud = $row['tipo_animal'];
            $row2 = mysqli_fetch_assoc($result2);
            $estado = $row2['estado'];
            $comentarios_estado_solicitud = $row2['comentarios_estado_solicitud'];
            $id_solicitud_formateado = sprintf('%011s', $id_solicitud);
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

        <h1>¡Registro exitoso!</h1>
        <p>Por favor, guarde su número de proceso de adopción en caso de que quiera verificar su estado.</p>
        <div class="main-result_box_variables">
            <p class="processid"><em class="titleprocess">Número de proceso:</em> <em class="titleprocessid">'.$id_solicitud_formateado.'</em></p>
            <p><em class="titleprocess">Nombre:</em> '. $nombre_solicitud.'</p>
            <p><em class="titleprocess">Correo:</em> '. $correo_solicitud.'</p>
            <p><em class="titleprocess">Estado del proceso:</em> '. $estado.'</p>
            <p><em class="titleprocess">Comentarios del proceso:</em> '. $comentarios_estado_solicitud.'</p>
        </div>
        <p class="thankfulmessage">Muchas gracias por su interés. Lo(a) estaremos contactando en el transcuros de la próxima semana. Si lo desea puede cerrar esta página.</p>
        <a href="../index.php">Regresar a la página principal</a>

    </main>

</body>
</html>';
        } else {
            $mensaje = "Error al obtener detalles de la solicitud: " . mysqli_error($conn);
            echo $errorMensaje;
            
        }
    } else {
        $mensaje = "Error: " . $sql2 . "<br>" . mysqli_error($conn);
        echo $errorMensaje;

    }
} else {
    $mensaje = "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo $errorMensaje;

}
  
  mysqli_close($conn);

?>
