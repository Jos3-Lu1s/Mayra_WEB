<?php
require_once('database.php');

### Validaciones

if(isset($_POST['name_form'])){
    $name = $_POST['name_form'];
    $lastname = $_POST['lastname_form'];
    $email = $_POST['email_form'];
    $password_usr = $_POST['password_form'];
    
    $campos = array();
    
    if(strlen($password_usr) < 8){
        array_push($campos, "El Password debe ser mayor a 8 caracteres");
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($campos, "Ingrese un correo valido");
    }

    if($name == "" || $lastname == "" || $email == "" || $password_usr == ""){
        array_push($campos, "No puede haber campos vacios");
    }

    if(strlen($name) > 15){
        array_push($campos, "Nombre demasiado grande");
    }

    if(strlen($lastname) > 15){
        array_push($campos, "Apellido demasiado grande");
    }

    if(count($campos) > 0){
        for($i = 0; $i < count($campos); $i++){
            $_SESSION['message']=$campos[$i];
        }
    }
    else{
        
        $_SESSION['message2']='Datos Correctos';
    
        ###Insert

        if(!empty($_POST)){
            $name = $_POST['name_form'];
            $lastname = $_POST['lastname_form'];
            $email = $_POST['email_form'];
            $password_usr = password_hash($_POST['password_form'], PASSWORD_DEFAULT, array("cost"=>12));
            $idcat = 1;
            
            $sql = "INSERT INTO users (name_user, las_name, email_user, password_user, ID_cat) VALUES (:name_user, :las_name, :email_user, :password_user, :ID_cat)";
            $query = $pdo->prepare($sql);
            $query->execute([
                'name_user'=>$name,
                'las_name'=>$lastname,
                'email_user'=>$email,
                'password_user'=>$password_usr,
                'ID_cat'=>$idcat
            ]);
        }
    }
}
?>