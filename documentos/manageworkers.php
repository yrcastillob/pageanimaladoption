<?php

include "../php/connectDb.php";

session_start();
$rol = $_SESSION['rol'];

$sql = "SELECT * FROM trabajadores";

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
<title>Trabajadores</title>
</head>
<body>';

echo '
<div class="create-products minimenu">
    <a href="#crearservicios">Añadir colaborador  |  </a>
    <a href="#buscarServicio">Buscar colaborador  |  </a>
    <a href="#eliminarServicio">Eliminar colaborador  |  </a>
    <a href="#editarservicio">Editar colaborador  |  </a>
    <a href="#listartodos">Ver todos colaboradores  |  </a>
</div>';
    echo '
    <div class="create-products" id="crearservicios">
    <h1>Añadir colaborador</h1>
    <p>Ingrese los datos para añadir un colaborador.</p>
    <div class="formcontainer_form">
            <form action="addworker.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="nombres" class="form_label">Nombres trabajador</label>
                    <input type="text" placeholder="Nombres trabajador" name="nombres" required>
                </div>
                <div class="form_containeritem">
                    <label for="apellidos" class="form_label">Apellidos trabajador</label>
                    <input type="text" placeholder="Nombres trabajador" name="apellidos" required>
                </div>
                <div class="form_containeritem">
                    <label for="tipodocumento" class="form_label">Tipo documento</label>
                    <p>1 cédula | 2 pasaporte | 3 permiso especial trabajo</p>
                    <input type="number" min="1" max="3" placeholder="Tipo documento de identidad" name="tipodocumento" required>
                </div>
                <div class="form_containeritem">
                    <label for="numerodocumento" class="form_label">Número documento</label>
                    <input type="number" placeholder="Numero documento de identidad" name="numerodocumento" required>
                </div>
                <div class="form_containeritem">
                    <label for="fechanacimiento" class="form_label">Fecha nacimiento</label>
                    <input type="date" placeholder="Numero documento de identidad" name="fechanacimiento" required>
                </div>
                <div class="form_containeritem">
                    <label for="sexo" class="form_label">Sexo biológico</label>
                    <p>1 Hombre | 2 Mujer</p>
                    <input type="number" min="1" max="2" placeholder="Sexo biológico" name="sexo" required>
                </div>
                <div class="form_containeritem">
                    <label for="rol" class="form_label">Rol</label>
                    <p>1 colaborador | 2 Administrador</p>
                    <input type="number" min="1" max="2" placeholder="Rol" name="rol" required>
                </div>
                <div class="form_containeritem">
                <label for="correo" class="form_label">Correo</label>
                <input type="email" placeholder="Correo, puede dejarlo vacío si lo desea" name="correo" >
                </div> 
                <div class="form_containeritem">
                <label for="contrasena" class="form_label">Contrasena</label>
                <input type="password" placeholder="Contrasena, puede dejarlo vacío si lo desea" name="contrasena" >
                </div> 
                <div class="form_containeritem">
                    <label for="estadoactivacion" class="form_label">Estado Activación</label>
                    <p>1 activado, ya no puede cambiar la contraseña con el formulario de activación | 0 Sin activar, puede cambiar la contraseña con el formulario de activación</p>
                    <input type="number" min="0" max="1" placeholder="Rol" name="estadoactivacion" required>
                </div>
                <div class="form_containeritem_button">
                    <button type="submit">
                        Añadir colaborador
                    </button>
                </div>
                
            </form>
        </div>
    </div>
    ';
    echo '
        <div class="create-products" id="buscarServicio">
        <h1>Buscar Colaborador </h1>
        <p>Ingrese el id del colaborador que desea buscar.</p>
    <div class="formcontainer_form">
            <form action="searchworker.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="idporbuscar" class="form_label">ID colaborador por buscar</label>
                    <input type="text" placeholder="# ID colaborador" name="idporbuscar" required>
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        Buscar Colaborador
                    </button>
                </div>
                
            </form>
        </div>
        </div>';

    

        echo '
        <div class="create-products" id="eliminarServicio">
        <h1>Eliminar colaborador </h1>
        <p>Ingrese el id del colaborador que desea eliminar.</p>
    <div class="formcontainer_form">
            <form action="deleteworker.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="idporeliminar" class="form_label">ID colaborador por eliminar</label>
                    <input type="text" placeholder="# ID colaborador" name="idporeliminar" required>
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        Eliminar Colaborador
                    </button>
                </div>
                
            </form>
        </div>
        </div>';

        echo '
        <div class="create-products" id="editarservicio">
        <h1>Editar colaborador </h1>
        <p>Ingrese el id del colaborador que desea editar.</p>
    <div class="formcontainer_form">
            <form action="editworker.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="idporeliminar" class="form_label">ID colaborador por editar</label>
                    <input type="text" placeholder="# ID colaborador" name="idporeditar" required>
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        Editar Colaborador
                    </button>
                </div>
                
            </form>
        </div>
        </div>';


        echo '<div class="create-products" id="listartodos">
    <h1>Listar Colaboradores</h1>
    <h2>Si desea ver más detalles, copie el id del colaborador y vaya a buscar colaborador.</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID trabajador</th>
                <th># Identificación</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Estado activación</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>';
        foreach ($result1 as $registro) {
            $id_trabajador = $registro['id_trabajador'];
            $id_trabajador_actualizado = sprintf('%011s',  $id_trabajador);
            echo '<tr>';
            echo '<td>' . $id_trabajador_actualizado. '</td>';
            echo '<td>' . $registro['numero_identificacion'] . '</td>';
            echo '<td>' . $registro['nombres_trabajador'] . '</td>';
            echo '<td>' . $registro['apellidos_trabajador'] . '</td>';
            echo '<td>' . $registro['correo_electronico'] . '</td>';
            echo '<td>' . $registro['estadoactivacion'] . '</td>';
            echo '<td>' . $registro['id_rol'] . '</td>';
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
