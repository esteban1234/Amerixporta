var visible = false;
$(document).ready(function(){
  $("#cerrar").click(function(){
    $(".contenedor").hide();
    $("#alternar").show(500);
    $("#cerrar").hide();
  });
  $("#alternar").click(function(){
    $(".contenedor").show(500);
    $("#alternar").hide();
    $("#cerrar").show(500);
  });
});
