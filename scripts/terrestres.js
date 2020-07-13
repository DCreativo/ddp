//console.log("funcionando");
$("#terrestres").submit(function(event){
    event.preventDefault(); //almacena los datos sin refrescar el sitio web.
    enviarterrestre();
});
function enviarterrestre(){
    //console.log("ejecutado");
    var datos = $("#terrestres").serialize(); //toma los datos "name" y los lleva a un arreglo.
    $.ajax({
        type: "post",
        url:"ajax/terrestres.php",
        data: datos,
        success: function(texto){
            if(texto=="exito"){
                correcto();
            }else{
                phperror(texto);
            }
        }
    })
}
function correcto(){
    $("#exitoTerrestre").removeClass("d-none");
    $("#errorTerrestre").addClass("d-none");
}
function phperror(texto){
    $("#errorTerrestre").removeClass("d-none");
    $("#errorTerrestre").html(texto);
}
