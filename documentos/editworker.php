<?php

include "../php/connectDb.php";

session_start();
$ideditar = $_POST['idporeditar'];
if ($ideditar=="0000000001"){
    header("Location: manageworkers.php");
} else{

    $sql = "SELECT * FROM trabajadores WHERE id_trabajador ='$ideditar'";

$result1 = mysqli_query($conn, $sql);
        
if (mysqli_num_rows($result1) > 0) {
    $row = mysqli_fetch_assoc($result1);
    $nombres = $row['nombres_trabajador'];
    $apellidos = $row['apellidos_trabajador'];
    $tipodocumento = $row['id_tipo_documento'];
    $numerodocumento = $row['numero_identificacion'];
    $fechanacimiento = $row['fecha_nacimiento'];
    $sexo = $row['id_sexo_biologico'];
    $rol = $row['id_rol'];
    $correo = $row['correo_electronico'];
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
<title>Colaboradores</title>
</head>
<body>
<div class="create-products">
    <h1>Actualizar colaborador con id: '.$ideditar.'</h1>
    <h2>Realice los cambios que desee a la información del registro, si no quiere editar algún campo solo déjelo tal como está.</h2>
    <div class="formcontainer_form">
    <form action="confirmeditworker.php" method="post" class="form">
    <div class="form_containeritem" style="display:none;">
      <label for="idtrabajador" class="form_label">ID trabajador</label>
      <input type="text" placeholder="Nombres trabajador" name="idtrabajador" required value="'.$ideditar.'">
  </div>
  <div class="form_containeritem">
      <label for="nombres" class="form_label">Nombres trabajador</label>
      <input type="text" placeholder="Nombres trabajador" name="nombres" required value="'.$nombres.'">
  </div>
  <div class="form_containeritem">
      <label for="apellidos" class="form_label">Apellidos trabajador</label>
      <input type="text" placeholder="Nombres trabajador" name="apellidos" required value="'.$apellidos.'">
  </div>
  <div class="form_containeritem">
      <label for="tipodocumento" class="form_label">Tipo documento</label>
      <p>1 cédula | 2 pasaporte | 3 permiso especial trabajo</p>
      <input type="number" min="1" max="3" placeholder="Tipo documento de identidad" name="tipodocumento" required value="'.$tipodocumento.'">
  </div>
  <div class="form_containeritem">
      <label for="numerodocumento" class="form_label">Número documento</label>
      <input type="number" placeholder="Numero documento de identidad" name="numerodocumento" required value="'.$numerodocumento.'">
  </div>
  <div class="form_containeritem">
      <label for="fechanacimiento" class="form_label">Fecha nacimiento</label>
      <input type="date" placeholder="Numero documento de identidad" name="fechanacimiento" required value="'.$fechanacimiento.'">
  </div>
  <div class="form_containeritem">
      <label for="sexo" class="form_label">Sexo biológico</label>
      <p>1 Hombre | 2 Mujer</p>
      <input type="number" min="1" max="2" placeholder="Sexo biológico" name="sexo" required value="'.$sexo.'">
  </div>
  <div class="form_containeritem">
      <label for="rol" class="form_label">Rol</label>
      <p>1 colaborador | 2 Administrador</p>
      <input type="number" min="1" max="2" placeholder="Rol" name="rol" required value="'.$rol.'">
  </div>
  <div class="form_containeritem">
  <label for="correo" class="form_label">Correo</label>
  <input type="email" placeholder="Correo, puede dejarlo vacío si lo desea" name="correo"  value="'.$correo.'">
  </div> 
  <div class="form_containeritem">
  <label for="contrasena" class="form_label">Contrasena</label>
  <input type="password" placeholder="Contrasena, puede dejarlo vacío si lo desea" name="contrasena"  value="'.$contrasena.'">
  </div> 
  <div class="form_containeritem">
      <label for="estadoactivacion" class="form_label">Estado Activación</label>
      <p>1 activado, ya no puede cambiar la contraseña con el formulario de activación | 0 Sin activar, puede cambiar la contraseña con el formulario de activación</p>
      <input type="number" min="0" max="1" placeholder="Rol" name="estadoactivacion"  value="'.$estadoactivacion.'">
  </div>
  <div class="form_containeritem_button">
      <button type="submit">
          Realizar Cambios
      </button>
      <a href="manageworkers.php">
            Cancelar operación
        </a>
  </div>
  
</form>
        </div>
    </div>';
}else{
    header("location: manageworkers.php");
}

}


            
  mysqli_close($conn);
  
?>
