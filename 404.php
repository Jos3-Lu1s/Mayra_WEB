<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<header>
    <nav class="bg-dark pt-3 pb-3">
        <div class="container">
            <a href="./index.php">
                <img src="img/img_Header/2.svg" alt="" width="120px">
            </a>
        </div>
    </nav>
</header>

<body background="img/img_404/background.png">
    <div class="container container-fluid py-5">
        <div class="row text-center">
            <div class="col-12 col-md-12 col-sm-12 col-lg-6">
                <img class="img-fluid" src="./img/img_404/Pan404.png" alt="" width="80%">
            </div>
            <div class="col-12 col-md-12 col-sm-12 col-lg-6">
                <h1 class="display-1 pt-5 fw-bolder text-muted">404</h1>
                <h1 class="display-4 pt-1 pb-3">Página no encontrada</h1>
                <h3 class="font-weight-light text-secondary">Es posible que se haya eliminado <br> la página que estás buscando</h3>
                <a href="./index.php" class="btn btn-dark mt-3 pt-2 pb-2">Vuelve a casa</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

<?php
    include('footer.php')
?>

</html>