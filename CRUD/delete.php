<?php

include("../sesiones/database.php");

$ID = $_GET["id"];

$pdo->query("DELETE FROM users WHERE ID_users = $ID");
$pdo->query("DELETE FROM productos WHERE ID_producto = $ID");

header("Location: ../administrador.php");

?>