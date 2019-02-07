
<!doctype html>
<html lang="es-ES">
<head>
    <meta charset="utf8" />
    <title>Netflux</title>
    <link rel="stylesheet" type="text/css" href="css/film.css">
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
                <img src="carteles/{$parameter.poster}">
            </article>
            <div id="synopsis">
                <h4>{$parameter.title}</h4>
                <p>{$parameter.synopsis}</p>
            </div>
            <div>
               <a href="player.php?video={$parameter.video}">Ver Online</a>
                <button>Descargar</button>
            </div>
        </section>
    </main>
</body>
</html>