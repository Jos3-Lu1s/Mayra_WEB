<?php
### Coneccion a base de datos

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'mayra_users';

    try{
        $pdo = new PDO("mysql:host=$server;dbname=$database;",$user,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        ##$pdo->exec("SET CHARACTER SET UTF8");
    }catch(Exception $error){
        echo $error->getMessage();
    }

?>