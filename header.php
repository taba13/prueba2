<?php include_once 'autoload.php';
use App\Modelos\DB;
if (isset($_SESSION['logueado'])) {
	$user = DB::traerPorEmail($_SESSION['logueado']);
	$id = $user['id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200" rel="stylesheet">
	<link href="https://unpkg.com/ionicons@4.4.7/dist/css/ionicons.min.css" rel="stylesheet">
	<meta charset="UTF-8">
	<title>PROYECTO X - Insumos</title>

</head>
<body>
	<!-- . cabeza -->
	<header class="cabeza">
	    <!-- . nav -->
	    <nav class="navbar navbar-expand-lg">
	    	<div class="container">
	    	<a id="logo" class="navbar-brand" href="<?php echo APP_URL; ?>"><img src="img/logo.png"></a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mx-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="productos.php">Productos</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="faq.php">FAQ</a>
		      </li>
		      <?php
		      if ( ! isset($_SESSION['logueado'])) { ?>
		      <li class="nav-item">
		        <a class="nav-link" href="login.php">Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="register.php">Registrarse</a>
		      </li>
		  		<?php } else {
		       ?>
				<li class="nav-item">
 		      		<a class="nav-link" href="profileUser.php?id=<?= $id ?>">Profile</a>
 		      </li>
				<li class="nav-item">
		        	<a class="nav-link" href="cargar_producto.php">Crear producto</a>
		      </li>
		      <li class="nav-item">
		        	<a class="nav-link" href="logout.php">Logout</a>
		      </li>
		  		<?php } ?>
					<li class="nav-item">
		        <a id="img-carrito" class="navbar-brand"><img src="img/shopping-cart.png"></a>
		      </li>
		    </ul>
		  </div>
		  </div>
		</nav>
	    <!-- fin . nav -->
	</header>
	<!-- fin . cabeza -->
	<div class="placeholder"></div>
