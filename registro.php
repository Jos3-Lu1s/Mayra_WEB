<?php
include('header.php');
require_once('./sesiones/signup y validacion.php');
?>

<div style="background-image: url('https://media-public.canva.com/8RNpc/MADbgs8RNpc/2/tl.png');">
    <div class="container">
        <br>
        <div class="row shadow p-3 bg-body rounded">
            <div class="col-8 d-none d-xl-block d-xxl-none">
                <img src="./img//tl.png" alt="">
            </div>

            <div class="col-lg-4 col-sm-6 py-5">

                <!-- Validacion de formularios -->

                <?php if(isset($_SESSION['message'])) {?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_SESSION['message'] ?>
                    </div>
                <?php session_unset(); } ?>

                <?php if(isset($_SESSION['message2'])) {?>
                    <div class="alert alert-primary" role="alert">
                        <?= $_SESSION['message2'] ?>
                    </div>
                <?php session_unset(); } ?>

                <form action="registro.php" method="post" class="py-3">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name_form" id="name" class="border border-0 border-bottom border-4 border-primary form-control" aria-describedby="textHelp">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" name="lastname_form" id="lastname" class="border border-0 border-bottom border-4 border-primary form-control" aria-describedby="textHelp">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Email address</label>
                        <input type="email" name="email_form" class="border border-0 border-bottom border-4 border-primary  form-control" id="InputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Password</label>
                        <input type="password" name="password_form" class="border border-0 border-bottom border-4 border-primary form-control" id="InputPassword">
                    </div>
                    <div class="mb-3">
                        <label for="InputPasswordc" class="form-label">Confirm Password</label>
                        <input type="password" name="cpassword_form" class="border border-0 border-bottom border-4 border-primary form-control" id="InputPasswordc">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" value="send" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <br>
    </div>
</div>

<?php
include('footer.php');
?>