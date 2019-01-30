<?php
/* Smarty version 3.1.33, created on 2019-01-30 10:27:47
  from 'C:\UwAmp\pantallas\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c516e13d22172_69543382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e49fb1d2f23b6c48d7596303e21ea4fc9bd244cc' => 
    array (
      0 => 'C:\\UwAmp\\pantallas\\templates\\index.tpl',
      1 => 1548840437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c516e13d22172_69543382 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="es">
<head>
    <meta charset="utf8" />
    <title>Netflux</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>
</head>

<body>
	<div id="alert">
		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  		<span id="error"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</span>
	</div>
	<div id="login">
		<form action="bridge_login.php" method="post">
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

<?php }
}
