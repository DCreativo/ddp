//console.log("funcionando");
$("#contactenos").submit(function(event){
    event.preventDefault(); //almacena los datos sin refrescar el sitio web.
    enviarmensaje();
});
function enviarmensaje(){
    //console.log("ejecutado");
    var datos = $("#contactenos").serialize(); //toma los datos "name" y los lleva a un arreglo.
    $.ajax({
        type: "post",
        url:"ajax/contactenos.php",
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
    $("#exitoMensaje").removeClass("d-none");
    $("#errorMensaje").addClass("d-none");
}
function phperror(texto){
    $("#errorMensaje").removeClass("d-none");
    $("#errorMensaje").html(texto);
}
