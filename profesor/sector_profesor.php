
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Pagina de Inicio Profesores</title>
<meta name="keywords" content="" />
<meta name="prof" content="" />
<link href="../micss/default.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="../micss/style (2).css">

<script>
		function poner(){
		var com=(document.Documento.comentarios.value);
		document.Documento.comen.value=com;
		}
</script>
</head>
<body>
	<?php
	session_start();//reanudamos una session si es que la hay
	if(!isset($_SESSION["usuario"])){
		//redirigimos si no existe la session
		header("location:login_profesor.php");
	}
	 ?>
<div id="header">
	<div id="logo">
		<h1>Profesores</h1>
	</div>
	<div id="menu-bg">
		<div id="menu">
			<li><a href="sector_profesor.php"><h3>Inicio</h3></a></li>
			<li><a href="#"><h3>Nuevo</h3></a></li>
			<li><a href="sube_archivos_profesor.php"><h3>Subir Archivos</h3></a></li>
			<li><a href="#"><h3>Nuevo</h3></a></li>
		</div>
	</div>
</div>
	<div id="page">
		<div id="content">
				<p><h1 class="title">Comunicados</h1></p>
				<form action="publica_comunicado.php" method="post" name="Documento">
					<textarea name="comunicado" rows="4" cols="60" backgroud=#123456></textarea>
				<p>
					<button type="submit" name="borrar">Borrar</button>
					<button type="submit" name="publicar">Publicar</button>
				</p>
					<p><h1 class="title">Anteriores</h1></p>
	      	<textarea name="comen" rows="2" cols="60"></textarea>
      	</form>
				<!-- Contenedor Principal -->
			    <div class="comments-container">
			        <ul id="comments-list" class="comments-list">
			            <li>
			                <div class="comment-main-level">
			                    <!-- Avatar -->
			                    <div class="comment-avatar"><img src="img/avatar_1.jpg" alt=""></div>
			                    <!-- Contenedor del Comentario -->
			                    <div class="comment-box">
			                        <div class="comment-head">
			                            <h6 class="comment-name">NOMBRE DEL COMENTARISTA</h6>
			                            <span>hace 20 minutos</span>
			                        </div>
			                        <div class="comment-content">
			                            TODO EL COMNETARIO QUE SE OBTENGA DE LA BD
			                        </div>
			                    </div>
			                </div>

			                <!-- Respuestas de los comentarios -->
			                <ul class="comments-list reply-list">
			                    <li>
			                        <!-- Avatar -->
			                        <div class="comment-avatar"><img src="img/avatar_2.jpg" alt=""></div>
			                        <!-- Contenedor del Comentario -->
			                        <div class="comment-box">
			                            <div class="comment-head">
			                                <h6 class="comment-name">NOMBRE DEL COMENTARISTA</h6>
			                            <span>hace 20 minutos</span>
			                        </div>
			                        <div class="comment-content">
			                            TODO EL COMNETARIO QUE SE OBTENGA DE LA BD
			                        </div>
			                        </div>
			                    </li>
			                </ul>
			            </li>
			            <li>
			                <div class="comment-main-level">
			                    <!-- Avatar -->
			                    <div class="comment-avatar"><img src="img/avatar_2.jpg" alt=""></div>
			                    <!-- Contenedor del Comentario -->
				                    <div class="comment-box">
				                        <div class="comment-head">
				                            <h6 class="comment-name">NOMBRE DEL COMENTARISTA</h6>
				                            <span>hace 20 minutos</span>
				                        </div>
				                        <div class="comment-content">
				                            TODO EL COMNETARIO QUE SE OBTENGA DE LA BD
				                        </div>
				                    </div>
			                </div>
			            </li>
			        </ul>
			    </div>
		</div>
	</div>
	<div id="sidebar"> <img src="../img/colegios.jpg"><img src="../img/img_437552.jpg"></div>
</div>
</html>
