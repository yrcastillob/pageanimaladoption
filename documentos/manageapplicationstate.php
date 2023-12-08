<?php

include "../php/connectDb.php";

session_start();
$rol = $_SESSION['rol'];

$sql = "SELECT * FROM solicitudes";
$result1 = mysqli_query($conn, $sql);

$sql2 = "SELECT * FROM estadosolicitud";
$result2 = mysqli_query($conn, $sql2);

$sql3 = "SELECT * FROM trabajadores";
$result3 = mysqli_query($conn, $sql3);
        
if ($rol == 1){
    header("location: trabajador.php");

}else if($rol == 2){
    include("menuadmin.php");
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
<title>Estados</title>
</head>
<body>';

echo '
<div class="create-products minimenu">
    <a href="#crearservicios">Crear Estado |  </a>
    <a href="#buscarServicio">Buscar Estado |  </a>
    <a href="#eliminarServicio">Eliminar Estado |  </a>
    <a href="#editarservicio">Editar Estado  |  </a>
    <a href="#listartodos">Ver todos Estados  |  </a>
</div>';
    echo '
    <div class="create-products" id="crearservicios">
    <h1>Crear Estado de Solicitud</h1>
    <p>Ingrese los datos para crear estado de una solicitud.</p>
    <div class="formcontainer_form">
            <form action="addstatusapplication.php" method="post" class="form">
            <div class="form_containeritem">
                    <label for="id_solicitud" class="form_label">Id solicitud</label>
                    <select id="opciones" name="id_solicitud">';
            foreach ($result1 as $registro){
                echo '<option value="'.$registro['id_solicitud'].'">'.$registro['nombre_completo'].' - '.$registro['id_solicitud'].' - '.$registro['correo_electronico'].'</option>';
            }
              
            echo'  </select>
                </div>
                <div class="form_containeritem">
                    <label for="worker" class="form_label">Trabajador para asignar</label>
                    <select id="opciones" name="worker">';
            foreach ($result3 as $registro){
                    echo '<option value="'.$registro['id_trabajador'].'">'.$registro['nombres_trabajador'].' '.$registro['apellidos_trabajador'].' - '.$registro['id_trabajador'].'</option>';
                    }
            echo'    </select>
            </div>
                <div class="form_containeritem">
                    <label for="estado" class="form_label">Estado</label>
                    <input type="text" placeholder="Estado corto" name="estado" required>
                </div>
                <div class="form_containeritem">
                    <label for="comentario" class="form_label">Comentarios</label>
                    <input type="text" placeholder="Comentario largo" name="comentario" required>
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        Crear Estado
                    </button>
                </div>
                
            </form>
        </div>
    </div>
    ';

    echo '
        <div class="create-products" id="buscarServicio">
        <h1>Buscar Estado Solicitud </h1>
        <p>Ingrese el id del estado de solicitud que desea buscar. Si no sabe cuál es, vaya a la sección de "Ver todos estados"</p>
    <div class="formcontainer_form">
            <form action="searchstatusapplication.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="idporbuscar" class="form_label">ID estado por buscar</label>
                    <input type="text" placeholder="# ID Estado solicitud" name="idporbuscar" required>
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        Buscar Estado Solicitud
                    </button>
                </div>
                
            </form>
        </div>
        </div>';

    

        echo '
        <div class="create-products" id="eliminarServicio">
        <h1>Eliminar Estado </h1>
        <p>Ingrese el id del estado que desea eliminar.</p>
    <div class="formcontainer_form">
            <form action="deleteapplicationstate.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="idporeliminar" class="form_label">ID estado por eliminar</label>
                    <input type="text" placeholder="# ID Estado" name="idporeliminar" required>
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        Eliminar Estado
                    </button>
                </div>
                
            </form>
        </div>
        </div>';

        echo '
        <div class="create-products" id="editarservicio">
        <h1>Editar Estado Solicitud </h1>
        <p>Ingrese el id del estado que desea editar.</p>
    <div class="formcontainer_form">
            <form action="editapplicationstate.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="idporeliminar" class="form_label">ID estado por editar</label>
                    <input type="text" placeholder="# ID Estado" name="idporeditar" required>
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        Editar Servicio
                    </button>
                </div>
                
            </form>
        </div>
        </div>';


        echo '<div class="create-products" id="listartodos">
    <h1>Listar Todos los Estados</h1>
    <h2>Si desea ver todos los detalles, copie el ide del estado y búsquelo en buscar estado.</h2>

    <table border="1">
        <thead>
            <tr>
                <th>ID Estado</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Comentarios</th>
                <th>ID Solicitud</th>
                <th>ID trabajador</th>
            </tr>
        </thead>
        <tbody>';
        foreach ($result2 as $registro) {
            $id_estado = $registro['id_estado_solicitud'];
            $id_estado_actualizado = sprintf('%011s', $id_estado);

            $id_solicitud = $registro['id_solicitud'];
            $id_solicitud_actualizado = sprintf('%011s', $id_solicitud);

            $id_trabajador = $registro['id_trabajador'];
            $id_trabajador_actualizado = sprintf('%011s', $id_trabajador);

            echo '<tr>';
            echo '<td>' . $id_estado_actualizado. '</td>';
            echo '<td>' . $registro['fecha_estado'] . '</td>';
            echo '<td>' . $registro['estado'] . '</td>';
            echo '<td>' . $registro['comentarios_estado_solicitud'] . '</td>';
            echo '<td>' . $id_solicitud_actualizado . '</td>';
            echo '<td>' . $id_trabajador_actualizado . '</td>';
            echo '</tr>';
        }
        echo'</tbody>
        </table>
        </div>';

}else{
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
<title>Error</title>
</head>
<body>

<main class="main_result_box">

<h1>Error con su cuenta</h1>
<p>Hay un error con su cuenta, contacte al admnistrador e indique el error ERR_ROL.</p>
<p class="thankfulmessage">Intente de nuevo por favor.</p>
<a href="login.php">Regresar a login</a>

</main>

</body>
<script>
setTimeout(function() {
    window.location.href = "login.php";
}, 4000); // Redirige después de 5 segundos
</script>
</html>';
}

  
  mysqli_close($conn);

?>
