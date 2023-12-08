<?php

include "../php/connectDb.php";

session_start();
$rol = $_SESSION['rol'];

$sql = "SELECT * FROM solicitudes";

$result1 = mysqli_query($conn, $sql);
        
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
<title>Aplicaciones</title>
</head>
<body>';

echo '
<div class="create-products minimenu">
    <a href="#crearservicios">Crear solicitud  |  </a>
    <a href="#buscarServicio">Buscar solicitud  |  </a>
    <a href="#eliminarServicio">Eliminar solicitud  |  </a>
    <a href="#editarservicio">Editar solicitud  |  </a>
    <a href="#listartodos">Ver todas solicitudes  |  </a>
</div>';
    echo '
    <div class="create-products" id="crearservicios">
    <h1>Crear solicitud</h1>
    <p>Ingrese los datos para crear solicitud.</p>
    <div class="formcontainer_form">
            <form action="addaplication.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="nameperson" class="form_label">Nombre aplicante</label>
                    <input type="text" placeholder="Nombre completo persona" name="nameperson" required>
                </div>
                <div class="form_containeritem">
                    <label for="number" class="form_label">Número telefónico</label>
                    <input type="number" placeholder="Número telefónico" name="number" required>
                </div>
                <div class="form_containeritem">
                    <label for="correo" class="form_label">Correo electrónico</label>
                    <input type="email" placeholder="correo@ejemplo.com" name="correo" required>
                </div>
                <div class="form_containeritem">
                    <label for="animalType" class="form_label">Tipo animal</label>
                    <div class="form_containeritem_radio">
                        <input type="radio" id="dogRadio" name="animalType" value="perro" checked />
                        <label for="dogRadio">Perrito</label>
                        <input type="radio" id="catRadio" name="animalType" value="gato" />
                        <label for="catRadio">Gatico</label
                    ></div>  
                </div>
                <div class="form_containeritem">
                    <label for="animalType" class="form_label">Autoriza ser contactado</label>
                    <div class="form_containeritem_radio">
                        <input type="radio" id="dogRadio" name="autorizacion" value="1" checked />
                        <label for="dogRadio">Sí</label>
                        <input type="radio" id="catRadio" name="autorizacion" value="0" />
                        <label for="catRadio">No</label
                    ></div>  
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        Crear Solicitud
                    </button>
                </div>
                
            </form>
        </div>
    </div>
    ';
    echo '
        <div class="create-products" id="buscarServicio">
        <h1>Buscar Solicitud </h1>
        <p>Ingrese el id de la aplicación que desea buscar.</p>
    <div class="formcontainer_form">
            <form action="searchapplication.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="idporbuscar" class="form_label">ID solicitud por buscar</label>
                    <input type="text" placeholder="# ID servicio" name="idporbuscar" required>
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        Buscar Solicitud
                    </button>
                </div>
                
            </form>
        </div>
        </div>';

    

        echo '
        <div class="create-products" id="eliminarServicio">
        <h1>Eliminar solicitud </h1>
        <p>Ingrese el id de la solicitud que desea eliminar.</p>
    <div class="formcontainer_form">
            <form action="deleteapplication.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="idporeliminar" class="form_label">ID solicitud por eliminar</label>
                    <input type="text" placeholder="# ID solicitud" name="idporeliminar" required>
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        Eliminar Solicitud
                    </button>
                </div>
                
            </form>
        </div>
        </div>';

        echo '
        <div class="create-products" id="editarservicio">
        <h1>Editar solicitud </h1>
        <p>Ingrese el id de la solicitud que desea editar.</p>
    <div class="formcontainer_form">
            <form action="editapplication.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="idporeliminar" class="form_label">ID servicio por editar</label>
                    <input type="text" placeholder="# ID servicio" name="idporeditar" required>
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
    <h1>Listar Servicios</h1>
    <h2>Si desea ver todos los detaller, copie el ide de la solicitud y búsquela en buscar solicitud.</h2>

    <table border="1">
        <thead>
            <tr>
                <th>ID Solicitud</th>
                <th>Fecha</th>
                <th>Nombres</th>
                <th>Número telefónico</th>
                <th>Correo</th>
                <th>Animal</th>
            </tr>
        </thead>
        <tbody>';
        foreach ($result1 as $registro) {
            $id_solicitud = $registro['id_solicitud'];
            $id_solicitud_actualizado = sprintf('%011s', $id_solicitud);
            echo '<tr>';
            echo '<td>' . $id_solicitud_actualizado. '</td>';
            echo '<td>' . $registro['fecha_solicitud'] . '</td>';
            echo '<td>' . $registro['nombre_completo'] . '</td>';
            echo '<td>' . $registro['numero_telefonico'] . '</td>';
            echo '<td>' . $registro['correo_electronico'] . '</td>';
            echo '<td>' . $registro['tipo_animal'] . '</td>';
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
