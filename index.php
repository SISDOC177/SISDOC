
<?php
//inicia session de usuario
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']['Tipo_usuario'] == "Super_Admin"){
		header('Location: main_app/admin/');
	} else if ($_SESSION['usuario']['Tipo_usuario'] == "Super_Usuario"){
		header('Location: main_app/usuario/');
	} else if($_SESSION['usuario']['Tipo_usuario'] == "Usuario_General"){
		header('Location: main_app/general/');
	} else if($_SESSION['usuario']['Tipo_usuario'] == "Usuario_XArea"){
		header('location: main_app/area/');
	}	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/icomoon3/style.css">
    <link rel="stylesheet" href="bootstrap/style.css">
    <link rel="stylesheet" href="css/loginn.css">
    <link rel="stylesheet" href="css/nav_bar.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/app.js"> </script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/overhang.min.css">
    <script type="text/javascript" src="bootstrap/js/overhang.min.js"></script>

    <title>SISDOC</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">
    <center><img src="img/logo.png"  width="50" height="50" class="d-inline-block align-top" alt="Logo del metro"><font size="6">
     SISDOC</font></center>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>
<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="img/logo.png" class="brand_logo" alt="Logo del metro">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form  id= "formlg" action="" method="POST" role="form">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="icon-user"></i></span>
							</div>
							<input type="text" name="usuariolg" pattern="[A-Za-z0-9_-]{1,15}"  placeholder="usuario" required>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="icon-lock"></i></span>
							</div>
							<input type="password" name="passlg" required pattern="[A-Za-z0-9_-]{1,15}" placeholder="******" required>
						</div>
		
						<div class="mt-4">
					<div class="d-flex justify-content-center links">No tienes cuenta? <a href="index.php" class="ml-2" data-toggle="modal" data-target="#modal1">Registrate aqui</a>
					</div>
					<br>
					<div class="d-flex justify-content-center links">
						<a href="index.php" class="ml-2" data-toggle="modal" data-target="#modal2">Olvidaste tu Contraseña?</a>
					</div>
				</div>
<br>
<center>
                     <input type="submit" class="botonlg" value="iniciar sesion"/>
					 </center>
				   </div>
					</form>
				</div>
		
				
				</div>
			</div>
		</div>
	</div>
    <script src="js/main.js"></script>
	
</body>
</html>
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h5 class="modal-title">Regitrate</h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form class="form-horizontal" action="guardar.php" method="POST">
  <div class="form-group">
  <center>
 <input type="text" style="font-size: 15px; width : 300px; height: 40px;" class="form-control" id="Nombre"  name="Nombre" placeholder="Nombre Completo" required>
</center>
</div>
<div class="form-group">               
<center>
<input type="text" style=" font-size: 15px; width : 300px; height: 40px;" class="form-control" id="Usuario"  name="Usuario" placeholder="Usuario" required>
</center>
</div>
<div class="form-group"> 
<center>
<input type="text" style="font-size: 15px; width : 300px; height: 40px;" class="form-control" id="Contraseña"  name="Contraseña" placeholder="Contraseña" required>
</center>
</div>
<div class="form-group">
 <center>
<input type="text" style=" font-size: 15px; width : 300px; height: 40px;" class="form-control" id="Correo"  name="Correo" placeholder="Correo" required>
</center>
</div>

      <div class="modal-footer">
      <center>
   
          <button type="submit" style="font-size: 15px;" onclick="location.href='index.php'"class="btn btn-primary" value="guardar"></a>guardar</button>

     <button type="button" style="font-size: 15px;" onclick="location.href='index.php'" class="btn btn-primary" value="cancelar">cancelar</button>

       </center>
      </div>
      </diV>
	  </form>
    </div>
  </div>
</div>
<script>
$('#modal1').modal(options);

</script>
