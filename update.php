<?php

session_start();
include('header.php');


if(!isset($_SESSION['Usuario'])){
    header('Location: registro.php');
}

##conexion
include('./sesiones/database.php');

if(!isset ($_POST["bot_actualizar"])){

    ##Crud Update
    $ID=$_GET["id"];
    $nom=$_GET["nom"];
    $ape=$_GET["ape"];
    $dir=$_GET["dir"];
    $contra=$_GET["password"];

}else{

    $ID=$_POST["id"];
    $nom=$_POST["nom"];
    $ape=$_POST["ape"];
    $dir=$_POST["dir"];
    $contra=$_POST["password"];

    $sql="UPDATE users SET name_user=:nombre, las_name=:apellido, email_user=:direccion, password_user=:contras WHERE ID_users = :idusuario";

    $resultado = $pdo->prepare($sql);

    $resultado->execute(array(":idusuario"=>$ID, ":nombre"=>$nom, ":apellido"=>$ape, ":direccion"=>$dir, ":contras"=>$contra));

    header("Location: administrador.php");
}



?>

<div class="container">
    <div class="row py-4">
        <div class="col-lg-4 py-5 mx-auto shadow-lg p-3 mb-5 bg-body rounded">
            <!-- enviar informacion a la propia pagina -->
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="py-3 ">
                <div class="row">
                    <div class="mb-3">
                        <input type="hidden" name="id" id="name" class="border border-0 border-bottom border-4 border-primary form-control" aria-describedby="textHelp"  value="<?php echo $ID?>">
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="nom" id="name" class="border border-0 border-bottom border-4 border-primary form-control" aria-describedby="textHelp"  value="<?php echo $nom?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" name="ape" id="lastname" class="border border-0 border-bottom border-4 border-primary form-control" aria-describedby="textHelp" value="<?php echo $ape ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="InputEmail" class="form-label">Email address</label>
                    <input type="email" name="dir" class="border border-0 border-bottom border-4 border-primary  form-control" id="InputEmail" aria-describedby="emailHelp" value="<?php echo $dir ?>">
                </div>
                <div class="mb-3">
                    <!-- <label for="InputPassword" class="form-label">Password</label> -->
                    <input type="hidden" name="password" class="border border-0 border-bottom border-4 border-primary form-control" id="InputPassword" value="<?php echo $contra ?>">
                </div>
                <!-- <div class="mb-3">
                    <label for="InputPasswordc" class="form-label">Confirm Password</label>
                    <input type="password" name="cpassword_form" class="border border-0 border-bottom border-4 border-primary form-control" id="InputPasswordc">
                </div> -->
                <!-- <div class="mb-3 form-check">
                    <input type="checkbox" name="check_form" class="form-check-input" id="Check">
                    <label class="form-check-label" for="Check">Check me out</label>
                </div> -->
                <div class="d-grid gap-2">
                    <button type="submit" name="bot_actualizar" value="send" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>