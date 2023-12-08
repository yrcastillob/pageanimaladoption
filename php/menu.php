<?php
$directorioActual = __DIR__;
echo '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,1000;1,200;1,300;1,400;1,500;1,600;1,800;1,1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=".http://localhost/dwv/css/universal.css">
    <link rel="stylesheet" href="http://localhost/dwv/css/index.css">
    <title>menu</title>
</head>
<body>

    <header>
        <div class="logo-container">
            <img src="http://localhost/dwv/images/logo.png" alt="logo">
        </div> 
        <div class="menuToggle"></div>
        <nav class="menu">
            <ul>
                <li><a href="http://localhost/dwv/index.php">Nosotros</a></li>
                <li><a>Servicios<b>▼</b></a>
                    <ul>
                        <li><a href="http://localhost/dwv/documentos/dogservices.php">Para perritos</a></li>
                        <li><a href="http://localhost/dwv/documentos/catservices.php">Para gaticos</a></li>
                    </ul>
                </li>
                <li><a href="">Amigos en adopción<b>▼</b></a>
                    <ul>
                        <li><a href="http://localhost/dwv/documentos/dogsforadoption.php">Perritos</a></li>
                        <li><a href="http://localhost/dwv/documentos/catsforadoption.php">Gaticos</a></li>
                    </ul>
                </li>
                <li><a href="">Adoptar<b>▼</b></a>
                    <ul>
                        <li><a href="http://localhost/dwv/documentos/adoptionform.php">¡Quiero Adoptar!</a></li> 
                        <li><a href="http://localhost/dwv/documentos/verifyadoptionstate.php">Estado Adopción</a></li>
                    </ul>
                </li>
                 
            </ul>
        </nav>
    </header>
    <script src="../js/universal.js" defer></script>
</body>
</html>';
?>
