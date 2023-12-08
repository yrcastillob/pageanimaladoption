<?php

include "../php/connectDb.php";

session_start();
$ideditar = $_POST['idporeditar'];

$sql = "SELECT * FROM estadosolicitud WHERE id_estado_solicitud ='$ideditar'";
$result1 = mysqli_query($conn, $sql);;

$sql2 = "SELECT * FROM solicitudes";
$result2 = mysqli_query($conn, $sql2);

$sql3 = "SELECT * FROM trabajadores";
$result3 = mysqli_query($conn, $sql3);

if (mysqli_num_rows($result1) > 0) {
    $row = mysqli_fetch_assoc($result1);
    $id_solicitud = $row['id_solicitud'];
    $estado = $row['estado'];
    $comentario = $row['comentarios_estado_solicitud'];
    $id_solicitud_formateado = sprintf('%011s', $id_solicitud); 
    
    echo '<!DOCTYPE html>
    <html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,1000;1,200;1,300;1,400;1,500;1,600;1,800;1,1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/universal.css">
    <link rel="stylesheet" href="../css/manageservices.css">
    <title>Estado</title>
    </head>
    <body>
    <div class="create-products" id="crearservicios">
    <h1>Editar Estado de Solicitud</h1>
    <p>Edite los datos del estado, si no quiere cambiar alguno solo déjelo tal y como esta.</p>
    <div class="formcontainer_form">
            <form action="confirmeditstatusapplication.php" method="post" class="form">
            <input type="text" placeholder="Estado corto" name="ideditar" required value="'.$ideditar.'" style="display:none;">
            <div class="form_containeritem">
                    <label for="id_solicitud" class="form_label">Id solicitud</label>
                    <select id="opciones" name="id_solicitud" required>';
            foreach ($result2 as $registro){
                echo '<option value="'.$registro['id_solicitud'].'">'.$registro['nombre_completo'].' - '.$registro['id_solicitud'].' - '.$registro['correo_electronico'].'</option>';
            }
              
            echo'  </select>
                </div>
                <div class="form_containeritem">
                    <label for="worker" class="form_label">Trabajador para asignar</label>
                    <select id="opciones" name="worker" required>';
            foreach ($result3 as $registro){
                    echo '<option value="'.$registro['id_trabajador'].'">'.$registro['nombres_trabajador'].' '.$registro['apellidos_trabajador'].' - '.$registro['id_trabajador'].'</option>';
                    }
            echo'    </select>
            </div>
                <div class="form_containeritem">
                    <label for="estado" class="form_label">Estado</label>
                    <input type="text" placeholder="Estado corto" name="estado" required value="'.$estado.'">
                </div>
                <div class="form_containeritem">
                    <label for="comentario" class="form_label">Comentarios</label>
                    <input type="text" placeholder="Comentario largo" name="comentario" required value="'.$comentario.'">
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        Editar Estado
                    </button>
                    <a href="manageapplicationstate.php">
                        Cancelar operación
                    </a>
                </div>
         
            </form>
        </div>
    </div>
    </body>';
                } else{
                    header("location: manageapplicationstate.php");
                }
            
  mysqli_close($conn);
  
?>
