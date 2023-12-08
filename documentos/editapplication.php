<?php

include "../php/connectDb.php";

session_start();
$ideditar = $_POST['idporeditar'];

$sql = "SELECT * FROM solicitudes WHERE id_solicitud ='$ideditar'";
$result1 = mysqli_query($conn, $sql);

$sql3 = "SELECT * FROM trabajadores";
$result3 = mysqli_query($conn, $sql3);

if (mysqli_num_rows($result1) > 0) {
    $row = mysqli_fetch_assoc($result1);
    $id_solicitud = $row['id_solicitud'];
    $fecha = $row['fecha_solicitud'];
    $nombre = $row['nombre_completo'];
    $numero = $row['numero_telefonico'];
    $correo = $row['correo_electronico'];
    $tipoanimal = $row['tipo_animal'];
    $autorizacion = $row['autorizacion'];
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
<link rel="stylesheet" href="../css/manageservices.css">
<title>Servicios</title>
</head>
<body>
<div class="create-products">
    <h1>Datos aplicacion con id: '.$id_solicitud_formateado.'</h1>
    <h2>Haga los cambios que desee a la información del registro, si no quiere editar algún campo solo déjelo tal como está.</h2>
    <div class="formcontainer_form">
    <form action="confirmeditapplication.php" method="post" class="form">
    <input type="text" placeholder="Nombre completo persona" name="ideditar" value="'.$ideditar.'" style="display: none">

        <div class="form_containeritem">
            <label for="nameperson" class="form_label">Nombre aplicante</label>
            <input type="text" placeholder="Nombre completo persona" name="nameperson"  value="'.$nombre.'">
        </div>
        <div class="form_containeritem">
            <label for="number" class="form_label">Número telefónico</label>
            <input type="number" placeholder="Número telefónico" name="number"  value="'.$numero.'">
        </div>
        <div class="form_containeritem">
            <label for="correo" class="form_label">Correo electrónico</label>
            <input type="email" placeholder="correo@ejemplo.com" name="correo"  value="'.$correo.'">
        </div>
        <div class="form_containeritem">
            <label for="animalType" class="form_label">Tipo animal</label> 
            <input type="text"  name="animalType" value="'.$tipoanimal.'">
        </div>
        <div class="form_containeritem">
            <label for="autorizacion" class="form_label">Autoriza ser contactado</label>
            <input type="number" min="0" max="1" placeholder="1 para sí, 0 para no " name="autorizacion" value="'.$autorizacion.'">
        </div>

        <div class="form_containeritem_button">
                    <button type="submit">
                        Editar Solicitud
                    </button>
                    <a href="manageapplications.php">
                        Cancelar operación
                    </a>
                </div>
        
    </div>';
}else{
    header("location: manageapplications.php");
}
            
  mysqli_close($conn);
  
?>
