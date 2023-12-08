<?php

include "../php/connectDb.php";

session_start();
$idbuscar = $_POST['idporbuscar'];

$sql = "SELECT * FROM solicitudes WHERE id_solicitud ='$idbuscar'";

$result1 = mysqli_query($conn, $sql);
        
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
    <div class="formcontainer_form">
    <div class="formcontainer_form">
    <form action="manageapplications.php" method="post" class="form">
        <div class="form_containeritem">
            <label for="nameperson" class="form_label">Fecha aplicacion</label>
            <input type="text" placeholder="Nombre completo persona" name="nameperson" disabled value="'.$fecha.'">
        </div>
        <div class="form_containeritem">
            <label for="nameperson" class="form_label">Nombre aplicante</label>
            <input type="text" placeholder="Nombre completo persona" name="nameperson" disabled value="'.$nombre.'">
        </div>
        <div class="form_containeritem">
            <label for="number" class="form_label">Número telefónico</label>
            <input type="number" placeholder="Número telefónico" name="number" disabled value="'.$numero.'">
        </div>
        <div class="form_containeritem">
            <label for="correo" class="form_label">Correo electrónico</label>
            <input type="email" placeholder="correo@ejemplo.com" name="correo" disabled value="'.$correo.'">
        </div>
        <div class="form_containeritem">
            <label for="animalType" class="form_label">Tipo animal</label> 
            <input type="email"  name="animalType" disabled value="'.$tipoanimal.'">
        </div>
        <div class="form_containeritem">
            <label for="animalType" class="form_label">Autoriza ser contactado</label>
            <input type="email" placeholder="correo@ejemplo.com" name="correo" disabled value="'.$autorizacion.'">
        </div>
        
        <div class="form_containeritem_button">
            <button type="submit">
                Regresar
            </button>
        </div>
        
    </form>
        </div>
    </div>';
}
            
  mysqli_close($conn);
  
?>
