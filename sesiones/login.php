<?php

require_once('database.php');

	$sql="SELECT * FROM users WHERE email_user = :login AND password_user = :password";

	$resultado = $pdo->prepare($sql);


	##htmlentities convertir cualquier simbolo en html
	##addslashes
	$login=htmlentities(addslashes($_POST["mailog"]));
	$passlog=htmlentities(addslashes($_POST["passlog"]));

	$resultado->bindValue(":login", $login);
	$resultado->bindValue(":password", $passlog);

	$resultado->execute();

	$numregistro = $resultado->rowCount();

	if($numregistro!=0){###Si el usuario existe

        session_start();## Crear una sesion

        $_SESSION["Usuario"] = $_POST["mailog"];

        header('Location: ../administrador.php');

	}else{

		header('Location: ../registro.php');

	}

?>