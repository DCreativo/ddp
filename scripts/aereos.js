//console.log("funcionando");
$("#aereos").submit(function(event){
    event.preventDefault(); //almacena los datos sin refrescar el sitio web.
    enviaraereo();
});
function enviaraereo(){
    //console.log("ejecutado");
    var datos = $("#aereos").serialize(); //toma los datos "name" y los lleva a un arreglo.
    $.ajax({
        type: "post",
        url:"ajax/aereos.php",
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
    $("#exitoAereo").removeClass("d-none");
    $("#errorAereo").addClass("d-none");
}
function phperror(texto){
    $("#errorAereo").removeClass("d-none");
    $("#errorAereo").html(texto);
}
