var isVisible = false;
$(document).ready(function() {
    $("#alternar").click(function() {
        if(isVisible){
            $("#contenedor").slideDown("slow");
            isVisible = false;
        } else {
            $("#contenedor").slideUp("slow");
            isVisible = true;
        // alert("Hola como estas");
        }
    });
});
