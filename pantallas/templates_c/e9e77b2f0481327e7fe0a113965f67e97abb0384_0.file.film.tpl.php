<?php
/* Smarty version 3.1.33, created on 2019-02-06 10:14:25
  from 'C:\UwAmp\pantallas\templates\film.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5aa571065c35_29904096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9e77b2f0481327e7fe0a113965f67e97abb0384' => 
    array (
      0 => 'C:\\UwAmp\\pantallas\\templates\\film.tpl',
      1 => 1549444363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5aa571065c35_29904096 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="es-ES">
<head>
    <meta charset="utf8" />
    <title>Netflux</title>
    <link rel="stylesheet" type="text/css" href="css/film.css">
    <?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>
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
                <img src="carteles/<?php echo $_smarty_tpl->tpl_vars['parameter']->value['poster'];?>
">
            </article>
            <div id="synopsis">
                <h4><?php echo $_smarty_tpl->tpl_vars['parameter']->value['title'];?>
</h4>
                <p><?php echo $_smarty_tpl->tpl_vars['parameter']->value['synopsis'];?>
</p>
            </div>
            <div>
                <button><a href="player.php">Ver Online</a></button>
                <button>Descargar</button>
            </div>
        </section>
    </main>
</body>
</html><?php }
}
