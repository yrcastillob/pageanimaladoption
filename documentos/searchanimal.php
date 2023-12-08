<?php

include "../php/connectDb.php";

session_start();
$idbuscar = $_POST['idporbuscar'];

$sql = "SELECT * FROM animalitos WHERE id_animalito ='$idbuscar'";

$result1 = mysqli_query($conn, $sql);
        
if (mysqli_num_rows($result1) > 0) {
    $row = mysqli_fetch_assoc($result1);
    $nombre_animalito = $row['nombre_animal'];
    $raza = $row['raza'];
    $color = $row['color'];
    $edad = $row['edad'];
    $descripcion = $row['descripcion_animal'];
    $historia = $row['historia_animal'];
    $tipoanimalito = $row['tipo_animal'];
    $img = $row['url_img'];


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
<div class="create-products" id="crearservicios">
    <h1>Datos mascota con id: '.$idbuscar.'</h1>
    <div class="formcontainer_form">
            <form action="manageanimals.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="name" class="form_label">Nombre</label>
                    <input type="text" placeholder="Nombre mascota" name="name"  disabled value="'.$nombre_animalito.'">
                </div>
                <div class="form_containeritem">
                    <label for="raza" class="form_label">Raza</label>
                    <input type="text" placeholder="Raza" name="raza"  disabled value="'.$raza.'">
                </div>
                <div class="form_containeritem">
                    <label for="color" class="form_label">Color</label>
                    <input type="text" placeholder="Raza" name="color"  disabled value="'.$color.'">
                </div>
                <div class="form_containeritem">
                    <label for="edad" class="form_label">Edad</label>
                    <input type="number" min="1" max="25" placeholder="Edad en años" name="edad" disabled value="'.$edad.'">
                </div>
                <div class="form_containeritem">
                    <label for="descripcion" class="form_label">Descripción</label>
                    <input type="tex" placeholder="Descripción" name="descripcion" disabled value="'.$descripcion.'">
                </div>
                <div class="form_containeritem">
                    <label for="historia" class="form_label">Historia</label>
                    <input type="tex" placeholder="Cuál fue mi historia" name="historia" disabled value="'.$historia.'">
                </div>
                <div class="form_containeritem">
                    <label for="animalType" class="form_label">Tipo animal</label>
                    <input type="tex" placeholder="Cuál fue mi historia" name="animalType" disabled value="'.$tipoanimalito.'">
                </div>
                <div class="form_containeritem">
                    <label for="img" class="form_label">Nombre Imagen con extension</label>
                    <input type="tex" placeholder="miimagen.jpg o miimagen.png" name="img" disabled value="'.$img.'">
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        Regresar
                    </button>
                </div>
                
            </form>
        </div>
    </div>
    ';
}
            
  mysqli_close($conn);
  
?>
