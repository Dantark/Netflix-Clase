<!DOCTYPE html>
<html lang="es-ES">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina principal</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>

</head>
<body>
    <header>
        <i class="fas fa-caret-square-down"></i>
        <h3>Pagina principal</h3>
        <a href="logout.php">Cerrar Sesión</a>
    </header>
    <main>
        <nav>
            <a href="">Ordenar alfabeticamente</a>
            <a href="">Ordenar por categorias</a>
        </nav>
        <section id="films">
            {foreach from=$parameter item=$video}
            <article>
                <form id="{$video.cod}" method="post" action="film.php">
                    <span>{$video.tematic}</span>
                    <a href="#" onclick="document.getElementById('{$video.cod}').submit()">
                        <img src="carteles/{$video.poster}">
                        <input type="hidden" name="video" value="{$video.cod}">
                    </a>
                   
                </form>
            </article>
            {/foreach}
        </section>
    </main>
</body>
</html>

