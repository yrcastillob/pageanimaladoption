
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,1000;1,200;1,300;1,400;1,500;1,600;1,800;1,1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/universal.css">
    <link rel="stylesheet" href="../css/registrationform.css">
    <title>Formulario Adopción</title>
</head>
<body>
    <?php
        include('../php/menu.php');
    ?>
    <main class="formcontainer">
        <div class="formcontainer_image">
            
        </div>
        <div class="formcontainer_form">
            <form action="activateaccount.php" method="post" class="form">
                <h1>Ingrese su código de trabajador, y el correo y contraseña que desea utilizar.</h1>
                <div class="form_containeritem">
                    <label for="nombre" class="form_label">Codigo trabajador</label>
                    <input type="number" placeholder="Su código trabajador" name="workercode" required>
                </div>
                <div class="form_containeritem">
                    <label for="numerotel" class="form_label">Correo electrónico</label>
                    <input type="mail" placeholder="Su correo electrónico" name="email" required>
                </div>
                <div class="form_containeritem">
                    <label for="correo" class="form_label">Contraseña deseada</label>
                    <input type="password" placeholder="contraseña" name="password" required>
                </div>
                
                <div class="form_containeritem_button">
                    <button type="submit">
                        <img src="http://localhost/dwv/images/sendform.svg" alt="Enviar">
                        Activar cuenta
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