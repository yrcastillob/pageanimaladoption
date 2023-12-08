<?php
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
    <link rel="stylesheet" href="../css/index.css">
    <title>accesibility</title>
</head>
<body>
    <div class="accesibility">
        <button id="btnContrast" onclick="" class="accesibility_button" aria-label="Aumentar Contraste">
            <svg id="contrast" data-name="contrast" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><title>Aumentar contraste</title><circle cx="50" cy="50" r="32" style="fill:none;stroke:#ecf2f6;stroke-miterlimit:10;stroke-width:6px"/><path d="M25.5,50a24.5,24.5,0,0,0,24,24.49v-49A24.5,24.5,0,0,0,25.5,50Z" style="fill:#ecf2f6"/></svg> 
        </button>

        <button id="btnTextSize" onclick="" class="accesibility_button" aria-label="Aumentar tamaño texto">
            <svg id="textSize" data-name="textSize" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><title>Aumentar tamaño texto</title><path d="M94,17.32v9.32H75.64v51.7H64.29V26.64H45.85V17.32Z" style="fill:#ecf2f6"/><path d="M42.69,35.53v6.54H29.81V78.34h-8V42.07H8.91V35.53Z" style="fill:#ecf2f6"/></svg>
        </button>

    </div>
    <script src="http://localhost/dwv/js/universal.js" defer></script>
</body>
</html>';
?>
