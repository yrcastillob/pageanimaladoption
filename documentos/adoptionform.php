
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,1000;1,200;1,300;1,400;1,500;1,600;1,800;1,1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/universal.css">
    <link rel="stylesheet" href="../css/adoptionform.css">
    <title>Formulario Adopción</title>
</head>
<body>
    <?php
        include('../php/menu.php');
    ?>
    <aside class="forminstruction">
        Registra tus datos para iniciar tu proceso de adopción.
    </aside>
    <main class="formcontainer">
        <div class="formcontainer_image">
            
        </div>
        <div class="formcontainer_form">
            <form action="startapplication.php" method="post" class="form">
                <div class="form_containeritem">
                    <label for="nombre" class="form_label">Nombre Completo</label>
                    <input type="text" placeholder="Su nombre" name="nombre" required>
                </div>
                <div class="form_containeritem">
                    <label for="numerotel" class="form_label">Número Telefónico</label>
                    <input type="number" placeholder="Su teléfono" name="numerotel" required>
                </div>
                <div class="form_containeritem">
                    <label for="correo" class="form_label">Correo Electrónico</label>
                    <input type="email" placeholder="Correo Electrónico" name="correo" required>
                </div>
                
                <div class="form_containeritem">
                    <label for="animalType" class="form_label">Estoy interesado(a) en adoptar</label>
                    <div class="form_containeritem_radio">
                        <input type="radio" id="dogRadio" name="animalType" value="perro" checked />
                        <label for="dogRadio">Perritos</label>
                        <input type="radio" id="catRadio" name="animalType" value="gato" />
                        <label for="catRadio">Gaticos</label
                    ></div>
                    
                </div>
                <div id="form_containeritem_aut">
                    <input type="checkbox" name="autorizacion" id="autorizacion" required>
                    <label for="autorizacion">Autorizo a ser contactado para realizar una entrevista telefónica para evaluar la idoneidad de mi candidatura.</label>
                </div>
                <div class="form_containeritem_button">
                    <button type="submit">
                        <img src="http://localhost/dwv/images/sendform.svg" alt="Enviar">
                        Enviar candidatura
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