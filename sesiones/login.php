<?php

session_start();

include_once 'database.php';

$mailog=$_POST['mailog'];

$passlog=$_POST['passlog'];

$sentencia = $pdo->prepare("SELECT * FROM users WHERE email_user = ? AND password_user = ?");

$sentencia->execute([$mailog, $passlog]);
$datos = $sentencia->fetch(PDO::FETCH_OBJ);

##print_r($datos)

if($datos === false){
    header('Location: ../registro.php');
}
elseif($sentencia->rowCount() == 1){
    $_SESSION['nombre']=$datos->name_user;
    header('Location: administrador.php');
}

?>