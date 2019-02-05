<?php
/* Smarty version 3.1.33, created on 2019-02-05 19:16:55
  from 'C:\UwAmp\pantallas\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c59d317ec1536_95986490',
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
  'includes' => 
  array (
  ),
),false)) {
function content_5c59d317ec1536_95986490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20828999845c59d317e730e7_19924543';
?>
<!DOCTYPE html>
<html lang="es">
<head>
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
        <a href="">Cerrar Sesión</a>
    </header>
    <main>
        <nav>
            <a href="">Ordenar alfabeticamente</a>
            <a href="">Ordenar por categorias</a>
        </nav>
        <section id="films">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parameter']->value, 'video');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
?>
            <article>
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
