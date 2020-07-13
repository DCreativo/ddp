<?php 

error_reporting(E_ALL);
ini_set('display_errors',1);

//Declarando variables
$error=''; 
$nombre='';
$telefono=$_POST["telefono"];
$email='';
$asunto='';
$mensaje='';

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

//Validando asunto
if(empty($_POST["asunto"])){
    $error = 'Ingresa un asunto';
}else{
    $asunto = $_POST["asunto"];
}

//Validando mensaje
if(empty($_POST["mensaje"])){
    $error = 'Ingresa un mensaje';
}else{
    $mensaje = $_POST["mensaje"];
}

//GUARDANDO EN LA BASE DE DATOS
// require_once '../php/Contactenos.php';
// $contactenos = new Contactenos;

// $id_contactenos = isset($_POST['id_contactenos'])? limpiarCadena($_POST['id_contactenos']):"";

// $contactenos->insertar($nombre,$email);

//Cuerpo del mensaje
$cuerpo = "Nombre y Apellidos: ";
$cuerpo .= $nombre;
$cuerpo .= "\n";

$cuerpo .= "Teléfono: ";
$cuerpo .= $telefono;
$cuerpo .= "\n";

$cuerpo .= "Email: ";
$cuerpo .= $email;
$cuerpo .= "\n";

$cuerpo .= "Asunto: ";
$cuerpo .= $asunto;
$cuerpo .= "\n";

$cuerpo .= "Mensaje: ";
$cuerpo .= $mensaje;
$cuerpo .= "\n";

//ENVIAR AL CORREO
$enviarA = 'info@ddperu.pe'; //REEMPLAZAR CON TU CORREO ELECTRÓNICO
$asunto = $nombre . ' ';
$asunto .= 'ha mandado un mensaje desde la página web';

//ENVIAR CORREO
if($error == ''){
    mail($enviarA,$asunto,$cuerpo);
    echo 'exito';
}else{
    echo $error;
}

?>