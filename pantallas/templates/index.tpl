<!doctype html>
<html lang="es">
<head>
    <meta charset="utf8" />
    <title>Netflux</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/login.js"></script>
</head>
<body>
	<div id="login">
		<form action="php/bridge_login.php" method="post">
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