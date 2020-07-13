<?php 

error_reporting(E_ALL);
ini_set('display_errors',1);

//Declarando variables
$error=''; 
$nombre='';
$apellidos='';
$telefono=$_POST["telefono"];
$email='';
$fecha_ida='';
$fecha_vuelta='';
$cant_adult='';
$cant_ninos='';
$cant_inf='';
$transporte='';

//Validando nombre
if(empty($_POST["nombre"])){
    $error = 'Ingresa un nombre';
}else{
    $nombre = $_POST["nombre"];
}

//Validando apellidos
if(empty($_POST["apellidos"])){
    $error = 'Ingresa tus apellidos';
}else{
    $apellidos = $_POST["apellidos"];
}

//Validando email
if(empty($_POST["email"])){
    $error = 'Ingresa un email';
}else{
    $email = $_POST["email"];
}

//Validando fecha ida
if(empty($_POST["fecha_ida"])){
    $error = 'Ingresa la fecha de ida';
}else{
    $fecha_ida = $_POST["fecha_ida"];
}

//Validando fecha vuelta
if(empty($_POST["fecha_vuelta"])){
    $error = 'Ingresa la fecha de vuelta';
}else{
    $fecha_vuelta = $_POST["fecha_vuelta"];
}

//Validando cantidad adultos
if(empty($_POST["cant_adult"])){
    $error = 'Ingresa la cantidad de adultos';
}else{
    $cant_adult = $_POST["cant_adult"];
}

//Validando cantidad niños
if(empty($_POST["cant_ninos"])){
    $error = 'Ingresa la cantidad de niños';
}else{
    $cant_ninos = $_POST["cant_ninos"];
}

//Validando cantidad infantes
if(empty($_POST["cant_inf"])){
    $error = 'Ingresa la cantidad de infantes';
}else{
    $cant_inf = $_POST["cant_inf"];
}

//Validando transporte
if(empty($_POST["transporte"])){
    $error = 'Ingresa el transporte';
}else{
    $transporte = $_POST["transporte"];
}

//GUARDANDO EN LA BASE DE DATOS
// require_once '../php/Aereos.php';
// $aereos = new Aereos;

// $id_aereos = isset($_POST['id_aereos'])? limpiarCadena($_POST['id_aereos']):"";

// $aereos->insertar($nombre,$apellidos,$telefono,$email,$fecha_ida,$fecha_vuelta,$cant_adult,$cant_ninos,$cant_inf,$transporte);

//Cuerpo del mensaje
$cuerpo = "Nombre: ";
$cuerpo .= $nombre;
$cuerpo .= "\n";

$cuerpo .= "Apellidos: ";
$cuerpo .= $apellidos;
$cuerpo .= "\n";

$cuerpo .= "Telefono: ";
$cuerpo .= $telefono;
$cuerpo .= "\n";

$cuerpo .= "Email: ";
$cuerpo .= $email;
$cuerpo .= "\n";

$cuerpo .= "Fecha de Ida: ";
$cuerpo .= $fecha_ida;
$cuerpo .= "\n";

$cuerpo .= "Fecha de Vuelta: ";
$cuerpo .= $fecha_vuelta;
$cuerpo .= "\n";

$cuerpo .= "Cantidad de Adultos: ";
$cuerpo .= $cant_adult;
$cuerpo .= "\n";

$cuerpo .= "Cantidad de Niños: ";
$cuerpo .= $cant_ninos;
$cuerpo .= "\n";

$cuerpo .= "Cantidad de Infantes: ";
$cuerpo .= $cant_inf;
$cuerpo .= "\n";

$cuerpo .= "Transporte: ";
$cuerpo .= $transporte;
$cuerpo .= "\n";


//ENVIAR AL CORREO
$enviarA = 'aereos@ddperu.pe'; //REEMPLAZAR CON TU CORREO ELECTRÓNICO
$asunto = $nombre . ' ';
$asunto .= $apellidos . ' ';
$asunto .= 'solicita cotización de pasajes aéreos';

//ENVIAR CORREO
if($error == ''){
    mail($enviarA,$asunto,$cuerpo);
    echo 'exito';
}else{
    echo $error;
}

?>