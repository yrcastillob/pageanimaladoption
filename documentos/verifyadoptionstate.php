
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,1000;1,200;1,300;1,400;1,500;1,600;1,800;1,1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/universal.css">
    <link rel="stylesheet" href="../css/verificationform.css">
    <title>Verificar Estado Adopción</title>
</head>
<body>
    <?php
        include('../php/menu.php');
    ?>

    <main class="formcontainer">
        <div class="formcontainer_image">
        </div>
        <div class="formcontainer_form">
            <h1>Ingrese los siguientes datos para saber de su proceso de adopción.</h1>
            <form action="statusapplication.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="correo" class="form_label">Correo Electrónico</label>
                    <input type="email" placeholder="Correo Electrónico" name="correo" required>
                </div>
                <div class="form_containeritem">
                    <label for="numerotel" class="form_label">Número Proceso</label>
                    <input type="number" placeholder="ID de solicitud" name="idproceso" required>
                </div>
                <div class="form_containeritem_button">
                    <button type="submit">
                        <img src="http://localhost/dwv/images/sendform.svg" alt="Enviar">
                        Verificar estado
                    </button>
                </div>
                
            </form>
        </div>
    </main>
    <?php
        include('../php/accesibility.php');
        include('../php/footer.php');
    ?>
    <script src="./js/index.js"></script>
</body>
</html>