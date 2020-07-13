<?php 

error_reporting(E_ALL);
ini_set('display_errors',1);

//Declarando variables
$error=''; 
$nombre='';
$email='';

//Validando nombre
if(empty($_POST["nombre"])){
    $error = 'Ingresa tu nombre y apellido';
}else{
    $nombre = $_POST["nombre"];
}

//Validando email
if(empty($_POST["email"])){
    $error = 'Ingresa un email';
}else{
    $email = $_POST["email"];
}

//GUARDANDO EN LA BASE DE DATOS
// require_once '../php/Suscriptores.php';
// $suscriptores = new Suscriptores;

// $id_suscriptores = isset($_POST['id_suscriptores'])? limpiarCadena($_POST['id_suscriptores']):"";

// $suscriptores->insertar($nombre,$email);

//Cuerpo del mensaje
$cuerpo = "Nombre y Apellidos: ";
$cuerpo .= $nombre;
$cuerpo .= "\n";

$cuerpo .= "Email: ";
$cuerpo .= $email;
$cuerpo .= "\n";

//ENVIAR AL CORREO
$enviarA = 'info@ddperu.pe'; //REEMPLAZAR CON TU CORREO ELECTRÓNICO
$asunto = $nombre . ' ';
$asunto .= 'es un(a) nuevo(a) suscriptor(a) de DDP';

//ENVIAR CORREO
if($error == ''){
    mail($enviarA,$asunto,$cuerpo);
    echo 'exito';
}else{
    echo $error;
}

?>