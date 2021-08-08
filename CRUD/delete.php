<?php

include("../sesiones/database.php");

$ID = $_GET["id"];

$pdo->query("DELETE FROM users WHERE ID_users = $ID");

header("Location: ../administrador.php");

?>