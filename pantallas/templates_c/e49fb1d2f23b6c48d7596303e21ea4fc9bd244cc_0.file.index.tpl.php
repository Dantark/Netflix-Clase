<?php
/* Smarty version 3.1.33, created on 2019-01-29 13:50:42
  from 'C:\UwAmp\pantallas\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c504c22ee4787_45741483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e49fb1d2f23b6c48d7596303e21ea4fc9bd244cc' => 
    array (
      0 => 'C:\\UwAmp\\pantallas\\templates\\index.tpl',
      1 => 1548765687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c504c22ee4787_45741483 (Smarty_Internal_Template $_smarty_tpl) {
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
</html><?php }
}
