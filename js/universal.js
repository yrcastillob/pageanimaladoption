var menuToggle = document.querySelector(".menuToggle");
var header = document.querySelector("header");
var zoomLevel = 1;
var contrastState = false;
var botoncontrast = document.getElementById("btnContrast");
var btnTextSize = document.getElementById("btnTextSize");


/// TOGGLE MENU

menuToggle.onclick = function(){
    header.classList.toggle("active");
};

/// CAMBIO CONTRASTE

botoncontrast.onclick = function () {
    contrastState = !contrastState;
    const textContrast = document.querySelectorAll("p, a, li, h1, h2, button, input");

    textContrast.forEach(function (element) {
        element.classList.toggle("highContrastText", contrastState);
    });

    const boxContrast = document.querySelectorAll("header, div, section, form, footer, body, button, a, input");

    boxContrast.forEach(function (element) {
        element.classList.toggle("highContrastBox", contrastState);
    });
};

/// ZOOM

btnTextSize.onclick = function () {
    zoomLevel = (zoomLevel === 1) ? 1.4 : 1;
    document.body.style.zoom = zoomLevel;
};
