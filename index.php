
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,1000;1,200;1,300;1,400;1,500;1,600;1,800;1,1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/universal.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>Nosotros</title>
</head>
<body>
    <?php
        include('./php/menu.php');
    ?>

    <section class="cover">
        <p class="cover_mainmessage">Adoptar es ganar <br> un amigo ♥</p>
        
        <fieldset class="cover_options">
            <p class="cover_optionstitle">Quiero ver opciones para:</p>
            <div class="cover_optionscontainer">
                <div class="cover_optionscontainer_item">
                    <input type="radio" id="dogRadio" name="animalType" value="Perritos" checked />
                    <label for="dogRadio">Perritos</label>
                </div>
                <div class="cover_optionscontainer_item">
                    <input type="radio" id="catRadio" name="animalType" value="Gaticos" />
                    <label for="catRadio">Gaticos</label>
                </div>
            </div>
        </fieldset>

        <a href="./documentos/catsforadoption.php" class="catoptions">Ver gaticos</a>
        <a href="./documentos/catservices.php" class="catoptions">Servicios de cuidado gatuno</a>

        <a href="./documentos/dogsforadoption.php" class="dogoptions">Ver perritos</a>
        <a href="./documentos/dogservices.php" class="dogoptions">Servicios de cuidado canino</a>

        <a href="./documentos/adoptionform.php">Registrarme para adoptar</a>
    </section>
    
    <section class="results">
        <div class="results-items">
            <p class="number">300</p>
            <p class="explication"> gatos y perros que han encontrado una familia gracias a nosotros en 2023.</p>
        </div>
        <div class="results-items">
            <p class="number">80</p>
            <p class="explication">Animalitos esterilizados.</p>
        </div>
    </section>

    <section class="divisory-section">
    </section>

    <section class="horizon">
        <div class="horizon-cont">
            <h1>Misión</h1>
            <div>
                <img src="./images/gato.jpg" alt="Gato">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque augue, aliquam vel blandit vestibulum, malesuada eu mauris. In mollis justo interdum,  mattis eros sed, auctor dolor. Suspendisse mauris sem, elementum id mi sit amet, ultricies  vestibulum dui. Aliquam a convallis dui ac tincidunt risus. </p>
            </div>
        </div>
        <div class="horizon-cont">
            <h1>Visión</h1>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque augue, aliquam vel blandit vestibulum, malesuada eu mauris. In mollis justo interdum,  mattis eros sed, auctor dolor. Suspendisse mauris sem, elementum id mi sit amet, ultricies  vestibulum dui. Aliquam a convallis dui ac tincidunt risus. </p>
                <img src="./images/perrofeliz.jpg" alt="">
            </div>
        </div>
    </section>
    

    <?php
        include('./php/accesibility.php');
        include('./php/footer.php');
    ?>
    <script src="./js/index.js"></script>
</body>
</html>