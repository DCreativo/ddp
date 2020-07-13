//console.log("funcionando");
$("#suscripcion").submit(function(event){
    event.preventDefault(); //almacena los datos sin refrescar el sitio web.
    enviarsuscripcion();
});
function enviarsuscripcion(){
    //console.log("ejecutado");
    var datos = $("#suscripcion").serialize(); //toma los datos "name" y los lleva a un arreglo.
    $.ajax({
        type: "post",
        url:"ajax/suscriptores.php",
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
    $("#exitoSuscrip").removeClass("d-none");
    $("#errorSuscrip").addClass("d-none");
}
function phperror(texto){
    $("#errorSuscrip").removeClass("d-none");
    $("#errorSuscrip").html(texto);
}
