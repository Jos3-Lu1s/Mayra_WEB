<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Panaderia MAYRA</title>
</head>

<header>
	<div class="bg-dark collapse" id="navbarHeader">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-7 py-4">
					<h4 class="text-white">Acerca de</h4>
					<p class="text-muted">La Panaderia MAYRA ha sido siempre un negocio preocupado por satisfacer las necesidades de sus clientes, ofreciendo siempre la máxima calidad tanto en sus productos como en sus servicios.</p>
				</div>
				<div class="col-sm-4 offset-md-1 py-4">
					<?php
						if(isset($_SESSION['Usuario'])){?>
							<h4 class="text-white py-4"><?php echo $_SESSION['Usuario']?></h4>	
							<a href="administrador.php" class="btn btn-outline-light me-2">Control</a>	
							<a href="./sesiones/logout.php" class="btn btn-danger me-2">Log-out</a>	
					<?php ; }
						elseif(isset($_SESSION['Usuario_general'])){?>
							<h4 class="text-white py-4"><?php echo $_SESSION['Usuario_general']?></h4>	
							<a href="contacto.php" class="btn btn-outline-light me-2">Contactanos</a>	
							<a href="./sesiones/logout.php" class="btn btn-danger me-2">Log-out</a>	
							<?php ;}
						else{?>
							<h4 class="text-white">LOGIN</h4>	
							<form action="./sesiones/login.php" method="POST">
								<div class="mb-3 me-2">
									<input type="text" name="mailog" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
								</div>
								<div class="mb-3 me-2">
									<input type="password" name="passlog" class="form-control" id="exampleFormControlInput1" placeholder="Password">
								</div>
								<div class="text-end">
									<button type="submit" name="btn_login" class="btn btn-outline-light me-2">Login</button>
									<!-- <button type="button" class="btn btn-warning">Sign-up</button> -->
									<a href="registro.php" class="btn btn-warning me-2">Sign-up</a>
								</div>
							</form>
						<?php ;}?>
				</div>
			</div>
		</div>
	</div>

	<div class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
		<div class="container justify-content-center">
			<a href="index.php" class="navbar-brand d-flex align-items-center px-4">
				<img src="./img/img_Header/2.svg" alt="" width="100px">
			</a>
			
			<button class="navbar-toggler collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<button class="navbar-toggler collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
				<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
					<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
					<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
				</svg>
			</button>

			<div class="navbar-collapse collapse" id="menu">
				<ul class="navbar-nav me-auto mb-2 mb-md-0">
					<!-- <li><a href="index.php" class="nav-link px-2 text-white">Inicio</a></li> -->
					<li class="nav-item"><a href="establecimientos.php" class="nav-link active" aria-current="page">Establecimientos</a></li>
					<li class="nav-item"><a href="nosotros.php" class="nav-link active" aria-current="page">Nosotros</a></li>
					<li class="nav-item"><a href="contacto.php" class="<?php if(isset($_SESSION['Usuario'])||isset($_SESSION['Usuario_general'])){echo "nav-link active";}else{echo "nav-link disabled";} ?>" aria-current="page">Contacto</a></li>
					<?php
						if(isset($_SESSION['Usuario'])){?>
							<li class="nav-item"><a href="administrador.php" class="nav-link active" aria-current="page">CRUD</a></li>
					<?php ; }?>
				</ul>
			</div>

			<button class="navbar collapsed border-0 d-none d-xl-block d-xxl-none btn-dark rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
				<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
					<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
					<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
				</svg>
			</button>

		</div>
	</div>
</header>

<body>