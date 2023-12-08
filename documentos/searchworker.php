<?php

include "../php/connectDb.php";

session_start();
$idbuscar = $_POST['idporbuscar'];

$sql = "SELECT * FROM trabajadores WHERE id_trabajador ='$idbuscar'";

$result1 = mysqli_query($conn, $sql);
        
if (mysqli_num_rows($result1) > 0) {
    $row = mysqli_fetch_assoc($result1);
    $id_trabajador = $row['id_trabajador'];
    $id_tipo_documento = $row['id_tipo_documento'];
    $numero_identificacion = $row['numero_identificacion'];
    $nombres_trabajador = $row['nombres_trabajador'];
    $apellidos_trabajador = $row['apellidos_trabajador'];
    $fecha_nacimiento = $row['fecha_nacimiento'];
    $id_sexo_biologico = $row['id_sexo_biologico'];
    $id_rol = $row['id_rol'];
    $correo_electronico = $row['correo_electronico'];
    $contrasena = $row['contrasena'];
    $estadoactivacion = $row['estadoactivacion'];
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
    <h1>Datos servicio con id: '.$idbuscar.'</h1>
    <div class="formcontainer_form">
            <form action="manageworkers.php" method="post" class="form">
                  <div class="form_containeritem">
                    <label for="nombres" class="form_label">ID trabajador</label>
                    <input type="text" placeholder="Nombres trabajador" name="nombres" disabled value="'.$id_trabajador.'">
                </div>
                <div class="form_containeritem">
                    <label for="nombres" class="form_label">Nombres trabajador</label>
                    <input type="text" placeholder="Nombres trabajador" name="nombres" disabled value="'.$nombres_trabajador.'">
                </div>
                <div class="form_containeritem">
                    <label for="apellidos" class="form_label">Apellidos trabajador</label>
                    <input type="text" placeholder="Nombres trabajador" name="apellidos" disabled value="'.$apellidos_trabajador.'">
                </div>
                <div class="form_containeritem">
                    <label for="tipodocumento" class="form_label">Tipo documento</label>
                    <input type="number" min="1" max="3" placeholder="Tipo documento de identidad" name="tipodocumento" disabled value="'.$id_tipo_documento.'">
                </div>
                <div class="form_containeritem">
                    <label for="numerodocumento" class="form_label">Número documento</label>
                    <input type="number" placeholder="Numero documento de identidad" name="numerodocumento" disabled value="'.$numero_identificacion.'">
                </div>
                <div class="form_containeritem">
                    <label for="fechanacimiento" class="form_label">Fecha nacimiento</label>
                    <input type="date" placeholder="Numero documento de identidad" name="fechanacimiento" disabled value="'.$fecha_nacimiento.'">
                </div>
                <div class="form_containeritem">
                    <label for="sexo" class="form_label">Sexo biológico</label>
                    <input type="number" min="1" max="2" placeholder="Sexo biológico" name="sexo" disabled value="'.$id_sexo_biologico.'">
                </div>
                <div class="form_containeritem">
                    <label for="rol" class="form_label">Rol</label>
                    <input type="number" min="1" max="2" placeholder="Rol" name="rol" disabled value="'.$id_rol.'">
                </div>
                <div class="form_containeritem">
                <label for="correo" class="form_label">Correo</label>
                <input type="email" placeholder="Correo, puede dejarlo vacío si lo desea" name="correo"  disabled value="'.$correo_electronico.'">
                </div> 
                <div class="form_containeritem">
                <label for="contrasena" class="form_label">Contrasena</label>
                <input type="password" placeholder="Contrasena, puede dejarlo vacío si lo desea" name="contrasena" disabled value="'.$contrasena.'">
                </div> 
                <div class="form_containeritem">
                    <label for="estadoactivacion" class="form_label">Estado Activación</label>
                    <input type="number" min="0" max="1" placeholder="Rol" name="estadoactivacion" disabled value="'.$estadoactivacion.'">
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
