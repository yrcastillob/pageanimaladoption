<?php

include "../php/connectDb.php";

session_start();
$ideditar = $_POST['idporeditar'];

$sql = "SELECT * FROM servicios WHERE id_servicio ='$ideditar'";

$result1 = mysqli_query($conn, $sql);
        
if (mysqli_num_rows($result1) > 0) {
    $row = mysqli_fetch_assoc($result1);
    $nombre_servicio = $row['nombre_servicio'];
    $decripcion_servicio = $row['descripcion_servicio'];
    $url_img = $row['url_img'];
    $id_tipo_animal = $row['id_tipo_animal'];
    
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
    <h1>Actualizar producto con id: '.$ideditar.'</h1>
    <h2>Haga los cambios que desee a la información del registro, si no quiere editar algún campo solo déjelo tal como está.</h2>
    <div class="formcontainer_form">
            <form action="confirmeditproduct.php" method="post" class="form">
                <div class="form_containeritem">
                    <input type="text" placeholder="Título del servicio" name="ideditar2" value="'.$ideditar.'" style="display:none">
                    <label for="title" class="form_label">Título servicio</label>
                    <input type="text" placeholder="Título del servicio" name="title2" value="'.$nombre_servicio.'">
                </div>
                <div class="form_containeritem">
                    <label for="description" class="form_label">Descripción servicio</label>
                    <input type="textarea" placeholder="Detalle servicio" name="description2" value="'.$decripcion_servicio.'">
                </div>
                <div class="form_containeritem">
                    <label for="imagename" class="form_label">Nombre imagen con extensión</label>
                    <input type="text" placeholder="nombreimagen.jpg" name="imagename2" value="'.$url_img.'">
                </div>
                <div class="form_containeritem">
                    <label for="animalType" class="form_label">Tipo animal</label>
                    <div class="form_containeritem_radio">
                        <input type="radio" id="dogRadio" name="animalType2" value="00000000001" required/>
                        <label for="dogRadio">Perrito</label>
                        <input type="radio" id="catRadio" name="animalType2" value="00000000002" required/>
                        <label for="catRadio">Gatico</label
                    ></div>  
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        Editar Servicio
                    </button>
                    <a href="manageservices.php">
                        Cancelar operación
                    </a>
                </div>
                
            </form>
        </div>
    </div>';
}else{
    header("location: manageservices.php");
}
            
  mysqli_close($conn);
  
?>
