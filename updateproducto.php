<?php

session_start();
include('header.php');


if(!isset($_SESSION['Usuario'])){
    header('Location: registro.php');
}

include('./sesiones/database.php');

if(!isset ($_POST["bot_actualizar"])){

    ##Crud Update
    $ID=$_GET["id"];
    $nom=$_GET["producto"];
    $cost=$_GET["costo"];

}else{

    $ID=$_POST["id"];
    $nom=$_POST["nom"];
    $cost=$_POST["cost"];

    $sql="UPDATE productos SET name_prod=:nombre, costo_unidad=:costo WHERE ID_producto = :idprod";

    $resultado = $pdo->prepare($sql);

    $resultado->execute(array(":idprod"=>$ID, ":nombre"=>$nom, ":costo"=>$cost));

    header("Location: administrador.php");
}



?>

<div class="container">
    <div class="row py-4">
        <div class="col-4 py-5 mx-auto shadow-lg p-3 mb-5 bg-body rounded">
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
                            <input type="text" name="cost" id="lastname" class="border border-0 border-bottom border-4 border-primary form-control" aria-describedby="textHelp" value="<?php echo $cost ?>">
                        </div>
                    </div>
                </div>
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