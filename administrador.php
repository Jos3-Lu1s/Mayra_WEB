<?php

session_start();

if(!isset($_SESSION['Usuario'])){
    header('Location: registro.php');
}elseif(isset($_SESSION['Usuario_general'])){
    header('Location: contacto.php');
}

##Crud Read

include("header.php");

include("./sesiones/database.php");

##solo admin
$registros=$pdo->query("SELECT*FROM users WHERE ID_cat = 1")->fetchAll(PDO::FETCH_OBJ);

$registros_ad=$pdo->query("SELECT*FROM users WHERE ID_cat = 2")->fetchAll(PDO::FETCH_OBJ);

$registros_prod=$pdo->query("SELECT*FROM productos")->fetchAll(PDO::FETCH_OBJ);

?>

<div class="container p-4">
    <div class="row">
        <div class="accordion col-lg-4 md-4 pb-3" id="accordionExample">
            <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Registrar usuario
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="card card-body">
                        <h2 class="text-center">Registrar usuario</h2>
                        <form action="registroAdmin.php" method="post" class="py-3">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input required type="text" name="name_form" id="name" class="border-secondary form-control" aria-describedby="textHelp">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input required type="text" name="lastname_form" id="lastname" class="border-secondary form-control" aria-describedby="textHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="InputEmail" class="form-label">Email address</label>
                                <input required type="email" name="email_form" class="border-secondary form-control" id="InputEmail" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="InputPassword" class="form-label">Password</label>
                                <input required type="password" name="password_form" class="border-secondary form-control" id="InputPassword">
                            </div>
                            <div class="mb-3">
                                <label for="InputPasswordc" class="form-label">Confirm Password</label>
                                <input required type="password" name="cpassword_form" class="border-secondary form-control" id="InputPasswordc">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" name="check_form" class="form-check-input" id="Check">
                                <label class="form-check-label" for="Check">Administrador</label>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" value="send" class="btn btn-secondary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Registrar Producto
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="card card-body">
                            <h2 class="text-center">Registrar Producto</h2>
                            <form action="registroproducto.php" method="post" class="py-3">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Producto</label>
                                            <input required type="text" name="producto" id="name" class="border-secondary form-control" aria-describedby="textHelp">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Costo unitario</label>
                                            <input required type="text" name="costo" id="lastname" class="border-secondary form-control" aria-describedby="textHelp">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" value="send" class="btn btn-secondary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col md-8">
            <!-- administrador -->
            <table class="table table-striped table-sm table-bordered table-hover">
                <thead>
                    <tr class="table-dark">
                        <td class="text-center fs-4" colspan="4">ADMINISTRADORES</td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Mail</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                    foreach($registros_ad as $persona):##Diferente nomenclatura
                ?>
                <tr>
                    <td><?php echo $persona->name_user ?></td>
                    <td><?php echo $persona->las_name ?></td>
                    <td><?php echo $persona->email_user ?></td>
                    <td>
                        <!-- Mandar datos -->
                        <a href="update.php?id=<?php echo $persona->ID_users ?> & nom=<?php echo $persona->name_user ?> & ape=<?php echo $persona->las_name?>& dir=<?php echo $persona->email_user?>& password=<?php echo $persona->password_user?>"><input type="button" value="editar"></a>
                        <a href="./CRUD/delete.php?id=<?php echo $persona->ID_users ?>"><input type="button" value="eliminar"></a>
                    </td>
                </tr>
                
                <?php
                    endforeach
                ?>
                </tbody>
            </table>
            <table class="table table-striped table-sm table-bordered table-hover">
                <thead>
                    <tr class="table-dark">
                        <td class="text-center fs-4" colspan="4">GENERAL</td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Mail</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                    foreach($registros as $persona):##Diferente nomenclatura
                ?>
                <tr>
                    <td><?php echo $persona->name_user ?></td>
                    <td><?php echo $persona->las_name ?></td>
                    <td><?php echo $persona->email_user ?></td>
                    <td>
                        <!-- Button trigger modal -->
                        <a href="update.php?id=<?php echo $persona->ID_users ?> & nom=<?php echo $persona->name_user ?> & ape=<?php echo $persona->las_name?>& dir=<?php echo $persona->email_user?>& password=<?php echo $persona->password_user?>"><input type="button" value="editar"></a>
                        <a href="./CRUD/delete.php?id=<?php echo $persona->ID_users ?>"><input type="button" value="eliminar"></a>
                    </td>
                </tr>
                
                <?php
                    endforeach
                ?>
                </tbody>
            </table>

            <table class="table table-striped table-sm table-bordered table-hover">
                <thead>
                    <tr class="table-dark">
                        <td class="text-center fs-4" colspan="4">PRODUCTOS</td>
                    </tr>
                    <tr>
                        <th>Producto</th>
                        <th>Costo</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                    foreach($registros_prod as $producto):##Diferente nomenclatura
                ?>
                <tr>
                    <td><?php echo $producto->name_prod ?></td>
                    <td><?php echo $producto->costo_unidad ?></td>
                    <td>
                        <!-- Button trigger modal -->
                        <a href="updateproducto.php?id=<?php echo $producto->ID_producto ?> & producto=<?php echo $producto->name_prod ?> & costo=<?php echo $producto->costo_unidad?>"><input type="button" value="editar"></a>
                        <a href="./CRUD/delete.php?id=<?php echo $producto->ID_producto ?>"><input type="button" value="eliminar"></a>
                    </td>
                </tr>
                
                <?php
                    endforeach
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>
