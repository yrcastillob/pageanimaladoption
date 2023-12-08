<?php

include "../php/connectDb.php";

session_start();
$rol = $_SESSION['rol'];

$sql = "SELECT * FROM animalitos";

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
<title>Mascotas</title>
</head>
<body>';

echo '
<div class="create-products minimenu">
    <a href="#crearservicios">Añadir mascota  |  </a>
    <a href="#buscarServicio">Buscar mascota  |  </a>
    <a href="#eliminarServicio">Eliminar mascota  |  </a>
    <a href="#editarservicio">Editar mascota  |  </a>
    <a href="#listartodos">Ver todas mascotas  |  </a>
</div>';
    echo '
    <div class="create-products" id="crearservicios">
    <h1>Añadir mascota</h1>
    <p>Ingrese los datos para crear una mascota.</p>
    <div class="formcontainer_form">
            <form action="addanimal.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="name" class="form_label">Nombre</label>
                    <input type="text" placeholder="Nombre mascota" name="name" required>
                </div>
                <div class="form_containeritem">
                    <label for="raza" class="form_label">Raza</label>
                    <select id="opciones" name="raza">
                        <option value="criollo">Criollo</option>
                        <option value="labrador">Labrador Retriever</option>
                        <option value="bulldog">Bulldog Inglés</option>
                        <option value="germanshepherd">Pastor Alemán</option>
                        <option value="beagle">Beagle</option>
                        <option value="poodle">Poodle</option>
                        <option value="schnauzer">Schnauzer</option>
                    </select>
                </div>
                <div class="form_containeritem">
                    <label for="color" class="form_label">Color</label>
                    <select id="opciones" name="color">
                            <option value="negro">Negro</option>
                            <option value="blanco">Blanco</option>
                            <option value="cafe">Café</option>
                            <option value="multicolor">Multicolor</option>
                    </select>
                </div>
                <div class="form_containeritem">
                    <label for="edad" class="form_label">Edad</label>
                    <input type="number" min="1" max="25" placeholder="Edad en años" name="edad" required>
                </div>
                <div class="form_containeritem">
                    <label for="descripcion" class="form_label">Descripción</label>
                    <input type="tex" placeholder="Descripción" name="descripcion" required>
                </div>
                <div class="form_containeritem">
                    <label for="historia" class="form_label">Historia</label>
                    <input type="tex" placeholder="Cuál fue mi historia" name="historia" required>
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
                    <label for="img" class="form_label">Nombre Imagen con extension</label>
                    <input type="tex" placeholder="miimagen.jpg o miimagen.png" name="img" required>
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        Crear Mascota
                    </button>
                </div>
                
            </form>
        </div>
    </div>
    ';
    echo '
        <div class="create-products" id="buscarServicio">
        <h1>Buscar Mascota </h1>
        <p>Ingrese el id de la mascota que desea buscar.</p>
    <div class="formcontainer_form">
            <form action="searchanimal.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="idporbuscar" class="form_label">ID mascota por buscar</label>
                    <input type="text" placeholder="# ID Mascota" name="idporbuscar" required>
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        Buscar Mascota
                    </button>
                </div>
                
            </form>
        </div>
        </div>';

    

        echo '
        <div class="create-products" id="eliminarServicio">
        <h1>Eliminar Mascota </h1>
        <p>Ingrese el id de la mascota que desea eliminar.</p>
    <div class="formcontainer_form">
            <form action="deleteanimal.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="idporeliminar" class="form_label">ID mascota por eliminar</label>
                    <input type="text" placeholder="# ID Mascota" name="idporeliminar" required>
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        Eliminar Mascota
                    </button>
                </div>
                
            </form>
        </div>
        </div>';

        echo '
        <div class="create-products" id="editarservicio">
        <h1>Editar Mascota </h1>
        <p>Ingrese el id de la mascota que desea editar.</p>
    <div class="formcontainer_form">
            <form action="editanimal.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="idporeliminar" class="form_label">ID mascota por editar</label>
                    <input type="text" placeholder="# ID mascota" name="idporeditar" required>
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
    <h1>Listar Mascotas</h1>
    <h2>Si desea ver más detalles, copie el id del animalito y vaya a buscar mascota.</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID Mascota</th>
                <th>Nombre</th>
                <th>Raza</th>
                <th>Color</th>
                <th>Edad</th>
                <th>Tipo animalito</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>';
        foreach ($result1 as $registro) {
            $id_animalito = $registro['id_animalito'];
            $id_animalito_actualizado = sprintf('%011s',  $id_animalito);
            echo '<tr>';
            echo '<td>' . $id_animalito_actualizado. '</td>';
            echo '<td>' . $registro['nombre_animal'] . '</td>';
            echo '<td>' . $registro['raza'] . '</td>';
            echo '<td>' . $registro['color'] . '</td>';
            echo '<td>' . $registro['edad'] . '</td>';
            echo '<td>' . $registro['tipo_animal'] . '</td>';
            echo '<td>' . $registro['descripcion_animal'] . '</td>';
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
