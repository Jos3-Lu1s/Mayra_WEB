<?php

session_start();

if(!isset($_SESSION['Usuario'])){
    header('Location: registro.php');
}

include("header.php");
?>

<div class="container p-4">
    <div class="row">
        <div class="col md-4">
            <div class="card card-body">
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
                    <!-- <div class="mb-3 form-check">
                        <input type="checkbox" name="check_form" class="form-check-input" id="Check">
                        <label class="form-check-label" for="Check">Check me out</label>
                    </div> -->
                    <div class="d-grid gap-2">
                        <button type="submit" value="send" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col md-8">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Mail</th>
                        <th>Categoria</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>