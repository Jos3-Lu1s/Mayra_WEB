<?php
include('header.php');

include('./sesiones/database.php');

##Crud Update
##$ID=$_GET["id"];
$nom=$_GET["nom"];
$ape=$_GET["ape"];
$dir=$_GET["dir"];


?>

<div class="container">
    <div class="row py-4">
        <div class="col-4 py-5 mx-auto shadow-lg p-3 mb-5 bg-body rounded">
            <!-- enviar informacion a la propia pagina -->
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="py-3 ">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name_form" id="name" class="border border-0 border-bottom border-4 border-primary form-control" aria-describedby="textHelp"  value="<?php echo $nom?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" name="lastname_form" id="lastname" class="border border-0 border-bottom border-4 border-primary form-control" aria-describedby="textHelp" value="<?php echo $ape ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="InputEmail" class="form-label">Email address</label>
                    <input type="email" name="email_form" class="border border-0 border-bottom border-4 border-primary  form-control" id="InputEmail" aria-describedby="emailHelp" value="<?php echo $dir ?>">
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label">Password</label>
                    <input type="password" name="password_form" class="border border-0 border-bottom border-4 border-primary form-control" id="InputPassword">
                </div>
                <div class="mb-3">
                    <label for="InputPasswordc" class="form-label">Confirm Password</label>
                    <input type="password" name="cpassword_form" class="border border-0 border-bottom border-4 border-primary form-control" id="InputPasswordc">
                </div>
                <!-- <div class="mb-3 form-check">
                    <input type="checkbox" name="check_form" class="form-check-input" id="Check">
                    <label class="form-check-label" for="Check">Check me out</label>
                </div> -->
                <div class="d-grid gap-2">
                    <button type="submit" value="send" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>