<?php
require_once('./sesiones/database.php');

if(!empty($_POST)){
    $name = $_POST['name_form'];
    $lastname = $_POST['lastname_form'];
    $email = $_POST['email_form'];
    $password_usr = $_POST['password_form'];
    $password_confirm = $_POST['cpassword_form'];
    $admin = $_POST['check_form'];
    $idcat = 1;
    $idcatad = 2;

    if($password_usr == $password_confirm && $admin == false){
        
        $sql = "INSERT INTO users (name_user, las_name, email_user, password_user, ID_cat) VALUES (:name_user, :las_name, :email_user, :password_user, :ID_cat)";
        $query = $pdo->prepare($sql);
        $query->execute([
            'name_user'=>$name,
            'las_name'=>$lastname,
            'email_user'=>$email,
            'password_user'=>$password_usr,
            'ID_cat'=>$idcat
        ]);
        header("Location: administrador.php");
    }
    elseif($password_usr == $password_confirm && $admin == true){
        $sql = "INSERT INTO users (name_user, las_name, email_user, password_user, ID_cat) VALUES (:name_user, :las_name, :email_user, :password_user, :ID_cat)";
        $query = $pdo->prepare($sql);
        $query->execute([
            'name_user'=>$name,
            'las_name'=>$lastname,
            'email_user'=>$email,
            'password_user'=>$password_usr,
            'ID_cat'=>$idcatad
        ]);
        header("Location: administrador.php");
    }
    else{
        header("Location: administrador.php");
    }
    
}

?>