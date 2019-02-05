<?php
/* Smarty version 3.1.33, created on 2019-02-05 19:16:55
  from 'C:\UwAmp\pantallas\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c59d317efc4e3_40923980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2b62e41846971499e71d51bf7fcb17dbb20931f' => 
    array (
      0 => 'C:\\UwAmp\\pantallas\\templates\\main.tpl',
      1 => 1549387514,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 300,
),true)) {
function content_5c59d317efc4e3_40923980 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
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
        <a href="">Cerrar Sesi√≥n</a>
    </header>
    <main>
        <nav>
            <a href="">Ordenar alfabeticamente</a>
            <a href="">Ordenar por categorias</a>
        </nav>
        <section id="films">
                        <article>
                <form id="PE02" method="post" action="film.php">
                    <span>B…LICA</span>
                    <a href="#" onclick="document.getElementById('PE02').submit()">
                        <img src="carteles/PELI2.jpg">
                        <input type="hidden" name="video" value="PE02">
                    </a>
                   
                </form>
            </article>
                        <article>
                <form id="PE04" method="post" action="film.php">
                    <span>AVENTURAS</span>
                    <a href="#" onclick="document.getElementById('PE04').submit()">
                        <img src="carteles/PELI4.jpg">
                        <input type="hidden" name="video" value="PE04">
                    </a>
                   
                </form>
            </article>
                        <article>
                <form id="PE04" method="post" action="film.php">
                    <span>ROM¡NTICA</span>
                    <a href="#" onclick="document.getElementById('PE04').submit()">
                        <img src="carteles/PELI4.jpg">
                        <input type="hidden" name="video" value="PE04">
                    </a>
                   
                </form>
            </article>
                        <article>
                <form id="PE01" method="post" action="film.php">
                    <span>ACCI”N</span>
                    <a href="#" onclick="document.getElementById('PE01').submit()">
                        <img src="carteles/PELI1.jpg">
                        <input type="hidden" name="video" value="PE01">
                    </a>
                   
                </form>
            </article>
                        <article>
                <form id="PE01" method="post" action="film.php">
                    <span>B…LICA</span>
                    <a href="#" onclick="document.getElementById('PE01').submit()">
                        <img src="carteles/PELI1.jpg">
                        <input type="hidden" name="video" value="PE01">
                    </a>
                   
                </form>
            </article>
                        <article>
                <form id="PE03" method="post" action="film.php">
                    <span>FANT¡STICA</span>
                    <a href="#" onclick="document.getElementById('PE03').submit()">
                        <img src="carteles/PELI3.jpg">
                        <input type="hidden" name="video" value="PE03">
                    </a>
                   
                </form>
            </article>
                        <article>
                <form id="PE03" method="post" action="film.php">
                    <span>INFANTIL</span>
                    <a href="#" onclick="document.getElementById('PE03').submit()">
                        <img src="carteles/PELI3.jpg">
                        <input type="hidden" name="video" value="PE03">
                    </a>
                   
                </form>
            </article>
                        <article>
                <form id="PE05" method="post" action="film.php">
                    <span>ROM¡NTICA</span>
                    <a href="#" onclick="document.getElementById('PE05').submit()">
                        <img src="carteles/PELI5.jpg">
                        <input type="hidden" name="video" value="PE05">
                    </a>
                   
                </form>
            </article>
                        <article>
                <form id="PE05" method="post" action="film.php">
                    <span>ABURRIDA</span>
                    <a href="#" onclick="document.getElementById('PE05').submit()">
                        <img src="carteles/PELI5.jpg">
                        <input type="hidden" name="video" value="PE05">
                    </a>
                   
                </form>
            </article>
                    </section>
    </main>
</body>
</html>
<?php }
}
