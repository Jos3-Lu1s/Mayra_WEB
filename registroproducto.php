<?php

require_once('./sesiones/database.php');

if(!empty($_POST)){
    $producto = $_POST['producto'];
    $costo = $_POST['costo'];
    
    $sql = "INSERT INTO productos (name_prod, costo_unidad) VALUES (:name_prod, :costo_unidad)";
    $query = $pdo->prepare($sql);
    $query->execute([
        'producto'=>$producto,
        'costo'=>$costo
    ]);

    header("Location: administrador.php");
}
?>