<?php

include "../php/connectDb.php";

session_start();

$idbuscar = $_POST['idporbuscar'];
$sql = "SELECT * FROM estadosolicitud WHERE id_estado_solicitud ='$idbuscar'";

$result1 = mysqli_query($conn, $sql);
        
if (mysqli_num_rows($result1) > 0) {

    $row = mysqli_fetch_assoc($result1);
    $id_estado = $row['id_estado_solicitud'];
    $fecha = $row['fecha_estado'];
    $estado = $row['estado'];
    $comentario = $row['comentarios_estado_solicitud'];
    $id_solicitud = $row['id_solicitud'];
    $id_trabajador = $row['id_trabajador'];
    $id_estado_formateado = sprintf('%011s', $id_estado);    
    $id_solicitud_formateado = sprintf('%011s', $id_solicitud);    
    $id_trabajador_formateado = sprintf('%011s', $id_trabajador);    

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
<title>Estados Aplicación</title>
</head>
<body>
<div class="create-products">
    <h1>Datos estado con id: '.$id_estado_formateado.'</h1>
    <div class="formcontainer_form">
    <div class="formcontainer_form">
    <form action="manageapplicationstate.php" method="post" class="form">
        <div class="form_containeritem">
            <label for="nameperson" class="form_label">Fecha</label>
            <input type="text" placeholder="Nombre completo persona" name="nameperson" disabled value="'.$fecha.'">
        </div>
        <div class="form_containeritem">
            <label for="nameperson" class="form_label">Estado</label>
            <input type="text" placeholder="Nombre completo persona" name="nameperson" disabled value="'.$estado.'">
        </div>
        <div class="form_containeritem">
            <label for="number" class="form_label">Comentarios</label>
            <input type="text" placeholder="Número telefónico" name="number" disabled value="'.$comentario.'">
        </div>
        <div class="form_containeritem">
            <label for="correo" class="form_label">ID trabajador</label>
            <input type="email" placeholder="correo@ejemplo.com" name="correo" disabled value="'.$id_trabajador_formateado.'">
        </div>
        <div class="form_containeritem">
            <label for="animalType" class="form_label">ID solicitud</label> 
            <input type="email"  name="animalType" disabled value="'.$id_solicitud_formateado.'">
        </div>
        <div class="form_containeritem_button">
            <button type="submit">
                Regresar
            </button>
        </div>
        
    </form>
        </div>
    </div>';
}else{
    header("location: manageapplicationstate.php");
}
            
  mysqli_close($conn);
  
?>
