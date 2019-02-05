<?php
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.33, created on 2019-02-05 21:07:02
=======
/* Smarty version 3.1.33, created on 2019-02-04 13:26:08
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
/* Smarty version 3.1.33, created on 2019-02-04 13:26:08
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
  from 'C:\UwAmp\pantallas\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5c59ece6723f19_18271344',
=======
  'unifunc' => 'content_5c582f6020b960_58221599',
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
  'unifunc' => 'content_5c582f6020b960_58221599',
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2b62e41846971499e71d51bf7fcb17dbb20931f' => 
    array (
      0 => 'C:\\UwAmp\\pantallas\\templates\\main.tpl',
<<<<<<< HEAD
<<<<<<< HEAD
      1 => 1549397210,
=======
      1 => 1549283158,
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
      1 => 1549283158,
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
function content_5c59ece6723f19_18271344 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es-ES">
<head>

=======
=======
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
function content_5c582f6020b960_58221599 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<head>
<<<<<<< HEAD
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina principal</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>

</head>
<body>
    <header>
        <i class="fas fa-caret-square-down"></i>
        <h3>Pagina principal</h3>
<<<<<<< HEAD
<<<<<<< HEAD
        <a href="logout.php">Cerrar Sesión</a>
    </header>
    <main>
        <nav>
            <a href="">Ordenar alfabeticamente</a>
            <a href="">Ordenar por categorias</a>
        </nav>
        <section id="films">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parameter']->value, 'video');
=======
=======
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
        <a href="">Cerrar Sesión</a>
    </header>
    <main>
        <nav>
        </nav>
        <section id="films">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videos']->value, 'video');
<<<<<<< HEAD
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
?>
            <article>
<<<<<<< HEAD
<<<<<<< HEAD
                <form id="<?php echo $_smarty_tpl->tpl_vars['video']->value['cod'];?>
" method="post" action="film.php">
                    <span><?php echo $_smarty_tpl->tpl_vars['video']->value['tematic'];?>
</span>
                    <a href="#" onclick="document.getElementById('<?php echo $_smarty_tpl->tpl_vars['video']->value['cod'];?>
').submit()">
                        <img src="carteles/<?php echo $_smarty_tpl->tpl_vars['video']->value['poster'];?>
">
                        <input type="hidden" name="video" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['cod'];?>
">
                    </a>
                   
=======
=======
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
                <form id="<?php echo $_smarty_tpl->tpl_vars['video']->value->cod;?>
" method="post" action="film.php">
                    <a href="#" onclick="document.getElementById('<?php echo $_smarty_tpl->tpl_vars['video']->value->cod;?>
').submit()">
                        <img src="carteles/<?php echo $_smarty_tpl->tpl_vars['video']->value->poster;?>
">
                        <input type="hidden" name="video" value="<?php echo $_smarty_tpl->tpl_vars['video']->value->cod;?>
">
                    </a>
<<<<<<< HEAD
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
                </form>
            </article>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </section>
    </main>
</body>
</html>
<?php }
}
