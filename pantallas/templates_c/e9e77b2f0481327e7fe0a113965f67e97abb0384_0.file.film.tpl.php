<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.33, created on 2019-02-05 21:13:44
=======
/* Smarty version 3.1.33, created on 2019-02-04 13:21:08
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
/* Smarty version 3.1.33, created on 2019-02-04 13:21:08
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
  from 'C:\UwAmp\pantallas\templates\film.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5c59ee783a91e6_65784936',
=======
  'unifunc' => 'content_5c582e34273d26_55056010',
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
  'unifunc' => 'content_5c582e34273d26_55056010',
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9e77b2f0481327e7fe0a113965f67e97abb0384' => 
    array (
      0 => 'C:\\UwAmp\\pantallas\\templates\\film.tpl',
<<<<<<< HEAD
<<<<<<< HEAD
      1 => 1549397220,
=======
      1 => 1549282866,
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
      1 => 1549282866,
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
<<<<<<< HEAD
function content_5c59ee783a91e6_65784936 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="es-ES">
=======
function content_5c582e34273d26_55056010 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="es">
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
function content_5c582e34273d26_55056010 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="es">
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
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
<<<<<<< HEAD
<<<<<<< HEAD
                <a href="film.php"><img src="carteles/<?php echo $_smarty_tpl->tpl_vars['parameter']->value['poster'];?>
"></a>
            </article>
            <div id="synopsis">
                <h4><?php echo $_smarty_tpl->tpl_vars['parameter']->value['title'];?>
</h4>
                <p><?php echo $_smarty_tpl->tpl_vars['parameter']->value['synopsis'];?>
=======
=======
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
                <a href="film.php"><img src="carteles/<?php echo $_smarty_tpl->tpl_vars['videos']->value->poster;?>
"></a>
            </article>
            <div id="synopsis">
                <h4><?php echo $_smarty_tpl->tpl_vars['videos']->value->title;?>
</h4>
                <p><?php echo $_smarty_tpl->tpl_vars['videos']->value->synopsis;?>
<<<<<<< HEAD
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
</p>
            </div>
        </section>
    </main>
</body>
</html><?php }
}
