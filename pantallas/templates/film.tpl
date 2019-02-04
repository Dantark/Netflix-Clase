<!doctype html>
<html lang="es">
<head>
    <meta charset="utf8" />
    <title>Netflux</title>
    <link rel="stylesheet" type="text/css" href="css/film.css">
    <script src="js/login.js"></script>
</head>

<body>
	<header>
        <i class="fas fa-caret-square-down"></i>
        <h3>Pagina principal</h3>
        <a href="logout.php">Cerrar Sesión</a>
    </header>
    <main>
        <section id="films">
            <article>
                <a href="film.php"><img src="carteles/{$videos->poster}"></a>
            </article>
            <div id="synopsis">
                <h4>{$videos->title}</h4>
                <p>{$videos->synopsis}</p>
            </div>
        </section>
    </main>
</body>
</html>