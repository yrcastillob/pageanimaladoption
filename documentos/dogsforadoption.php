
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,1000;1,200;1,300;1,400;1,500;1,600;1,800;1,1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/universal.css">
    <link rel="stylesheet" href="../css/adoption.css">
    <title>Perritos para adoptar</title>
</head>
<body>
    <?php
        include('../php/menu.php');
    ?>
    
    <section class="coverservicesdog">
        <p> Conoce la historia de todos los perritos que puedes adoptar. ¡Anímate a conocerlas!, adopta, no compres ♥.</p>
    </section>
    <main class="maincontent">

        <div class="maincontent_filters">
            <div class="maincontent_filters_item">
                <label for="raza">Raza</label>

                <select name="raza" id="cars">
                <option value="criollo">criollo</option>
                <option value="raza 1">raza 1</option>
                <option value="raza 2">raza 2</option>
                <option value="raza 3">3</option>
                </select>
            </div>
            
            <div class="maincontent_filters_item">
                <label for="color">Color</label>

                <select name="color" id="cars">
                <option value="criollo">Negro</option>
                <option value="raza 1">Blanco</option>
                <option value="raza 2">Café</option>
                <option value="raza 3">Varios colores</option>
                </select>
            </div>


            <div class="maincontent_filters_item">
                <label for="edad">Edad</label>
                <input type="range" min="0" max="20" name="edad" />
            </div>

        </div>

        <div class="maincontent_servicescontainer">

            <div class="maincontent_servicescontainer_item">
                <img src="../images/dogprofile.svg" alt="Servicio de ejemplo" class="maincontent_servicescontainer_item_image">
                <div class="maincontent_servicescontainer_itemcontent">
                        <p class="maincontent_servicescontainer_itemcontent_title">Nombre Perrito</p>
                        <p class="maincontent_servicescontainer_itemcontent_descrp">Descripción Perrito.<br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae possimus placeat neque officiis quidem nemo eos pariatur, ea rem tempora deserunt, perspiciatis voluptatibus odit quod! Veniam recusandae ut corrupti natus.</p>
                        <p class="maincontent_servicescontainer_itemcontent_descrp">Historia Perrito. <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad incidunt, repellendus tenetur quaerat impedit eaque quod error eligendi modi assumenda quam nulla nam molestiae tempore tempora nesciunt distinctio? Natus, dolorum!</p>
                </div>
                <a class="maincontent_servicescontainer_item_button" href="./animalhistory.php">
                    <img src="../images/huellacaninablanca.svg" alt="phone">
                        Quiero saber más
                </a>
            </div>

            <div class="maincontent_servicescontainer_item">
                <img src="../images/dogprofile.svg" alt="Servicio de ejemplo" class="maincontent_servicescontainer_item_image">
                <div class="maincontent_servicescontainer_itemcontent">
                        <p class="maincontent_servicescontainer_itemcontent_title">Nombre Perrito</p>
                        <p class="maincontent_servicescontainer_itemcontent_descrp">Descripción Perrito.<br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae possimus placeat neque officiis quidem nemo eos pariatur, ea rem tempora deserunt, perspiciatis voluptatibus odit quod! Veniam recusandae ut corrupti natus.</p>
                        <p class="maincontent_servicescontainer_itemcontent_descrp">Historia Perrito. <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad incidunt, repellendus tenetur quaerat impedit eaque quod error eligendi modi assumenda quam nulla nam molestiae tempore tempora nesciunt distinctio? Natus, dolorum!</p>
                </div>
                <a class="maincontent_servicescontainer_item_button" href="./animalhistory.php">
                    <img src="../images/huellacaninablanca.svg" alt="phone">
                        Quiero saber más
                </a>
            </div>

            <div class="maincontent_servicescontainer_item">
                <img src="../images/dogprofile.svg" alt="Servicio de ejemplo" class="maincontent_servicescontainer_item_image">
                <div class="maincontent_servicescontainer_itemcontent">
                        <p class="maincontent_servicescontainer_itemcontent_title">Nombre Perrito</p>
                        <p class="maincontent_servicescontainer_itemcontent_descrp">Descripción Perrito.<br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae possimus placeat neque officiis quidem nemo eos pariatur, ea rem tempora deserunt, perspiciatis voluptatibus odit quod! Veniam recusandae ut corrupti natus.</p>
                        <p class="maincontent_servicescontainer_itemcontent_descrp">Historia Perrito. <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad incidunt, repellendus tenetur quaerat impedit eaque quod error eligendi modi assumenda quam nulla nam molestiae tempore tempora nesciunt distinctio? Natus, dolorum!</p>
                </div>
                <a class="maincontent_servicescontainer_item_button" href="./animalhistory.php">
                    <img src="../images/huellacaninablanca.svg" alt="phone">
                        Quiero saber más
                </a>
            </div>

            <div class="maincontent_servicescontainer_item">
                <img src="../images/dogprofile.svg" alt="Servicio de ejemplo" class="maincontent_servicescontainer_item_image">
                <div class="maincontent_servicescontainer_itemcontent">
                        <p class="maincontent_servicescontainer_itemcontent_title">Nombre Perrito</p>
                        <p class="maincontent_servicescontainer_itemcontent_descrp">Descripción Perrito.<br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae possimus placeat neque officiis quidem nemo eos pariatur, ea rem tempora deserunt, perspiciatis voluptatibus odit quod! Veniam recusandae ut corrupti natus.</p>
                        <p class="maincontent_servicescontainer_itemcontent_descrp">Historia Perrito. <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad incidunt, repellendus tenetur quaerat impedit eaque quod error eligendi modi assumenda quam nulla nam molestiae tempore tempora nesciunt distinctio? Natus, dolorum!</p>
                </div>
                <a class="maincontent_servicescontainer_item_button" href="./animalhistory.php">
                    <img src="../images/huellacaninablanca.svg" alt="phone">
                        Quiero saber más
                </a>
            </div>

            <div class="maincontent_servicescontainer_item">
                <img src="../images/dogprofile.svg" alt="Servicio de ejemplo" class="maincontent_servicescontainer_item_image">
                <div class="maincontent_servicescontainer_itemcontent">
                        <p class="maincontent_servicescontainer_itemcontent_title">Nombre Perrito</p>
                        <p class="maincontent_servicescontainer_itemcontent_descrp">Descripción Perrito.<br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae possimus placeat neque officiis quidem nemo eos pariatur, ea rem tempora deserunt, perspiciatis voluptatibus odit quod! Veniam recusandae ut corrupti natus.</p>
                        <p class="maincontent_servicescontainer_itemcontent_descrp">Historia Perrito. <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad incidunt, repellendus tenetur quaerat impedit eaque quod error eligendi modi assumenda quam nulla nam molestiae tempore tempora nesciunt distinctio? Natus, dolorum!</p>
                </div>
                <a class="maincontent_servicescontainer_item_button" href="./animalhistory.php">
                    <img src="../images/huellacaninablanca.svg" alt="phone">
                        Quiero saber más
                </a>
            </div>

            <div class="maincontent_servicescontainer_item">
                <img src="../images/dogprofile.svg" alt="Servicio de ejemplo" class="maincontent_servicescontainer_item_image">
                <div class="maincontent_servicescontainer_itemcontent">
                        <p class="maincontent_servicescontainer_itemcontent_title">Nombre Perrito</p>
                        <p class="maincontent_servicescontainer_itemcontent_descrp">Descripción Perrito.<br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae possimus placeat neque officiis quidem nemo eos pariatur, ea rem tempora deserunt, perspiciatis voluptatibus odit quod! Veniam recusandae ut corrupti natus.</p>
                        <p class="maincontent_servicescontainer_itemcontent_descrp">Historia Perrito. <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad incidunt, repellendus tenetur quaerat impedit eaque quod error eligendi modi assumenda quam nulla nam molestiae tempore tempora nesciunt distinctio? Natus, dolorum!</p>
                </div>
                <a class="maincontent_servicescontainer_item_button" href="./animalhistory.php">
                    <img src="../images/huellacaninablanca.svg" alt="phone">
                        Quiero saber más
                </a>
            </div>
            
                
        </div>
        
    </main>



    <?php
        include('../php/accesibility.php');
        include('../php/footer.php');
    ?>
</body>
</html>