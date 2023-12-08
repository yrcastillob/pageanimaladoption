<?php

include "../php/connectDb.php";

session_start();
$rol = $_SESSION['rol'];

$sql = "SELECT * FROM servicios";

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
<title>Servicios</title>
</head>
<body>';

echo '
<div class="create-products minimenu">
    <a href="#crearservicios">Crear Servicio  |  </a>
    <a href="#buscarServicio">Buscar Servicio  |  </a>
    <a href="#eliminarServicio">Eliminar Servicio  |  </a>
    <a href="#editarservicio">Editar Servicio  |  </a>
    <a href="#listartodos">Ver todos Servicios  |  </a>
</div>';
    echo '
    <div class="create-products" id="crearservicios">
    <h1>Crear servicios</h1>
    <p>Ingrese los datos para crear un servicio.</p>
    <div class="formcontainer_form">
            <form action="addproduct.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="title" class="form_label">Título servicio</label>
                    <input type="text" placeholder="Título del servicio" name="title" required>
                </div>
                <div class="form_containeritem">
                    <label for="description" class="form_label">Descripción servicio</label>
                    <input type="textarea" placeholder="Detalle servicio" name="description" required>
                </div>
                <div class="form_containeritem">
                    <label for="imagename" class="form_label">Nombre imagen con extensión</label>
                    <input type="text" placeholder="nombreimagen.jpg" name="imagename" required>
                </div>
                <div class="form_containeritem">
                    <label for="animalType" class="form_label">Tipo animal</label>
                    <div class="form_containeritem_radio">
                        <input type="radio" id="dogRadio" name="animalType" value="00000000001" checked />
                        <label for="dogRadio">Perrito</label>
                        <input type="radio" id="catRadio" name="animalType" value="00000000002" />
                        <label for="catRadio">Gatico</label
                    ></div>  
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        Crear Servicio
                    </button>
                </div>
                
            </form>
        </div>
    </div>
    ';
    echo '
        <div class="create-products" id="buscarServicio">
        <h1>Buscar Servicio </h1>
        <p>Ingrese el id del servicio que desea buscar.</p>
    <div class="formcontainer_form">
            <form action="searchproduct.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="idporeliminar" class="form_label">ID servicio por buscar</label>
                    <input type="text" placeholder="# ID servicio" name="idporbuscar" required>
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        Buscar Servicio
                    </button>
                </div>
                
            </form>
        </div>
        </div>';

    

        echo '
        <div class="create-products" id="eliminarServicio">
        <h1>Eliminar Servicio </h1>
        <p>Ingrese el id del servicio que desea eliminar.</p>
    <div class="formcontainer_form">
            <form action="deleteproduct.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="idporeliminar" class="form_label">ID servicio por eliminar</label>
                    <input type="text" placeholder="# ID servicio" name="idporeliminar" required>
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        Eliminar Servicio
                    </button>
                </div>
                
            </form>
        </div>
        </div>';

        echo '
        <div class="create-products" id="editarservicio">
        <h1>Editar Servicio </h1>
        <p>Ingrese el id del servicio que desea editar.</p>
    <div class="formcontainer_form">
            <form action="editproduct.php" method="post" class="form">
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

    <table border="1">
        <thead>
            <tr>
                <th>ID Servicio</th>
                <th>Nombre del Servicio</th>
                <th>Descripción del Servicio</th>
                <th>URL de la Imagen</th>
                <th>Tipo de Animal</th>
            </tr>
        </thead>
        <tbody>';
        foreach ($result1 as $registro) {
            $tipoanimalito = "";
            if($registro['id_tipo_animal'] == '00000000001'){ $tipoanimalito ='Perrito';}else{ $tipoanimalito ='Gatito';};
            $id_servicio = $registro['id_servicio'];
            $id_servicio_actualizado = sprintf('%011s',  $id_servicio);
            echo '<tr>';
            echo '<td>' . $id_servicio_actualizado. '</td>';
            echo '<td>' . $registro['nombre_servicio'] . '</td>';
            echo '<td>' . $registro['descripcion_servicio'] . '</td>';
            echo '<td>' . $registro['url_img'] . '</td>';
            echo '<td>' . $tipoanimalito . '</td>';
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
