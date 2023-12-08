var dogoptions = document.getElementsByClassName("dogoptions");
var catoptions = document.getElementsByClassName("catoptions");

document.querySelectorAll('input[name="animalType"]').forEach(function(radio) {
    radio.addEventListener('change', function() {
        var selectedValue = this.value;
        var i = 0;
        if (selectedValue === "Gaticos") {
            for ( i = 0; i < dogoptions.length; i+=1) {
                dogoptions[i].style.display = "none";
            }
            for ( i = 0; i < catoptions.length; i+=1) {
                catoptions[i].style.display = "block"; 
            }
        } else {
            for ( i = 0; i < catoptions.length; i+=1) {
                catoptions[i].style.display = "none";
            }
            for ( i = 0; i < dogoptions.length; i+=1) {
                dogoptions[i].style.display = "block";
            }
        }
    });
});
