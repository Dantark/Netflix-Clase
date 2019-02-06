<!doctype html>
<html lang="es-ES">
<head>
    <meta charset="utf8" />
    <title>Netflux</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/login.js"></script>
</head>

<body>
	<div id="alert">
		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  		<span id="error">{$parameter}</span>
	</div>
	<div id="login">
		<form action="login.php" method="post">
			<section id="title">
				<h2>INICIO DE SESIÓN</h2>
			</section>
			<section id="campos">
				<input type="text" id="user" name="user" placeholder="USUARIO">
				<input type="password" id="psw" name="psw" placeholder="CONTRASEÑA">
			</section>
			<section>
				<button type="submit">Enviar datos</button>
			</section>
		</form>
	</div>
</body>
</html>

