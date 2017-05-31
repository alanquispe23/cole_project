<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mi Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript">

	//Mauricio: Esta función debe validar que los nombres y password
	//ingresados son validos ejemplo no se puede ingresar: '!=45 como nombre
	//esto daria lugar a inyecciones
	function enviar(){
		//obtenemos valores de los formularios:
		var formulario = document.getElementById("miform");
		var usu = formulario[0].value;
		var pass = formulario[1].value;

		/*if (usu=="alanquispe23@gmail.com" && pass=="123"){
			alert("Enviando el formulario");
			formulario.submit();
			return true;
		} else {
			alert("No se envía el formulario");
			return false;
		}*/
	}
	</script>
	<style>
	body{
		padding-top: 40px;
		padding-bottom: 40px;
	}
	.login{
		max-width: 330px;
		padding: 15px;
		margin: 0 auto;
	}
	#sha{
		max-width: 340px;
		-webkit-box-shadow:0px 0px 18px 0px rgba(48,50,50,0.48);
		-moz-box-shadow:    0px 0px 18px 0px rgba(48,50,50,0.48);
		box-shadow:        0px 0px 18px 0px rgba(48,50,50,0.48);
		border-radius: 6%;
	}
	#avatar{
		width: 96px;
		height: 96px;
		margin: 0px auto 10px;
		display: block;
		border-radius: 50%;

	}
	</style>
</head>
<body>
	<!-- id sha (sha=shadow=sombra) para darle estilos personalizados al contenedor -->
	<div class="container well" id="sha">
		<div class="row">
			<div class="col-xs-12">
				<img src="img/icon-user.png" class="img-responsive" id="avatar">
			</div>
		</div>
		<!-- al presionar nos envia al archivo check.php-->
		<form action="comprueba_login.php" id="miform" method="POST" class="login" onsubmit="return enviar();">
			<div class="form-group">
				<!-- tiene auto foco o auto el cursor se situa en este input-->
				<!-- required significa que cuando este campo este vacio no nos permitira enviarlo-->
				<input type="user" class="form-control" placeholder="Usuario" name="usu" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Contraseña" name="password" required>
			</div>
			<!-- del tipo submit permite enviar la informacion-->
			<button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
			<div class="checkbox">
				<p class="help-block"><a href="#">¿No puedes acceder a tu cuenta?</a></p>
        <p class="help-block"><a href="nueva_cuenta.html">Crear una cuenta nueva</a></p>
			</div>
		</form>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
